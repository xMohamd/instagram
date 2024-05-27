<?php

namespace App\Services;

use App\Models\Media;
use App\Models\Tag;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;

class PostService
{

    public function __construct(private PostRepository $postRepository)
    {
    }

    public function create($caption, $files)
    {
        $post = $this->postRepository->create([
            'caption' => $caption,
            'user_id' => Auth::id(),
        ]);

        $tags = [];
        preg_match_all('/#\w+/', $post->caption, $matches);
        $tags = array_unique($matches[0]);
        $post->caption = str_replace($matches[0], "", $post->caption);


        $path = [];
        $files = $files;
        foreach ($files as $file) {
            $media = new Media();
            if ($file->getClientOriginalExtension() === 'mp4' || $file->getClientOriginalExtension() === 'mov' || $file->getClientOriginalExtension() === 'avi' || $file->getClientOriginalExtension() === 'mkv') {
                $media->type = 'video';
            } else {
                $media->type = 'image';
            }
            $media->name = $file->getClientOriginalName();
            $media->size = $file->getSize();
            $media->mime_type = $file->getClientOriginalExtension();
            $path[] = "https://insta-proj.s3.amazonaws.com/" . $file->store('public/images');
            $media->url = end($path);
            $media->save();

            $post->media_id = $media->id;
            $post->save();
        }

        if (count($tags) > 0) {
            foreach ($tags as $tagString) {
                $hashtag = ltrim($tagString, '#');
                $tag = Tag::firstOrCreate(['tag' => $hashtag]);
                $post->tags()->attach($tag->id);
            }
        }

        return $path;
    }

    public function get()
    {
        $posts = $this->postRepository->paginate();

        $posts->each(function ($post) {
            $post->comments = $post->comments->take(3);
        });

        return $posts;
    }

    public function show($id)
    {
        return $this->postRepository->find($id);
    }

    public function update($id, $caption)
    {
        $post = $this->postRepository->find($id);
        $post->caption = $caption;
        $post->save();

        return $post;
    }

    public function delete($id)
    {
        $post = $this->postRepository->find($id);
        $post->delete();

        return $post;
    }

    public function like($id)
    {
        $post = $this->postRepository->find($id);
        $post->likes()->attach(Auth::id());

        return $post;
    }

    public function unlike($id)
    {
        $post = $this->postRepository->find($id);
        $post->likes()->detach(Auth::id());

        return $post;
    }

    public function comment($id, $comment)
    {
        $post = $this->postRepository->find($id);
        $post->comments()->create([
            'user_id' => Auth::id(),
            'comment' => $comment,
        ]);

        return $post;
    }

    public function deleteComment($id)
    {
        $post = $this->postRepository->find($id);
        $post->comments()->where('id', $id)->delete();

        return $post;
    }

    public function updateComment($id, $comment)
    {
        $post = $this->postRepository->find($id);
        $post->comments()->where('id', $id)->update($comment);

        return $post;
    }

}

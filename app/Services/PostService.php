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
}

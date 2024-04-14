<?php

namespace App\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostRepository implements RepositoryContract
{
    public function all()
    {
        $posts = Post::whereIn('user_id', function ($query) {
            $query->select('followed_id')
                ->from('follows')
                ->where('follower_id', Auth::id());
        })
            ->with([
                'user',
                'likes',
                'user',
                'comments.user',
                'media',
            ])
            ->withCount(['likes', 'comments'])
            ->latest()
            ->get();

        $posts->each(function ($post) {
            $post->comments = $post->comments->take(3);
        });

        return $posts;
    }

    public function paginate($perPage = 10)
    {
        $posts = Post::whereIn('user_id', function ($query) {
            $query->select('followed_id')
                ->from('follows')
                ->where('follower_id', Auth::id());
        })
            ->orWhere('user_id', Auth::id())
            ->with([
                'user',
                'likes',
                'user',
                'comments.user',
                'media',
                'tags',
            ])
            ->withCount(['likes', 'comments'])
            ->latest()
            ->simplePaginate($perPage);

        $posts->each(function ($post) {
            $post->comments = $post->comments->take(3);
        });

        return $posts;
    }
    public function find($id)
    {
        return Post::find($id);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update(array $data, $id)
    {
        $post = Post::find($id);

        return $post->update($data);
    }

    public function delete($id)
    {
        return Post::destroy($id);
    }

    public function like($id)
    {
        $post = Post::findOrFail($id);

        return $post->likes()->attach(Auth::id());
    }

    public function unlike($id)
    {
        $post = Post::findOrFail($id);

        return $post->likes()->detach(Auth::id());
    }

    public function comment($id, $data)
    {
        $post = Post::findOrFail($id);

        return $post->comments()->create($data);
    }

    public function updateComment($id, $data)
    {
        $comment = Comment::findOrFail($id);

        return $comment->update($data);
    }

    public function deleteComment($id)
    {
        return Comment::destroy($id);
    }

    public function save($id)
    {
        $post = Post::findOrFail($id);

        return $post->savedPosts()->attach(Auth::id());
    }

    public function unsave($id)
    {
        $post = Post::findOrFail($id);

        return $post->savedPosts()->detach(Auth::id());
    }
}

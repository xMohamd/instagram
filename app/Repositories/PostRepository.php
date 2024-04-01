<?php

namespace App\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\Post;

class PostRepository implements RepositoryContract
{
    public function all()
    {

        return  Post::with([
            'user',
            'likedByUsers',
            'comments',
            'media',
            'comments.user',
        ])
            ->withCount('likedByUsers', 'comments')
            ->latest()
            ->get();
    }

    public function paginate($perPage = 10)
    {
        return Post::with([
            'user',
            'likedByUsers',
            'comments',
            'media',
            'comments.user',
        ])
            ->withCount('likedByUsers', 'comments')
            ->latest()
            ->simplePaginate($perPage);
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
}

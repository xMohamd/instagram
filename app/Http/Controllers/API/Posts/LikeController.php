<?php

namespace App\Http\Controllers\API\Posts;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct(
        private PostRepository $postRepository
    ) {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $post_id)
    {
        return $this->postRepository->like($post_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post_id)
    {
        return $this->postRepository->unlike($post_id);
    }
}

<?php

namespace App\Http\Controllers\API\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class SavedPostController extends Controller
{
    public function __construct(
        private PostRepository $postRepository
    ) {
    }

    public function save(Request $request, $post_id)
    {
        $this->postRepository->save($post_id);

        return response()->json([
            'message' => 'Post saved successfully'
        ]);
    }

    public function unsave(Request $request, $post_id)
    {
        $this->postRepository->unsave($post_id);

        return response()->json([
            'message' => 'Post unsaved successfully'
        ]);
    }
}

<?php

namespace App\Http\Controllers\API\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Repositories\PostRepository;

class CommentController extends Controller
{
    public function __construct(
        private PostRepository $postRepository
    ) {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request, string $post_id)
    {
        $request->validated();

        $comment = $this->postRepository->comment($post_id, [
            'comment' => $request->comment,
            'user_id' => $request->user()->id,
        ]);

        return response()->json($comment->load('user'), 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, string $comment_id)
    {
        $request->validated();

        $this->postRepository->updateComment($comment_id, [
            'comment' => $request->comment,
        ]);

        return response()->json(['message' => 'Comment updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->postRepository->deleteComment($id);

        return response()->json(['message' => 'Comment deleted successfully'], 200);
    }
}

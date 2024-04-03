<?php

namespace App\Http\Controllers\API;

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
    public function store(StoreCommentRequest $request)
    {
        $request->validated();

        return $this->postRepository->comment($request->post_id, [
            'comment' => $request->comment,
            'user_id' => $request->user()->id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, string $id)
    {
        $request->validated();

        return $this->postRepository->updateComment($id, [
            'comment' => $request->comment,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

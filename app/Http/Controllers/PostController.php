<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        if ($request->ajax()) {
            $view = view('posts.load', compact('posts'))->render();
            return Response::json(['view' => $view, 'nextPageUrl' => $posts->nextPageUrl(), 'user' => auth()->user()]);
        }
        return view('home', ['posts' => $posts, 'user' => auth()->user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'files' => 'required',
            ]);

            $post = new Post();
            $post->caption = $request->input('caption');
            $post->user_id = Auth::id();
            $post->save();

            $postId = $post->id;


            $path = [];
            $files = $request->file('files');
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
                $media->post_id = $postId;
                $media->save();
            }
            return response()->json([
                'path' => $path,
                'message' => 'File uploaded successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

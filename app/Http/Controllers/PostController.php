<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Media;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Services\PostService;

class PostController extends Controller
{

    public function __construct(private PostService $postService)
    {
    }

    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);

        return view('home', ['posts' => $posts, 'user' => auth()->user()]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'files' => 'required',
            ]);

            $path = $this->postService->create($request->caption, $request->file('files'));

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
}

<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        protected PostService $postService
    ) {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = $this->get();

        return view('home', compact('posts'));
    }
}

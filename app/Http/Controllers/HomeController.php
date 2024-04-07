<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        protected PostRepository $postRepository
    ) {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = $this->postRepository->paginate();

        return view('home', compact('posts'));
    }
}

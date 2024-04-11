<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TagController extends Controller
{
    public function hash(string $tag)
    {
        // Retrieve posts related to the specified tag
        $posts = Post::whereHas('tags', function ($query) use ($tag) {
            $query->where('tag', $tag);
        })->get();

        // Pass the retrieved posts and the tag to the view
        return view('tag', ['posts' => $posts, 'tag' => $tag, 'hashtagValue' => $tag]);
    }


}


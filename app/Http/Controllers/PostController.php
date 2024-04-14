<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Media;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
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

            $post = new Post();
            $post->caption = $request->input('caption');
            $post->user_id = Auth::id();

            $tags = [];
            preg_match_all('/#\w+/', $post->caption, $matches);
            $tags = array_unique($matches[0]);
            $post->caption = str_replace($matches[0], "", $post->caption);


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
                $media->save();

                $post->media_id = $media->id;
                $post->save();
            }

            if (count($tags) > 0) {
                foreach ($tags as $tagString) {
                    $hashtag = ltrim($tagString, '#');
                    $tag = Tag::firstOrCreate(['tag' => $hashtag]);
                    $post->tags()->attach($tag->id);
                }
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
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    public $isLikedByUser;
    public $isCommentedByUser;
    public $isSavedByUser;
    public $post;
    /**
     * Create a new component instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
        $this->isLikedByUser = $post->likes->contains(auth()->user()) ? 'text-danger' : '';
        $this->isCommentedByUser = $post->comments->contains('user', auth()->user()) ? 'text-primary' : '';
        $this->isSavedByUser = $post->savedPosts->contains(auth()->user()) ? 'text-info' : '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.post');
    }
}

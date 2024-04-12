@foreach ($posts as $post)
    <div class="post">
        <div class="info">
            <div class="person">
                <img src="${post_data[i][0]}">
                <a href="#" class="text-white">{{ $post->user->full_name }}</a>
                <span class="circle">.</span>
                <span>{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div class="more">
                <img src="{{ asset('images/show_more.png') }}" alt="show more">
            </div>
        </div>
        @if ($post->media->isEmpty())
            @foreach ($post->videos as $video)
                <div class="video">
                    <!-- Display video player here using the video URL -->
                    <video controls>
                        <source src="{{ $video->url }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endforeach
        @else
            @foreach ($post->media as $img)
                <div class="image">
                    <img src="{{ $img->url }}">
                </div>
            @endforeach
        @endif

        <div class="desc">
            <div class="icons">
                <div class="icon_left d-flex">
                    <div class="like">
                        <form id="likeForm" data-post-id="{{ $post->id }}" style="display: inline;">
                            @csrf
                            {{-- Like button --}}
                            <button type="button" class="likeButton"
                                style="background: none; border: none; cursor: pointer;">
                                <svg class="not_loved" aria-label="Like" fill="<?php echo $post->likes->contains('user_id', auth()->id()) ? 'red' : 'white'; ?>" height="24"
                                    role="img" viewBox="0 0 24 24" width="24" id="svg-{{ $post->id }}">
                                    <title><?php echo $post->likes->contains('user_id', auth()->id()) ? 'Unlike' : 'Like'; ?></title>
                                    <path
                                        d="M16.792 3.904A4.989 4.989 0 0 1 21.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 0 1 4.708-5.218 4.21 4.21 0 0 1 3.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 0 1 3.679-1.938m0-2a6.04 6.04 0 0 0-4.797 2.127 6.052 6.052 0 0 0-4.787-2.127A6.985 6.985 0 0 0 .5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 0 0 3.518 3.018 2 2 0 0 0 2.174 0 45.263 45.263 0 0 0 3.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 0 0-6.708-7.218Z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>


                    <div class="chat">
                        <button type="button" class="btn p-0 m-0" data-bs-toggle="modal"
                            data-bs-target="#message_modal_{{ $post->id }}">
                            <svg class="ms-3 m-0 p-0" style="color: white" aria-label="Comment"
                                class="x1lliihq x1n2onr6 x5n08af" fill="currentColor" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <title>Comment</title>
                                <path d="M20.656 17.008a9.993 9.993 0 1 0-3.59 3.615L22 22Z" fill="none"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="send">
                        <button type="button" class="btn p-0" data-bs-toggle="modal"
                            data-bs-target="#send_message_modal">
                            <svg class="ms-3 m-0 p-0" style="color: white" aria-label="Share Post"
                                class="x1lliihq x1n2onr6 x1roi4f4" fill="currentColor" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <title>Share Post</title>
                                <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                    x1="22" x2="9.218" y1="3" y2="10.083"></line>
                                <polygon fill="none"
                                    points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334"
                                    stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                        </button>
                    </div>
                </div>
                <form class="savePostForm" action="{{ route('posts.save-post') }}" method="post">
                    @csrf
                    <div class="save not_saved">
                        <input id="hiddenInput" type="hidden" name="post_id" value="{{ $post->id }}">
                        <button id="saveBtn" type="button" class="savePostButton btn"
                            data-post-id="{{ $post->id }}">
                            <img src="{{ asset('images/bookmark.png') }}">
                        </button>
                    </div>
                </form>



            </div>
            <div class="liked">
                <a class="bold text-white" data-bs-toggle="modal" data-bs-target="#likersModal"
                    id="likers-{{ $post->id }}">{{ $post->likes_count }} likes</a>
            </div>
            <div class="modal fade" id="likersModal" tabindex="-1" aria-labelledby="likersModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="likersModalLabel">Likes</h1>
                            <i class="btn-close fa-2x fa-solid fa-xmark text-white" data-bs-dismiss="modal"
                                aria-label="Close" aria-hidden="true" id="likersClose"></i>
                        </div>
                        <div class="modal-body">
                            @foreach ($post->likers as $liker)
                                <div class="d-flex flex-row justify-content-between align-items-center mb-4">
                                    <div class="d-flex flex-row align-items-center">
                                        <img class="rounded-circle" src="{{ asset('images/profile_img.jpg') }}"
                                            width="55" />
                                        <div class="d-flex flex-column align-items-start ml-2">
                                            <span class="font-weight-bold"
                                                style="font-size: 1.6em;">{{ $liker->full_name }}</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="post_desc">
                <p>
                <p class="text-white" id = "post-body">{{ $post->body }}
                </p>
                </p>
                <div class="comments-section" data-post-id="{{ $post->id }}">
                    {{-- posts comments --}}
                    @foreach ($post->comments()->orderBy('created_at', 'desc')->take(3)->get() as $comment)
                        <div class="comment d-flex justify-content-between align-items-center">
                            <p>
                                <strong class="text-white">{{ $comment->user->full_name }}</strong>
                                <span class="text-white">{{ $comment->comment }}</span>
                            </p>
                            <div class="like d-flex align-items-center" data-comment-id="{{ $comment->id }}">
                                @if ($comment->likes->contains(auth()->id()))
                                    <button id="likeBtn" class="btn btn-link like-button liked"
                                        onclick="toggleLike({{ $comment->id }})">
                                        <img class="not-loved" src="{{ asset('images/heart.png') }}"
                                            alt="heart image">
                                    </button>
                                @else
                                    <button id="likeBtn" class="btn btn-link like-button"
                                        onclick="toggleLike({{ $comment->id }})">
                                        <img class="loved" src="{{ asset('images/love.png') }}" alt="love image">
                                    </button>
                                @endif
                                <span class="text-white like-count">{{ $comment->likes()->count() }}
                                    Likes</span>
                            </div>

                        </div>
                    @endforeach

                    @if ($post->comments()->count() > 3)
                        <div class="view-all-comments" data-bs-toggle="modal"
                            data-bs-target="#commentsModal-{{ $post->id }}" data-post-id="{{ $post->id }}">
                            <a href="#" class="gray">View all
                                {{ $post->comments()->count() }} comments</a>
                        </div>
                    @endif

                    {{-- comments modal view allllll --}}
                    <div class="modal fade bg-black" id="commentsModal-{{ $post->id }}" tabindex="-1"
                        aria-labelledby="commentsModalLabel-{{ $post->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h5 class="modal-title text-white" id="commentsModalLabel-{{ $post->id }}">
                                        All
                                        Comments</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="comments-list">
                                        {{-- modal comments --}}
                                        @foreach ($post->comments as $comment)
                                            <div
                                                class="comment text-white d-flex justify-content-between align-items-center">
                                                <p>
                                                    <strong>{{ $comment->user->full_name }}</strong>
                                                    <span>{{ $comment->comment }}</span>
                                                </p>
                                                <div class="like" data-comment-id="{{ $comment->id }}">
                                                    @if ($comment->likes->contains(auth()->id()))
                                                        <button id="likeBtn" class="btn btn-link like-button liked"
                                                            onclick="toggleLike({{ $comment->id }})">
                                                            <img class="not-loved"
                                                                src="{{ asset('images/heart.png') }}"
                                                                alt="heart image">
                                                        </button>
                                                    @else
                                                        <button id="likeBtn" class="btn btn-link like-button"
                                                            onclick="toggleLike({{ $comment->id }})">
                                                            <img class="loved"
                                                                src="http://localhost:8000/images/love.png"
                                                                alt="love image">
                                                        </button>
                                                    @endif
                                                    <span
                                                        class=" like-count text-white">{{ $comment->likes()->count() }}
                                                        Likes</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <form action="{{ route('comments.store') }}" method="POST" class="comment-form"
                    data-post-id="{{ $post->id }}">
                    @csrf
                    <div class="comment">
                        <input type="text" name="comment" class="comment-input" placeholder="Add a comment...">
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <button type="submit" class="btn submit-comment"
                            data-post-id="{{ $post->id }}">Post</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    {{-- add new comment modal --}}
    <div class="modal fade" id="message_modal_{{ $post->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel_{{ $post->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel_{{ $post->id }}">
                        Comments</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="comments">
                        @foreach ($post->comments as $comment)
                            <div class="comment mb-3">
                                <div class="d-flex">
                                    <div class="img">
                                        <img src="{{ asset('images/profile_img.jpg') }}" alt="Profile Image">
                                    </div>
                                    <div class="content">
                                        <div class="person">
                                            <h4>{{ $comment->user->full_name }}</h4>
                                            <span>{{ $comment->created_at->diffForHumans() }}</span>
                                        </div>
                                        <p class="lead">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                                <div class="like" data-comment-id="{{ $comment->id }}">
                                    @if ($comment->likes->contains(auth()->id()))
                                        <button id="likeBtn" class="btn btn-link like-button liked"
                                            onclick="toggleLike({{ $comment->id }})">
                                            {{-- <img class="not-loved"
                                            src="{{ asset('images/heart.png') }}"
                                            alt="heart image"> --}}
                                        </button>
                                    @else
                                        <button id="likeBtn" class="btn btn-link like-button"
                                            onclick="toggleLike({{ $comment->id }})">
                                            {{-- <img class="loved"
                                            src="{{ asset('images/love.png') }}"
                                            alt="love image"> --}}
                                        </button>
                                    @endif
                                    <span class="like-count">
                                        {{-- {{ $comment->likes()->count() }} Likes --}}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">

                    <form action="{{ route('comments.store') }}" method="POST" class="comment-form"
                        data-post-id="{{ $post->id }}">
                        @csrf
                        <div class="input-group">
                            <img src="{{ asset('images/profile_img.jpg') }}" class="img-fluid" alt="Profile Image">
                            <input type="text" name="comment" class="comment-input form-control"
                                placeholder="Add a comment...">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <button type="submit" class="btn submit-comment"
                                data-post-id="{{ $post->id }}">Post</button>
                        </div>
                    </form>
                    {{-- <form action="{{ route('comments.store') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="emoji_comment" name="comment"
                            class="form-control" placeholder="Add a comment...">
                        <input type="hidden" name="post_id"
                            value="{{ $post->id }}">
                        <button type="submit" class="btn">Add</button>
                    </div>
                </form> --}}
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="d-none">
    {{ $posts->links() }}
</div>

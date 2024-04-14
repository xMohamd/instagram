@extends('layouts.index')
@section('title', 'Profile')
@section('content')

<form id="followForm" action="{{ route('follow.store') }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="follower_id" value="{{ Auth::id() }}">
    <input type="hidden" name="followed_id" value="{{ $user->id }}">
</form>

<form id="unfollowForm"
    action="{{ route('follow.destroy', ['follower_id' => Auth::id(), 'followed_id' => $user->id]) }}" method="POST"
    style="display: none;">
    @csrf
    @method('DELETE')
</form>

<form id="editProfileForm" action="{{ route('profile.edit') }}" method="GET" style="display: none;">
    @csrf
</form>


<div class="profile_container">
    <div class="profile_info">
        <div class="cart">
            <div class="img">
                <img src="{{ asset('../'.$user->avatar) }}" alt="">
            </div>
            <div class="info">
                <p class="name">
                    {{$user->username}}
                    @if (Auth::user()->username == $user->username)
                    <button type="submit" id="editProfileBtn" class="edit_profile">Edit profile</button>
                    @else
                    @if (count($followers->where('username', Auth::user()->username)) != 0)
                    <button id="unfollowFormBtn" class="edit_profile followBtn">Following</button>
                    @else
                    @if (count($following->where('username', Auth::user()->username)) != 0)
                    <button type="submit" id="followFormBtn" class="edit_profile followBtn">Follow Back</button>
                    @else
                    <button type="submit" id="followFormBtn" class="edit_profile followBtn">Follow</button>
                    @endif
                    @endif
                    <button class="edit_profile blockBtn">
                        Block
                    </button>
                    @endif
                </p>
                <div class="general_info">
                    <p><span>{{$user->posts->count()}}</span> post</p>
                    <a data-bs-toggle="modal" data-bs-target="#followersModal">
                        <p class="follower"><span>{{count($followers)}}</span> followers</p>
                    </a>
                    <a data-bs-toggle="modal" data-bs-target="#followingModal">
                        <p class="following"><span>{{count($following)}}</span> following</p>
                    </a>
                </div>
                <p class="nick_name" style="font-weight: bold;">{{$user->name}}</p>
                <p class="desc">
                    {{$user->bio ?? "No Bio"}}
                </p>
                <p class="nick_name">{{$user->gender ?? "Male"}}</p>
                <p class="nick_name"><a href="{{$user->website}}">{{$user->website ?? "website"}}</a></p>
            </div>
        </div>
    </div>
    <div class="highlights">
        <div class="highlight">
            <div class="img">
                <img src="{{ asset('../'.$user->avatar) }}" alt="user image">
            </div>
            <p>Story</p>
        </div>
        <div class="highlight highlight_add">
            <div class="img">
                <img src="{{asset('images/plus.png')}}" alt="">
            </div>
            <p>New</p>
        </div>
    </div>
    <hr>
    <div class="posts_profile">
        <ul class="nav-pills w-100 d-flex justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item mx-2" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    <img src="{{asset('images/feed.png')}}" alt="posts">
                    POSTS
                </button>
            </li>
            <li class="nav-item mx-2" role="presentation">
                @if (Auth::user()->username == $user->username)
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <img src="{{asset('images/save-instagram.png')}}" alt="saved posts">
                    SAVED
                </button>
                @endif
            </li>
            <li class="nav-item mx-2" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <img src="{{asset('images/tagged.png')}}" alt="tagged posts">
                    TAGGED
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div id="posts_sec" class="post">
                    @foreach ($user->posts as $post)
                    @php
                    $isLikedByUser = $post->likes->contains(auth()->user()) ? 'text-danger' : '';
                    $isCommentedByUser = $post->comments->contains('user', auth()->user()) ? 'text-primary' : '';
                    $isSavedByUser = $post->savedPosts->contains(auth()->user()) ? 'text-info' : '';
                    @endphp
                    @include('include.postModal', ['post' => $post, 'isLikedByUser' => $isLikedByUser,
                    'isCommentedByUser' => $isCommentedByUser, 'isSavedByUser' => $isSavedByUser])
                    {{-- Post view model --}}
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div id="saved_sec" class="post">
                    @foreach ($user->savedPosts as $post)
                    @php
                    $isLikedByUser = $post->likes->contains(auth()->user()) ? 'text-danger' : '';
                    $isCommentedByUser = $post->comments->contains('user', auth()->user()) ? 'text-primary' : '';
                    $isSavedByUser = $post->savedPosts->contains(auth()->user()) ? 'text-info' : '';
                    @endphp
                    @include('include.postModal', ['post' => $post, 'isLikedByUser' => $isLikedByUser,
                    'isCommentedByUser' => $isCommentedByUser, 'isSavedByUser' => $isSavedByUser])
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">
                <div id="tagged" class="post">
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/Zhc5hHp/account4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/SPTNbJL/account5.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Followers Modal -->
<div class="modal fade" id="followersModal" tabindex="-1" aria-labelledby="followersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="followersModalLabel">Followers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-unstyled">
                    @foreach($followers as $follower)
                    <li class="list-group-item border-0 custom-list-item">
                        <img src="{{ asset('../'.$follower->avatar) }}" alt="Image Icon" class="img-icon rounded-circle"
                            style="width: 50px; height: 50px;">
                        <a href="{{route('profile', ['id' => $follower->id]) }}"
                            class="text-decoration-none">{{$follower->username }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Following Modal -->
<div class="modal fade" id="followingModal" tabindex="-1" aria-labelledby="followingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="followingModalLabel">Following</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-unstyled">
                    @foreach($following as $follow)
                    <li class="list-group-item border-0 custom-list-item">
                        <img src="{{ asset('../'.$follow->avatar) }}" alt="Image Icon" class="img-icon rounded-circle"
                            style="width: 50px; height: 50px;">
                        <a href="{{route('profile', ['id' => $follow->id]) }}"
                            class="text-decoration-none">{{$follow->username }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/home.js')}}"></script>
<script src="{{asset('js/profile.js')}}"></script>
<script src="{{asset('js/post-handlers.js')}}"></script>
@endsection
@extends('layouts.index')
@section('title', 'Profile')
@section('content')

<div class="profile_container">
    <div class="profile_info">
        <div class="cart">
            <div class="img">
                <img src="{{$user->avatar}}" alt="">
            </div>
            <div class="info">
                <p class="name">
                    {{$user->username}}
                    <button class="edit_profile">
                        Edit profile
                    </button>
                </p>
                <div class="general_info">
                    <p><span>{{$user->posts->count()}}</span> post</p>
                    <p><span>{{$followers}}</span> followers</p>
                    <p><span>{{$following}}</span> following</p>
                </div>
                <p class="nick_name" style="font-weight: bold;">{{$user->name}}</p>
                <p class="desc">
                    {{$user->bio ?? "No Bio"}}
                </p>
            </div>
        </div>
    </div>
    <div class="highlights">
        <div class="highlight">
            <div class="img">
                <img src="{{$user->avatar}}" alt="">
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
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <img src="{{asset('images/save-instagram.png')}}" alt="saved posts">
                    SAVED
                </button>
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
                    @foreach ($posts as $post)
                    <div class="item">
                        <img class="img-fluid item_img" src="{{$post->media->url}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div id="saved_sec" class="post">
                    @foreach ($savedPosts as $post)
                    <div class="item">
                        <img class="img-fluid item_img" src="{{$post->media->url}}" alt="">
                    </div>
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

@endsection

@section('scripts')
<script src="{{asset('js/home.js')}}"></script>
@endsection
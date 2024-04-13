@extends('layouts.index')

@section('title', 'Tags')

@section('content')
<div class="profile_container">

    <div class="profile_info">
        <div class="cart">
            <div class="img">
                <img class="img-fluid item_img rounded-circle" style="width: 200px; height: 200px;"
                    src="{{asset('../'.$posts[0]->media->url)}}" alt="">
            </div>
            <div class="info">
                <h2 class="name">
                    #{{ $tag }}
                </h2>
                <p class="nick_name">{{ $posts->count() }}</p>
                <p class="desc">posts</p>
                <br>
                <p class="name">
                    <button style="background-color:#007bff; color:white; width:400px;">
                        Follow
                    </button>
                </p>
            </div>
        </div>
    </div>

    <div>
        <p>
            Top Posts
        </p>
    </div>
    <div class="posts_profile">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div id="posts_sec" class="post">
                    @foreach ($posts as $post)
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
        </div>
    </div>
</div>
@endsection
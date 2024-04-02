@extends('layouts.index')
@section('title', 'News Feed')
@section('content')

  <!--***** posts_container start ****** -->
  <div class="main_section">
    <div class="posts_container">
      <div class="stories">
        <div class="owl-carousel items">
        </div>
      </div>

      <div class="posts">
        @foreach ($posts as $post)
          <x-post :post="$post" />
        @endforeach
        <div class="row text-center w-100">
          {{ $posts->links() }}
        </div>
      </div>

    </div>
  </div>
  <!--***** posts_container end ****** -->

  <!--***** followers_container start ****** -->
  <div class="followers_container">
    <div>
      <div class="cart">
        <div>
          <div class="img">
            <img src="./images/profile_img.jpg" alt="">
          </div>
          <div class="info">
            <p class="name">Zineb_essoussi</p>
            <p class="second_name">Zim Ess</p>
          </div>
        </div>
        <div class="switch">
          <a href="#">Switch</a>
        </div>
      </div>
      <div class="suggestions">
        <div class="title">
          <h4>Suggestions for you</h4>
          <a class="dark" href="#">See All</a>
        </div>
        <div class="cart">
          <div>
            <div class="img">
              <img src="./images/profile_img.jpg" alt="">
            </div>
            <div class="info">
              <p class="name">Zineb_essoussi</p>
              <p class="second_name">Zim Ess</p>
            </div>
          </div>
          <div class="switch">
            <button class="follow_text" href="#">follow</button>
          </div>
        </div>
        <div class="cart">
          <div>
            <div class="img">
              <img src="./images/profile_img.jpg" alt="">
            </div>
            <div class="info">
              <p class="name">Zineb_essoussi</p>
              <p class="second_name">Zim Ess</p>
            </div>
          </div>
          <div class="switch">
            <button class="follow_text" href="#">follow</button>
          </div>
        </div>
        <div class="cart">
          <div>
            <div class="img">
              <img src="./images/profile_img.jpg" alt="">
            </div>
            <div class="info">
              <p class="name">Zineb_essoussi</p>
              <p class="second_name">Zim Ess</p>
            </div>
          </div>
          <div class="switch">
            <button class="follow_text" href="#">follow</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--***** followers_container end ****** -->

@endsection

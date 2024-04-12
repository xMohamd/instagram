@extends('layouts.index')

@section('title', 'Tags')

@section('content')
<div class="profile_container">
    <div class="profile_info">
        <div class="cart">
                <div class="img">
                    <img src="./images/profile_img.jpg" alt="">
                </div>
                <div class="info">
                    <h2 class="name">
                        #nature
                    </h2>
                    <p class="nick_name">253</p>
                    <p class="desc">posts</p>
                    <br>
                    <p class="name" >
                        <button style="background-color:#007bff; color:white;">
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
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div id="posts_sec" class="post">
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/Jqh3rHv/img1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/2ZxBFVp/img2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/5vQt677/img3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/pJ8thst/account13.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/j8L7FPY/account10.jpg" alt="">
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

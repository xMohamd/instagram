@extends('layouts.index')
@section('title', 'Profile')
@section('content')

<div class="profile_container">
    <div class="profile_info">
        <div class="cart">
            <div class="img">
                <img src="./images/profile_img.jpg" alt="">
            </div>
            <div class="info">
                <p class="name">
                    Zineb_essoussi
                    <button class="edit_profile">
                        Edit profile
                    </button>
                </p>
                <div class="general_info">
                    <p><span>1</span> post</p>
                    <p><span>177</span> followers</p>
                    <p><span>137</span> following</p>
                </div>
                <p class="nick_name">Zin Ess</p>
                <p class="desc">
                    I'am an engineering student <br>
                    ENSAO
                </p>
            </div>
        </div>
    </div>
    <div class="highlights">
        <div class="highlight">
            <div class="img">
                <img src="./images/profile_img.jpg" alt="">
            </div>
            <p>conseils</p>
        </div>
        <div class="highlight highlight_add">
            <div class="img">
                <img src="./images/plus.png" alt="">
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
                    <img src="./images/feed.png" alt="posts">
                    POSTS
                </button>
            </li>
            <li class="nav-item mx-2" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    <img src="./images/save-instagram.png" alt="saved posts">
                    SAVED
                </button>
            </li>
            <li class="nav-item mx-2" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    <img src="./images/tagged.png" alt="tagged posts">
                    TAGGED
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
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
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <div id="saved_sec" class="post">
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/6WvdZS9/account12.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="img-fluid item_img" src="https://i.ibb.co/pJ8thst/account13.jpg" alt="">
                    </div>

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

<!--Create model-->
<div class="modal fade" id="create_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title w-100 fs-5 d-flex align-items-end justify-content-between"
                    id="exampleModalLabel">
                    <span class="title_create">Create new post</span>
                    <button class="next_btn_post btn_link"></button>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="up_load" src="./images/upload.png" alt="upload">
                <p>Drag photos and videos here</p>
                <button class="btn btn-primary btn_upload">
                    select from your computer
                    <form id="upload-form">
                        <input class="input_select" type="file" id="image-upload" name="image-upload">
                    </form>
                </button>
                <div id="image-container" class="hide_img">
                </div>
                <div id="image_description" class="hide_img">
                    <div class="img_p"></div>
                    <div class="description">
                        <div class="cart">
                            <div>
                                <div class="img">
                                    <img src="./images/profile_img.jpg">
                                </div>
                                <div class="info">
                                    <p class="name">Zineb_essoussi</p>
                                </div>
                            </div>
                        </div>
                        <form>
                            <textarea type="text" id="emoji_create" placeholder="write your email"></textarea>
                        </form>
                    </div>
                </div>
                <div class="post_published hide_img">
                    <img src="./images/uploaded_post.gif" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="./js/home.js"></script>
@endsection
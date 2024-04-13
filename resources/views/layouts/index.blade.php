<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/navMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/vender/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/vender/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="post_page">
        <!--***** nav menu start ****** -->
        @include('include.navMenu')
        <!-- search  -->
        <div id="search" class="search_section">
            <h2>Search</h2>
            <form method="post">
                <input type="text" placeholder="Search" id="searchInput">
            </form>
            <div class="find">
                <div class="desc">
                    <h4>Recent</h4>
                    <p><a href="#" id="clearBtn">Clear all</a></p>
                </div>
                <div class="account">
                    <div class="cart center-error">
                        <div>
                            <div class="info">
                                <p class="searchError" style="text-align: center;">No Recent Searches....</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="account">
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
                        <div class="clear">
                            <a href="#">X</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- search  -->
        <!-- notification -->
        @include('include.notifications')
        <!--***** nav menu end ****** -->


        @yield('content');

        <!-- Modal for sending posts-->
        <div class="modal fade" id="send_message_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Share</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="send">
                            <div class="search_person">
                                <p>To:</p>
                                <input type="text" placeholder="Search">
                            </div>
                            <p>Suggested</p>
                            <div class="poeple">
                                <div class="person">
                                    <div class="d-flex">
                                        <div class="img">
                                            <img src="./images/profile_img.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="person">
                                                <h4>namePerson</h4>
                                                <span>zim ess</span>
                                            </div>
                                        </div>
                                    </div>
                                    <di class="circle">
                                        <span></span>
                                </div>
                            </div>
                            <div class="person">
                                <div class="d-flex">
                                    <div class="img">
                                        <img src="./images/profile_img.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="person">
                                            <h4>namePerson</h4>
                                            <span>zim ess</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="circle">
                                    <span></span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">Send</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal for add messages-->
        <div class="modal fade" id="message_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Comments</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="comments">
                            <div class="comment">
                                <div class="d-flex">
                                    <div class="img">
                                        <img src="./images/profile_img.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="person">
                                            <h4>namePerson</h4>
                                            <span>3j</span>
                                        </div>
                                        <p>Wow amzing shot</p>
                                        <div class="replay">
                                            <button class="replay">replay</button>
                                            <button class="translation">see translation</button>
                                        </div>
                                        <div class="answers">
                                            <button class="see_comment">
                                                <span class="hide_com">Hide all responses</span>
                                                <span class="show_c"> <span class="line"></span> See the <span> 1
                                                    </span> answers</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="like">
                                    <img class="not_loved" src="./images/love.png" alt="">
                                    <img class="loved" src="./images/heart.png" alt="">
                                    <p> 55</p>
                                </div>
                            </div>
                            <div class="responses">
                                <div class="response comment">
                                    <div class="d-flex">
                                        <div class="img">
                                            <img src="./images/profile_img.jpg" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="person">
                                                <h4>namePerson</h4>
                                                <span>3j</span>
                                            </div>
                                            <p>Wow amzing shot</p>
                                            <div class="replay">
                                                <button>replay</button>
                                                <button>see translation</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="like">
                                        <img class="not_loved" src="./images/love.png" alt="">
                                        <img class="loved" src="./images/heart.png" alt="">
                                        <p> 55</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form method="post">
                            <div class="input">
                                <img src="./images/profile_img.jpg" alt="">
                                <input type="text" id="emoji_comment" placeholder="Add a comment..." />
                            </div>
                            <!-- <div class="emogi">
                                <img src="./images/emogi.png" alt="">
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--Create model-->
        <div class="modal fade" id="create_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title w-100 fs-5 d-flex align-items-end justify-content-between"
                            id="exampleModalLabel">
                            <span class="title_create">Create new post</span>
                            <button class="next_btn_post btn_link"></button>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="up_load" src="{{ asset('images/upload.png') }}" alt="upload">
                        <p>Drag photos and videos here</p>
                        <button class="btn btn-primary btn_upload">
                            select from your computer
                            <form id="upload-form">
                                <input multiple class="input_select" type="file" id="image-upload"
                                    name="files">
                            </form>
                        </button>
                        <div id="image-container" class="hide_img carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Placeholder for images -->
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#image-container"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#image-container"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div id="image_description" class="hide_img">
                            <div class="img_p"></div>
                            <div class="description">
                                <div class="cart">
                                    <div>
                                        <div class="img">
                                            <img src="{{ asset('../' . Auth::user()->avatar) }}">
                                        </div>
                                        <div class="info">
                                            <p class="name">{{ Auth::user()->username }}</p>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <textarea class="postCaption" type="text " id="emoji_create" placeholder="Write a caption"></textarea>
                                </form>
                            </div>
                        </div>
                        <div class="post_published hide_img">
                            <img src="{{ asset('images/uploaded_post.gif') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <script src="./sass/vender/bootstrap.bundle.js"></script>
    <script src="./sass/vender/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="{{ asset('owlcarousel/jquery.min.js') }}"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>

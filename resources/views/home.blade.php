@extends('layouts.index')
@section('title', 'Instagram')
@section('content')
    <div class="second_container">
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
                    <div class="text-center row w-100">
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
                            <img src="{{ asset('images/10771017.png') }}" alt="">
                        </div>
                        <div class="info">
                            <p class="name">Marwan Mohamed</p>
                            <p class="second_name">marwan20</p>
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
                                <img src="{{ asset('images/3597892.png') }}" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Mohamed Aly</p>
                                <p class="second_name">MohamedAly</p>
                            </div>
                        </div>
                        <div class="switch">
                            <button class="follow_text" href="#">follow</button>
                        </div>
                    </div>
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="{{ asset('images/5072860.png') }}" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Mahmoud Dabbous</p>
                                <p class="second_name">Dabbous</p>
                            </div>
                        </div>
                        <div class="switch">
                            <button class="follow_text" href="#">follow</button>
                        </div>
                    </div>
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="{{ asset('images/1712962534.png') }}"" alt="">
                            </div>
                            <div class=" info">
                                <p class="name">Mohamed Hosny</p>
                                <p class="second_name">0xMohamed</p>
                            </div>
                        </div>
                        <div class="switch">
                            <button class="follow_text" href="#">follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--***** followers_container end ****** -->
    </div>
@endsection

@section('scripts')
    <script src="./js/home.js"></script>
    <script src="./js/post-handlers.js"></script>
@endsection

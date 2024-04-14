<div class="nav_menu">
    <div class="fix_top">
        <!-- nav for big->medium screen -->
        <div class="nav">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img class="d-block d-lg-none small-logo" src="{{ asset('images/instagram.png') }}" alt="logo">
                    <img class="d-none d-lg-block" src="{{ asset('images/logo_menu.png') }}" alt="logo">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a class="active" href="{{ route('home') }}">
                            <svg aria-label="Home" fill="currentColor" class="home-svg" height="24" role="img"
                                viewBox="0 0 24 24">
                                <title>Home</title>
                                <path
                                    d="M22 23h-6.001a1 1 0 0 1-1-1v-5.455a2.997 2.997 0 1 0-5.993 0V22a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V11.543a1.002 1.002 0 0 1 .31-.724l10-9.543a1.001 1.001 0 0 1 1.38 0l10 9.543a1.002 1.002 0 0 1 .31.724V22a1 1 0 0 1-1 1Z">
                                </path>
                            </svg>
                            <span class="d-none d-lg-block ">Home</span>
                        </a>
                    </li>
                    <li id="search_icon">
                        <a href="#">
                            <svg aria-label="Search" fill="currentColor" class="search-svg" height="24"
                                role="img" viewBox="0 0 24 24">
                                <title>Search</title>
                                <path d="M19 10.5A8.5 8.5 0 1 1 10.5 2a8.5 8.5 0 0 1 8.5 8.5Z" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                                <line fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" x1="16.511" x2="22"
                                    y1="16.511" y2="22"></line>
                            </svg>
                            <span class="d-none d-lg-block search">Search </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('explore') }}">
                            <svg aria-label="Explore" fill="currentColor" class="explore-svg" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <title>Explore</title>
                                <polygon fill="none"
                                    points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></polygon>
                                <polygon fill-rule="evenodd"
                                    points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056">
                                </polygon>
                                <circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                            </svg>
                            <span class="d-none d-lg-block ">Explore</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('reels') }}">
                            <svg aria-label="Reels" fill="currentColor" class="reels-svg" height="24" role="img"
                                viewBox="0 0 24 24" width="24">
                                <title>Reels</title>
                                <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                    x1="2.049" x2="21.95" y1="7.002" y2="7.002"></line>
                                <line fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" x1="13.504" x2="16.362"
                                    y1="2.001" y2="7.002"></line>
                                <line fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" x1="7.207" x2="10.002"
                                    y1="2.11" y2="7.002"></line>
                                <path
                                    d="M2 12.001v3.449c0 2.849.698 4.006 1.606 4.945.94.908 2.098 1.607 4.946 1.607h6.896c2.848 0 4.006-.699 4.946-1.607.908-.939 1.606-2.096 1.606-4.945V8.552c0-2.848-.698-4.006-1.606-4.945C19.454 2.699 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.546 2 5.704 2 8.552Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                                <path
                                    d="M9.763 17.664a.908.908 0 0 1-.454-.787V11.63a.909.909 0 0 1 1.364-.788l4.545 2.624a.909.909 0 0 1 0 1.575l-4.545 2.624a.91.91 0 0 1-.91 0Z"
                                    fill-rule="evenodd"></path>
                            </svg>
                            <span class="d-none d-lg-block ">Reels</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('chat') }}">
                            <svg aria-label="Messenger" fill="currentColor" class="messenger-svg" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <title>Messenger</title>
                                <path
                                    d="M12.003 2.001a9.705 9.705 0 1 1 0 19.4 10.876 10.876 0 0 1-2.895-.384.798.798 0 0 0-.533.04l-1.984.876a.801.801 0 0 1-1.123-.708l-.054-1.78a.806.806 0 0 0-.27-.569 9.49 9.49 0 0 1-3.14-7.175 9.65 9.65 0 0 1 10-9.7Z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10"
                                    stroke-width="1.739">
                                </path>
                                <path
                                    d="M17.79 10.132a.659.659 0 0 0-.962-.873l-2.556 2.05a.63.63 0 0 1-.758.002L11.06 9.47a1.576 1.576 0 0 0-2.277.42l-2.567 3.98a.659.659 0 0 0 .961.875l2.556-2.049a.63.63 0 0 1 .759-.002l2.452 1.84a1.576 1.576 0 0 0 2.278-.42Z"
                                    fill-rule="evenodd"></path>
                            </svg>
                            <span class="d-none d-lg-block ">Messages</span>
                        </a>
                    </li>
                    <li class="notification_icon">
                        <a href="#">
                            <svg aria-label="Notifications" fill="currentColor" class="notifications-svg"
                                height="24" role="img" viewBox="0 0 24 24" width="24">
                                <title>Notifications</title>
                                <path
                                    d="M16.792 3.904A4.989 4.989 0 0 1 21.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 0 1 4.708-5.218 4.21 4.21 0 0 1 3.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 0 1 3.679-1.938m0-2a6.04 6.04 0 0 0-4.797 2.127 6.052 6.052 0 0 0-4.787-2.127A6.985 6.985 0 0 0 .5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 0 0 3.518 3.018 2 2 0 0 0 2.174 0 45.263 45.263 0 0 0 3.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 0 0-6.708-7.218Z">
                                </path>
                            </svg>
                            <span class="d-none d-lg-block ">Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal">
                            <svg aria-label="New post" fill="currentColor" class="create-svg" height="24"
                                role="img" viewBox="0 0 24 24" width="24">
                                <title>New post</title>
                                <path
                                    d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                                <line fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455"
                                    y1="12.001" y2="12.001"></line>
                                <line fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003"
                                    y1="6.545" y2="17.455"></line>
                            </svg>
                            <span class="d-none d-lg-block ">Create</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ route('profile', ['id' => Auth::user()->id]) }}">
                            <img class="circle story" src="{{ Auth::user()->avatar }}">
                            <span class="d-none d-lg-block ">Profile</span>
                        </a>
                    </li>
                    <!-- Admin Link Integration -->
                    @if (Auth::user() && Auth::user()->is_admin)
                        <li>
                            <a href="{{ url('/admin') }}" class="btn btn-link"
                                style="color: inherit; display: flex; align-items: center; padding: 8px 16px;">
                                <svg aria-label="Admin Panel" fill="currentColor" height="24" role="img"
                                    viewBox="0 0 24 24" style="margin-right: 10px;">
                                    <path
                                        d="M19.43 12.98c.04-.3.07-.61.07-.93s-.03-.63-.07-.93l2.11-1.65c.19-.15.24-.42.13-.64l-2-3.46c-.11-.22-.37-.3-.59-.22l-2.49 1c-.49-.38-1.03-.7-1.63-.92l-.38-2.65c-.05-.23-.25-.4-.49-.4h-4c-.24 0-.44.17-.49.4l-.38 2.65c-.6.22-1.14.54-1.63.92l-2.49-1c-.22-.08-.48 0-.59.22l-2 3.46c-.11.22-.06.49.13.64l2.11 1.65c-.04.3-.07.62-.07.93s.03.63.07.93l-2.11 1.65c-.19.15-.24.42-.13.64l2 3.46c.11.22.37.3.59.22l2.49-1c.49.38 1.03.7 1.63.92l.38 2.65c.05.23.25.4.49.4h4c.24 0 .44-.17.49-.4l.38-2.65c.6-.22 1.14-.54 1.63-.92l2.49 1c.22.08.48 0 .59-.22l2-3.46c.11-.22.06-.49-.13-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z">
                                    </path>
                                </svg>
                                <span>Admin Panel</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="more">
                <div class="btn-group dropup">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('images/menu.png') }}">
                        <span class="d-none d-lg-block ">More</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">
                                <span>Settings</span>
                                <img src="{{ asset('images/reglage.png') }}">
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <span>Your activity</span>
                                <img src="{{ asset('images/history.png') }}">
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <span>Saved</span>
                                <img src="{{ asset('images/save-instagram.png') }}">
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <span>Switch apperance</span>
                                <img src="{{ asset('images/moon.png') }}">
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <span>Report a problem</span>
                                <img src="{{ asset('images/problem.png') }}">
                            </a></li>
                        <li><a class="dropdown-item bold_border" href="#">
                                <span>Switch accounts</span>
                            </a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span>Log out</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!--  -->
            </div>
        </div>
        <!-- nav for small screen  -->
        <div class="nav_sm">
            <div class="content">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="logo" src="{{ asset('images/logo_menu.png') }}">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">
                                <span>Following</span>
                                <img src="{{ asset('images/add-friend.png') }}">
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <span>Favorites</span>
                                <img src="asset('images/star.png')}}">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="left">
                    <div class="search_bar">
                        <div class="input-group">
                            <div class="form-outline">
                                <div>
                                    <img src="{{ asset('images/search.png') }}" alt="search">
                                </div>
                                <input type="search" id="form1" class="form-control" placeholder="Search" />
                            </div>
                        </div>
                    </div>
                    <div class="notifications notification_icon">
                        <a href="./notification.html">
                            <img src="{{ asset('images/love.png') }}">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- nav for ex-small screen  -->
        <div class="nav_xm">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img class="logo" src="{{ asset('images/logo_menu.png') }}">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">
                            <span>Following</span>
                            <img src="asset('images/add-friend.png')">
                        </a></li>
                    <li><a class="dropdown-item" href="#">
                            <span>Favorites</span>
                            <img src="{{ asset('images/star.png') }}">
                        </a></li>
                </ul>
            </div>
            <div class="left">

                <img src="{{ asset('images/send.png') }}">
                <a href="./notification.html">
                    <img class="notification_icon" src="{{ asset('images/love.png') }}">
                </a>

            </div>
        </div>
    </div>
    <!-- menu in the botton for smal screen  -->
    <div class="nav_bottom">
        <a href="{{ route('home') }}"><img src="{{ asset('images/accueil.png') }}"></a>
        <a href="{{ route('explore') }}"><img src="{{ asset('images/compass.png') }}"></a>
        <a href="{{ route('reels') }}"><img src="{{ asset('images/video.png') }}"></a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal"><img
                src="{{ asset('images/tab.png') }}"></a>
        <a href="{{ route('profile', ['id' => Auth::user()->id]) }}"><img class="circle story"
                src="{{ asset('images/profile_img.jpg') }}"></a>
    </div>
</div>

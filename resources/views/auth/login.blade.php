<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <link rel="stylesheet" href="{{ asset('sass/vender/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/vender/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/main.css') }}">
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="images d-none d-lg-block">
                <div class="frame">
                    <img src="{{ asset('images/home-phones.png') }}" alt="picture frame">
                </div>
                <div class="sliders">
                    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/screenshot1.png') }}" class="d-block" alt="screenshot1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/screenshot2.png') }}" class="d-block" alt="screenshot2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/screenshot3.png') }}" class="d-block" alt="screenshot3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/screenshot4.png') }}" class="d-block" alt="screenshot4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="log-on border_insc">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Instagram logo">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <input type="email" name="email" id="email" placeholder="Email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                        </div>
                        <div>
                            <input type="password" name="password" id="password" placeholder="Password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                        </div>
                        <button type="submit" class="log_btn">Log in</button>
                    </form>
                    <div class="other-ways">
                        <div class="seperator">
                            <span class="ligne"></span>
                            <span class="ou">OR</span>
                            <span class="ligne"></span>
                        </div>
                        <div class="facebook-connection">
                            <a href="#">
                                <img src="{{ asset('images/facebook.png') }}" alt="facebook icon">
                                Log in with Facebook
                            </a>
                        </div>
                        <div class="forget-password">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="sing-up border_insc">
                    <p>
                        Don't have an account?
                        <a href="{{ route('register') }}">Sign up</a>
                    </p>
                </div>
                <div class="download">
                    <p>Get the app.</p>
                    <div>
                        <img src="{{ asset('images/google_play_icon.png') }}" alt="download app from google play">
                        <img src="{{ asset('images/microsoft_icon.png') }}" alt="download app from microsoft">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
</body>

</html>

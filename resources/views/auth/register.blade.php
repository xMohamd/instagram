<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center min-h-screen py-8 px-4">
        <div class="max-w-sm w-full space-y-8 bg-white p-8 border-solid border border-[#dbdbdb]">
            <div class="flex flex-col items-center space-y-4">
                <h1 class="text-4xl font-semibold"><img
                        src="https://www.instagram.com/static/images/web/logged_out_wordmark.png/7a252de00b20.png"
                        alt=""></h1>
                <p class=" text-[#737373] text-center text-base font-bold ">Sign up to see photos and videos from
                    your
                    friends.</p>
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 mt-4 w-full bg-[#0095f6] text-white">
                    <span class="mr-2">
                        <img src="{{ asset('images/facebook_white.png') }}" alt="Facebook" class="h-4 w-4">
                    </span>
                    Log in with Facebook
                </button>
                <div class="my-4 w-full">
                    <div data-orientation="horizontal" role="none" class="shrink-0 bg-gray-100 h-[1px] w-full"></div>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="space-y-4">
                    <div class="space-y-2">
                        <input
                            class="flex h-10 w-full bg-[#fafafa] rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            placeholder="Email" type="text" name="email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                        <input
                            class="flex h-10 w-full rounded-md bg-[#fafafa] border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            placeholder="Full Name" type="text" name="name">
                        <input
                            class="flex h-10 w-full rounded-md bg-[#fafafa] border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            placeholder="Username" type="text" name="username">
                        <x-input-error :messages="$errors->get('username')" class="mt-2 text-red-500 text-sm" />
                        <input
                            class="flex h-10 w-full rounded-md bg-[#fafafa] border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            placeholder="Password" type="password" name="password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                    </div>
                    <p class="text-xs text-gray-500 text-center">
                        People who use our service may have uploaded your contact
                        information to Instagram.
                        <a href="#" class=" text-center text-[#385898]" rel="ugc">
                            Learn more
                        </a>
                    </p>
                    <div class="space-y-2">
                        <p class="text-xs text-gray-500 text-center">
                            By signing up, you agree to our
                            <a href="#" class=" text-center text-[#385898]" rel="ugc">
                                Terms
                            </a>
                            , <a href="#" class=" text-center text-[#385898]" rel="ugc">
                                Privacy Policy
                            </a>
                            and <a href="#" class=" text-center text-[#385898]" rel="ugc">
                                Cookies Policy
                            </a>
                            .
                        </p>
                        <button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 w-full bg-[#0095f6] text-white">
                            Sign up
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Separate section for login -->
        <div class="max-w-sm w-full mt-4 bg-white p-4 text-center border-solid border border-[#dbdbdb]">
            <p class="text-sm">
                Have an account?
                <a href="{{ route('login') }}" class="text-[#0095f6]" rel="ugc">
                    Log in
                </a>
            </p>
        </div>
    </div>
    <div class="mt-4 flex flex-col items-center space-y-2">
        <p class="text-sm">Get the app.</p>
        <div class="flex space-x-2">
            <a href="#" class="inline-block" rel="ugc"><img
                    src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" width="135" height="40"
                    alt="Get it on Google Play" style="aspect-ratio: 135 / 40; object-fit: cover;"></a>
            <a href="#" class="inline-block" rel="ugc"><img
                    src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" width="135" height="40"
                    alt="Get it from Microsoft" style="aspect-ratio: 135 / 40; object-fit: cover;"></a>
        </div>
    </div>
    <footer class="my-8 text-xs text-gray-600 flex flex-col items-center space-y-1">
        <div class="flex flex-wrap gap-1">
            <a href="#" class="hover:underline mx-2" rel="ugc">Meta</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">About</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Blog</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Jobs</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Help</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">API</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Privacy</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Terms</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Locations</a>
            <a href="#" class="hover:underline mx-2">Instagram Lite</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Threads</a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Contact Uploading & Non-Users </a>
            <a href="#" class="hover:underline mx-2" rel="ugc">Meta Verified</a>
        </div>
        <div class="mt-4 flex items-center space-x-2">
            <label for="language-select" class="text-xs">Language</label>
            <select id="language-select" class="rounded text-xs border border-gray-300 p-1">
                <option>English</option>
                <option>Spanish</option>
                <option>French</option>
            </select>
        </div>
        <p class="mt-4 text-center text-xs">© {{ date('Y') }} Instagram from Meta</p>
    </footer>
</body>

</html>

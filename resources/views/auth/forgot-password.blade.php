<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram - Forgot Password</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex flex-col items-center min-h-screen py-8 px-4">
        <div class="max-w-sm w-full space-y-8 bg-white p-8 border-solid border border-[#dbdbdb]">
            <div class="flex flex-col items-center space-y-4">
                <h1 class="text-4xl font-semibold"><img src="{{ asset('images/forget-logo.png') }}" alt="Instagram"></h1>
                <p class="font-semibold text-center text-base">Trouble logging in?</p>
                <p class="font-normal text-[#737373] text-center text-base ">Enter your email and
                    we'll send you a link to get back into your account.
                </p>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="space-y-4">
                    <div class="space-y-2">
                        <input
                            class="flex h-10 w-full bg-[#fafafa] rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            placeholder="Email or username" type="text" name="email">
                    </div>
                    <p class="text-xs text-gray-500 text-center">
                        Enter your email to reset your password.
                    </p>
                    <div class="space-y-2">
                        <button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 w-full bg-[#0095f6] text-white">
                            Reset Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Separate section for login -->
        <div class="max-w-sm w-full mt-4 bg-white p-4 text-center border-solid border border-[#dbdbdb]">
            <p class="text-sm">
                Return to
                <a href="{{ route('login') }}" class="text-[#0095f6]" rel="ugc">
                    Log in
                </a>
            </p>
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

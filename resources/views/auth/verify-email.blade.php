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
                <p class="text-[#737373] text-center text-base font-bold">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="space-y-2">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-primary-button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 w-full bg-[#0095f6] text-white">
                            {{ __('Resend Verification Email') }}
                        </x-primary-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:text-gray-900 h-10 px-4 py-2 w-full text-gray-600">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

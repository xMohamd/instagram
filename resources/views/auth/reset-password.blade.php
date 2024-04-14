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
                <p class="text-[#737373] text-center text-base font-bold">Reset your password</p>
            </div>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="space-y-4">
                    <div>
                        <input id="email"
                            class="flex h-10 w-full rounded-md bg-[#fafafa] border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            type="email" name="email" value="{{ old('email', $request->email) }}"
                            placeholder="Email" required autofocus autocomplete="username">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                    </div>

                    <div>
                        <input id="password"
                            class="flex h-10 w-full rounded-md bg-[#fafafa] border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            type="password" name="password" placeholder="Password" required autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                    </div>

                    <div>
                        <input id="password_confirmation"
                            class="flex h-10 w-full rounded-md bg-[#fafafa] border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            type="password" name="password_confirmation" placeholder="Confirm Password" required
                            autocomplete="new-password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-4 py-2 w-full bg-[#0095f6] text-white">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .shadow-gradient {
            box-shadow: 0 10px 15px -3px rgba(255, 100, 150, 0.2), 0 4px 6px -2px rgba(255, 100, 150, 0.1);
        }

        .btn-primary {
            background-image: linear-gradient(to right, #60a5fa 0%, #3b82f6 100%);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-image: linear-gradient(to right, #3b82f6 0%, #60a5fa 100%);
        }

        .form-control {
            background-color: #fff;
            border-width: 1px;
            padding: 0.5rem;
            border-radius: 0.375rem;
            border-color: #d1d5db;
            width: 100%;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        .form-select {
            appearance: none;
            background-color: #fff;
            border-width: 1px;
            padding: 0.5rem;
            border-radius: 0.375rem;
            border-color: #d1d5db;
            width: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path d="M7 7l3-3 3 3m0 6l-3 3-3-3" stroke="%239fa6b2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>');
            background-repeat: no-repeat;
            background-position: right 0.5rem center;
            background-size: 1.5em 1.5em;
            padding-right: 2rem;
        }
    </style>
</head>

<body class="bg-pink-50 animate-fade-in">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <div class="bg-white p-6 shadow-gradient rounded-lg">
                    <div class="mb-4 text-xl font-bold text-gray-900">Edit User</div>

                    <form action="{{ route('admin.update', $user->id) }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ $user->username }}">
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="is_admin" class="form-label">Role</label>
                            <select class="form-select" id="is_admin" name="is_admin">
                                <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>User</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary py-2 px-4 rounded">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

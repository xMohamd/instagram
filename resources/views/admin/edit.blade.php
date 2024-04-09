<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
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
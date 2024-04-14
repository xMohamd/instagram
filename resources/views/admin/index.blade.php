<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Users</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

        .btn-gradient {
            background-image: linear-gradient(to right, #ff758c 0%, #ff7eb3 100%);
            color: white;
        }

        .btn-gradient:hover {
            background-image: linear-gradient(to right, #ff7eb3 0%, #ff758c 100%);
        }

        .shadow-gradient {
            box-shadow: 0 10px 15px -3px rgba(255, 100, 150, 0.2), 0 4px 6px -2px rgba(255, 100, 150, 0.1);
        }

        .btn-edit {
            background-image: linear-gradient(to right, #60a5fa 0%, #3b82f6 100%);
            color: white;
        }

        .btn-edit:hover {
            background-image: linear-gradient(to right, #3b82f6 0%, #60a5fa 100%);
        }

        .btn-delete {
            background-image: linear-gradient(to right, #f87171 0%, #ef4444 100%);
            color: white;
        }

        .btn-delete:hover {
            background-image: linear-gradient(to right, #ef4444 0%, #f87171 100%);
        }
    </style>
</head>

<body class="bg-pink-50">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div class="w-full md:w-11/12 lg:w-10/12 xl:w-8/12">
                <div class="bg-white shadow-gradient rounded-lg overflow-hidden animate-fade-in">
                    <div
                        class="p-5 bg-gradient-to-r from-pink-500 to-purple-500 text-white flex justify-between items-center">
                        <h2 class="text-2xl font-bold">Admin Dashboard</h2>
                        <a href="{{ route('admin.trash') }}"
                            class="btn-gradient py-2 px-4 rounded transition ease-in-out duration-150">
                            Trash
                        </a>
                    </div>

                    <div class="p-6">
                        <table class="w-full text-left rounded-lg">
                            <thead class="text-white bg-gradient-to-r from-pink-600 to-purple-600">
                                <tr>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Name</th>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Username</th>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Email</th>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Role</th>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($users as $user)
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-4 flex items-center">
                                            <img class="h-10 w-10 rounded-full mr-4"
                                                src="{{ $user->avatar ?? 'default-image-url' }}"
                                                alt="{{ $user->name }}'s profile picture">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-4">{{ $user->username }}</td>
                                        <td class="px-6 py-4">{{ $user->email }}</td>
                                        <td class="px-6 py-4">{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                                        <td class="px-6 py-4 flex space-x-4">
                                            <a href="{{ route('admin.edit', $user->id) }}"
                                                class="btn-edit py-2 px-4 rounded transition ease-in-out duration-150">Edit</a>
                                            <form action="{{ route('admin.destroy', $user->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn-delete py-2 px-4 rounded transition ease-in-out duration-150">Delete</button>
                                            </form>
                                            @if ($user->deleted_at !== null)
                                                <a href="{{ route('admin.restore', $user->id) }}"
                                                    class="text-green-500 hover:text-green-700">Restore</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

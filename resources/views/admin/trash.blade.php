<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Users</title>
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

        .btn-success {
            background-color: #10b981;
            /* Green */
            color: white;
        }

        .btn-success:hover {
            background-color: #059669;
        }

        .btn-danger {
            background-color: #ef4444;
            /* Red */
            color: white;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }
    </style>
</head>

<body class="bg-pink-50 animate-fade-in">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center">
            <div class="w-full md:w-11/12 lg:w-10/12 xl:w-8/12">
                <div class="bg-white p-6 shadow-gradient rounded-lg">
                    <div class="mb-4 text-xl font-bold text-gray-900 flex justify-between items-center">
                        Deleted Users
                        <a href="{{ route('admin.index') }}"
                            class="btn-primary py-2 px-4 rounded bg-blue-500 hover:bg-blue-700 text-white">Admin
                            Page</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left rounded-lg">
                            <thead class="text-white bg-gradient-to-r from-pink-500 to-purple-500">
                                <tr>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Name</th>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Email</th>
                                    <th class="px-6 py-3 font-bold uppercase text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y">
                                @foreach ($users as $user)
                                    <tr class="text-gray-700 hover:bg-gray-100">
                                        <td class="px-6 py-3 font-bold  text-center flex items-center">
                                            <img class="h-10 w-10 rounded-full mr-4" src="{{ $user->avatar }}"
                                                alt="{{ $user->name }}'s profile picture">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-3 font-bold  text-center">{{ $user->email }}</td>
                                        <td class="px-6 py-3 font-bold  text-center">
                                            <div class="flex space-x-2 items-center">
                                                <a href="{{ route('admin.restore', $user->id) }}"
                                                    class="btn-success py-2 px-4 rounded inline-flex items-center justify-center">Restore</a>
                                                <form action="{{ route('admin.forceDelete', $user->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn-danger py-2 px-4 rounded inline-flex items-center justify-center">Delete
                                                        Permanently</button>
                                                </form>
                                            </div>
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

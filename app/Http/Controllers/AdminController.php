<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;




class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function edit(User $user)
    {
        if (!$user) {
            abort(404); // or return a custom error view
        }

        return view('admin.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'is_admin' => 'required|in:1,0',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name field must be a string.',
            'name.max' => 'The name field must not exceed 255 characters.',
            'username.required' => 'The username field is required.',
            'username.string' => 'The username field must be a string.',
            'username.max' => 'The username field must not exceed 255 characters.',
            'username.unique' => 'The username has already been taken.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'is_admin.required' => 'The role field is required.',
            'is_admin.in' => 'The role must be either admin or user.',
        ]);

        $user->update($request->only('name', 'username', 'email', 'is_admin'));
        return redirect()->route('admin.index')->with('success', 'User updated successfully');
    }




    public function destroy(User $user)
    {
        if (!$user) {
            abort(404); // or return a custom error view
        }

        $user->delete();
        return redirect()->route('admin.index')->with('success', 'User deleted successfully');
    }

    public function restore($id)
    {
        $user = User::withTrashed()->find($id);

        if (!$user) {
            abort(404); // or return a custom error view
        }

        $user->restore();
        return redirect()->route('admin.index')->with('success', 'User restored successfully');
    }


    public function trash()
    {
        $users = User::onlyTrashed()->get();
        return view('admin.trash', compact('users'));
    }

    public function forceDelete($id)
    {
        $user = User::withTrashed()->find($id);

        if (!$user) {
            abort(404); // or return a custom error view
        }

        $user->forceDelete();
        return redirect()->route('admin.trash')->with('success', 'User permanently deleted successfully');
    }

}
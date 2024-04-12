<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User_infos;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */

    public function create(Request $request)
    {
        $user = $request->user();

        if ($request->filled('bio')) {
            $user->bio = $request->bio;
        }

        if ($request->filled('website')) {
            $user->website = $request->website;
        }

        if ($request->filled('gender')) {
            $user->gender = $request->gender;
        }

        if ($request->hasFile('avatar')) {
            $imageName = time() . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('images'), $imageName);
            $user->avatar = 'images/' . $imageName;
        }
    
        // Save the user only if the form is submitted and the save button is clicked
        if ($request->has('save')) {
            $user->save();
        }

        $user->save();

        return redirect()->route('profile.edit');
    }


    /**
     * Update the user's profile information using a form request.
     */
    public function update(ProfileUpdateRequest $request ): RedirectResponse

    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();


        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

}
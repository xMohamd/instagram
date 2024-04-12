<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'follower_id' => 'required|exists:users,id',
            'followed_id' => 'required|exists:users,id',
        ]);

        // Create a new follow relationship
        $follow = Follow::create([
            'follower_id' => $request->input('follower_id'),
            'followed_id' => $request->input('followed_id'),
        ]);

        // Optionally, you can return a response indicating success or redirect
        // For example, redirect back with a success message
        return redirect()->back()->with('success', 'You are now following this user!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($follower_id, $followed_id)
    {
        $follow = Follow::where('follower_id', $follower_id)
            ->where('followed_id', $followed_id)
            ->firstOrFail();


        // Check if the authenticated user has permission to delete
        // For demonstration, let's assume any user can delete any follow relationship
        $follow->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Follow relationship deleted successfully.');
    }
}

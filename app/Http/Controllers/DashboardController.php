<?php

namespace App\Http\Controllers;

use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // get user id from auth
        $user_id = auth()->user()->id;

        // find user from database
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }
}

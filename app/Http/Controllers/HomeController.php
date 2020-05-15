<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
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
        $activeusers = DB::table('users')->where('status','active')->get();
        $pendingusers = DB::table('users')->where('status','pending')->get();
        return view('home', ['activeusers' => $activeusers,'pendingusers'=>$pendingusers]);
    }
    public function activateUser(Request $request,$userid)
    {
        $user = User::whereid($userid)->first();
        $user->status='active';
        $user->save();
        return redirect()->route('home');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $user = \Auth::user();

        return view('home', ['user' => $user]);
    }


    DB::table('users')->insert(
        [
            'name' => 'システム管理者',
            'email' => 'system@gmail.com',
            'password' => 'password',
            'status' => 0,
    ],
     [
            'name' => '教員',
            'email' => 'teacher@gmail.com',
            'password' => 'password',
            'status' => 1,
    ],
     [
            'name' => '学生',
            'email' => 'student@gmail.com',
            'password' => 'password',
            'status' => 2,
    ],
     [
            'name' => '教員',
            'email' => 'teacher@gmail.com',
            'password' => 'password',
            'status' => 1,
    ],

);
}
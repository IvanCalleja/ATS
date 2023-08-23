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
        $role_id = auth()->user()->role_id;

        $redirects = [
            1 => '/admin',
            2 => '/staffs',
            3 => '/client1',
        ];

        $redirectTo = isset($redirects[$role_id]) ? $redirects[$role_id] : '/index';

        return redirect($redirectTo);
    }
}

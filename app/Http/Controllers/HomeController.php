<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('index');
        } elseif (Auth::user()->role == 'member') {
            return redirect()->route('index');
        } else {
            // Session::flash('error', 'Email atau password salah');
            return redirect()->route('landingpage');
        }
    }
}

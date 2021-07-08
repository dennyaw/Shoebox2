<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/landingpage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function authenticated(Request $request, $user)
    {
        if ($user->role == 'admin') {
            return redirect()->route('admin.index');
        } else if ($user->role == 'member') {
            return redirect()->route('landingpage');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /* public function showLoginForm()
    {
        $data = array('title' => 'Login');
        return view('auth.login', $data);
    }*/
}

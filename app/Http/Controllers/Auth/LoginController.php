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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        return redirect(route('welcome'));
    }
    public function login(Request $request)
    {
        $loginDetails = $request->all();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->attempt(array('email' => $loginDetails['email'], 'password' => $loginDetails['password']))) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            } else {
                $name = Auth()->user()->name;
                $parts = explode(' ', $name);
                $firstName = $parts[0];
                return view('welcome', compact('firstName'));
            }
        } else {
            return redirect()->route('login')->with('status', 'Please Input valid e-mail & password.');
        }
    }
}

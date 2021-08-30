<?php

namespace App\Http\Controllers\user\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    public function showUserLoginForm()
    {
        if (Auth::guard('user')->check()) {
            return redirect()->intended('/user/dashboard');
        }
        return view('user.auth.login');
    }

    public function userLogin(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/user/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request){
        Auth::guard('user')->logout();
        return redirect(route('user.login'));

    }
}

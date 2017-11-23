<?php


namespace App\Http\Controllers\Adminauth;

use Dotenv\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller {
    use AuthenticatesUsers, ThrottlesLogins;
    protected $redirectTo = '/dashboard';
    protected $guard = 'admin';
    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
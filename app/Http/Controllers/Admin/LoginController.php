<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        $this->validate($request, [
            'name' => 'required|exists:users',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'name' => trans('auth.failed'),
            ]);
        }

        $user = Auth::user();
        if ($user->role == 1) {
            return redirect()->route('dashboard.home');
        } elseif ($user->role == 2) {
            return redirect()->route('home');
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home.login.index');
    }
}

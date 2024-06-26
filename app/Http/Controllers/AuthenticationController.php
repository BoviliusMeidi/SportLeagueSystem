<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AuthenticationController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function registerPost(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
            'confirmpassword' => ['required'],
        ]);

        $password = $request->password;
        $confirmpassword = $request->confirmpassword;

        if (User::where('email', $request->email)->exists()) {
            return redirect(route('register'))->withInput()->with('error', 'Email already exist !!');
        };

        if ($password != $confirmpassword) {
            return redirect(route('register'))->withInput()->with('error', 'Confirm Password , wrong !!');
        };

        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if (!$user) {
            return redirect(route('register'))->withInput()->with('error', 'Registration Failed, try again.');
        }

        return redirect(route('login'))->with('success', 'Registration Success, login to access application');
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('homepage'));
        }

        return back()->withErrors([
            'email' => 'Email atau Password ada yang tidak sama!',
        ])->onlyInput('email');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() 
    {
        return view('pages.login',[
            'title' => 'Login',
            'action' => 'Login',
            'route' => route('user.post'),
        ]);
    }

    public function post_login(Request $request)
    {
        $this->validation_login($request);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with(['success' => 'You have Successfully loggedin']);
        }
  
        return redirect()->route("user.login")->with(['error' =>'Oppss! Failed to loggged']);
    }

    public function register() 
    {
        return view('pages.register',[
            'title' => 'Register',
            'action' => 'Save',
            'route' => route('user.store'),
        ]);
    }

    public function store(Request $request)
    {
        $this->validation_register($request);

        $result = User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
        ]);

        if($result){
            return redirect()->route('user.login')->with(['success' => 'User Registered Successfully!']);
        } else {
            return redirect()->route('user.login')->with(['error' => 'User Failed to Register!']);
        }
    }

    private function validation_register($request)
    {
        return $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email|required|max:100',
            'password' => 'required|min:6',
            'confirm_password' => 'required|required_with:password|same:password|min:6'
        ]);
    }

    private function validation_login($request)
    {
        return $this->validate($request, [
            'email' => 'email|required|max:100',
            'password' => 'required|min:6',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    }
}

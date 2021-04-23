<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index () {
        return view('auth.register');
    }
    
    public function store (Request $request) {
        //validate data
        $this->validate($request, [
            'name'=>'required|max:225',
            'username'=>'required|max:225',
            'email'=>'required|max:225|email',
            'password'=>'required|confirmed',
            
        ]);

        //create user
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        //sign in user
        auth()->attempt($request->only('email', 'password'));
        //redirect user to home
        return redirect()->route('home');
    }
}

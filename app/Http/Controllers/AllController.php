<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function register(Request $request)
    {
        //    return $request->input();
        $data = new UserData();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->username = $request->input('username');
        $data->password = $request->input('password');
        $res = $data->save();
        if ($res) {
            $request->session()->put('UserData', $request->input('name'));
            return redirect('/');
        } else {
            return "not registered";
        }
    }

    public function login(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $check = UserData::where(['username' => $username, 'password' => $password])->first();
        if (!empty($check)) {
            $request->session()->put('UserData', $check['username']);
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function loginview()
    {
        if (session()->has('UserData')) {
            return redirect('/');
        } else {
            return view('login');
        }
    }
    public function  registerForm()
    {
        if (session()->has('UserData')) {
            return redirect('/');
        } else {
            return view('register');
        }
    }
}

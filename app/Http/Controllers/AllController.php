<?php

namespace App\Http\Controllers;
use App\Models\UserData;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function register(Request $request){
    //    return $request->input();
    $data = new UserData();
    $data->name = $request->input('name');
    $data->email = $request->input('email');
    $data->username = $request->input('username');
    $data->password = $request->input('password');
       $res= $data->save();
        if($res){
            $request->session()->put('UserData', $request->input('name'));
            return redirect('/');
        }else{
            return "not registered";
        }
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $check = UserData::where(['username'=>$username, 'password'=>$password])->get();
        if($check){
            $request->session()->put('UserData', $check[0]->username);
            return redirect('/');
        }else{
            return back();
        }
    }
}

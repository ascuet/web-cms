<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
class AccountController extends Controller
{
    public function login()
    {
    	if(Session::has('userid')){
    		return redirect()->to('/dashboard');
    	}
    	return view('backend.pages.single.login');
    }

    public function loginstore(Request $request)
    {
    	$email    = $request->email;
    	$password = $request->password;

        $user     = User::where('email','=',$email)
                        ->where('password','=',md5($password)) 
                        ->first();

        if($user)
        {
        	Session::put('userid',$user->id);
            Session::put('useremail',$user->email);
            return redirect()->to('/dashboard');
        }
        else
        {
            return redirect()->back()->with('msg',"The email or password you entered is incorrect");
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->to('/login');
    }
}

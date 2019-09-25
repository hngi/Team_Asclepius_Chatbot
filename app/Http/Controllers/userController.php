<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserData;

class userController extends Controller
{
    public function showLogin()
    {
    	return view('login');
    }

    public function postLogin()
    {
    	//gets login data once it is filled
    	$username=Request('username');
    	$password=sha1(Request('password'));
    	$data=UserData::where('username',$username)->where('password',$password)->get();
    	if ($data->count()<=0)
    	{echo "username or password not found<br>";}
    	else
    	{
    		$data=$data->first();
    		return redirect('/');
    	}
    }


    public function showSignup()
    {
    	return view('signup');
    }

    public function postSignup(Request $request)
    {
    	//gets signup data once it is filled
    	$userdata=new UserData();
    	$userdata->fullname=$request->input('fullname');
    	$userdata->username=$request->input('username');
    	$userdata->email=$request->input('email');
    	$userdata->telno=$request->input('mobileno');
    	$userdata->password=sha1($request->input('password'));
    	$userdata->save();
    	echo "data saved successfully";
    }


}

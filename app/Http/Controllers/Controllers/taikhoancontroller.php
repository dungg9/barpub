<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taikhoanmodel;

class taikhoancontroller extends Controller
{
    //
    public function login()
    {
        return view("login");
    }
    public function loginprocess(Request $request)
    {
        $objtk=new taikhoanmodel();
        $objtk->username=$request->txtuser;
        $objtk->password=$request->txtpassword;
        $check=$objtk->checklogin();
        if($check==0)
        {
            return redirect()->route("login")->with("thongbao","Try again!");
        }else
        {
            session()->put("username",$objtk->username);
            return redirect()->route("index");
        }
    }
    public function logoutProcess()
    {
        Auth::logout();
        return redirect('login');
    }
}

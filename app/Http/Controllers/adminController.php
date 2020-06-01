<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Support\Facades\Redirect;
session_start();

class adminController extends Controller
{
    public function login(){
        return view('admin.login');
    }


     public function dashboard(Request $request){

        $admin_username = $request->admin_username;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admins')
                    ->where('admin_username',$admin_username)
                    ->where('admin_password',$admin_password)
                    ->first();

                    if($result){
                            Session::put('admin_username',$result->admin_username);
                            Session::put('admin_password',$result->admin_password);
                            Session::put('id',$result->id);

                        return redirect()->route('dashboard');
                    }else{
                             Session::put('message','Email or Password Invalid');
                             return redirect()->route('admin-login');
                    }

    }
}

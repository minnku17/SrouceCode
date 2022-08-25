<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Session; //Laravel 8.0
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin_login');
    }
    public function index(){
        return view('admin.home_admin');
    }
    
    public function admin_home(Request $request){
        $email = $request -> admin_email;
        $pass = $request -> admin_password;

        $request =db::table('tbl_admin') -> where ('admin_email',$email) -> where('admin_password',$pass) -> first();
        if($request){
            Session::put('admin_email',$request ->admin_name);
            Session::put('admin_password',$request ->admin_password);
            return Redirect::to('/admin');
        }
        else{
            Session::put('message','Sai tên đăng nhập hoặc mật khẩu');
            return Redirect::to('/admin/login');
        }
    }
    public function logout()
    {
        Session::put('admin_email', null);
        return Redirect::to('/admin/login');
    }
}

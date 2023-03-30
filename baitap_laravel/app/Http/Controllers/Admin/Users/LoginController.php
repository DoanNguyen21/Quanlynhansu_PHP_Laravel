<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
       return view('admin.users.login', [
        'title' => 'Đăng Nhập Hệ Thống'
       ]);
    }

    public function employee(Request $request){
       
    
       
        $this -> validate($request, [
       'email' => 'required|email:filter',
       'password' => 'required'
        ],[
            'email.required'=>'Bạn chưa nhập email',
            'password.required'=>'Bạn chưa nhập password'
        ]);

        
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {

            return  redirect()->route('admin');
           
        }
        
       Session()->flash('error','Email hoặc Password không đúng');

        return redirect()->back();
    }
}

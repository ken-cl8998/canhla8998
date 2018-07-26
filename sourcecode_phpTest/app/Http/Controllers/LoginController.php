<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{	
	public function getAminLogin(){
		return view('admin-login');
	}
	public function getUserLogin(){
		return view('user-login');
	}
	public function postAdminLogin(Request $request){
		$email = $request->input('email');
		$password = $request->input('password');
		if(Auth::attempt(['email'=>$email,'password'=>$password])){
			return redirect('admin-bai-viet');
		}else{
			return redirect('admin-login')->with('thongbao', 'Đăng nhập không thành công!');
		}
	}
	public function postUserLogin(Request $request){
		$email = $request->input('email');
		$password = $request->input('password');
		if(Auth::attempt(['email'=>$email,'password'=>$password])){
			return redirect('author-bai-viet');
		}else{
			return redirect('user-login')->with('thongbao', 'Đăng nhập không thành công!');
		}
	}

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //前台用户注册页面
    public function register(){
    	return view('index/user/register');
    }
    //处理用户注册信息
    public function doRegister(){
    	dd($_POST);
    }
}

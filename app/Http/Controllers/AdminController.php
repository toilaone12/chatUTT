<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $titlePage = 'Trang chủ';
        return view('admin.content',compact(
            'titlePage'
        ));
    }

    public function logout(){
        Cookie::queue(Cookie::forget('username'));
        return response()->json(['res' => 'success'],200);
    }

    public function login(){
        return view('admin.login');
    }
}

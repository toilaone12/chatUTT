<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $titlePage = 'Trang chủ';
        return view('admin.content',compact(
            'titlePage'
        ));
    }
}

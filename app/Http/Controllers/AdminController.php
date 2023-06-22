<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $titlePage = 'Trang chủ';
        if((Cookie::get('username'))){
            return view('admin.content',compact(
                'titlePage'
            ));
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function logout(){
        Cookie::queue(Cookie::forget('username'));
        return response()->json(['res' => 'success'],200);
    }

    public function login(){
        return view('admin.login');
    }

    public function signIn(Request $request){
        $data = $request->all();
        // dd($data);
        Validator::make($data,[
            'username' => ['required'],
            'password' => ['required'],
            'otp' => ['required']
        ])->validate();
        $signIn = Admin::where('username',$data['username'])->where('password',md5($data['password']))->where('remember_token',$data['otp'])->first();
        // dd($signIn);
        if($signIn){
            Cookie::queue('username',$data['username'],2628000);
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login');
        }
    }

    public function listUser(){
        $titlePage = 'Danh sách quản trị';
        $listUser = Admin::all();
        return view('user.list_user',compact(
            'listUser',
            'titlePage'
        ));
    }

    public function createUser(Request $request){
        $data = $request->all();
        $fullname = $data['fullname'];
        $username = $data['username'];
        $email = $data['email'];
        $otp = rand(0,999999);
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = substr(str_shuffle($characters),0,8);
        $patternFullname = '/^[a-zA-Z\sÀ-Ỹà-ỹ]+$/';
        $patternUsername = '/^[a-zA-Z]+[0-9]+$/';
        $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $titleMail = 'Tạo tài khoản thành công';
        $errors = [];
        if(!preg_match($patternEmail,$email)){
            $errors['email'] = 'Sai định dạng email';
        }
        if(!preg_match($patternFullname,$fullname)){
            $errors['fullname'] = 'Sai định dạng họ tên';
        }
        if(!preg_match($patternUsername,$username)){
            $errors['username'] = 'Sai định dạng tên đăng nhập';
        }
        if(count($errors) > 0){
            return response()->json(['res' => 'warning', 'result' => $errors],200);
        }else{
            $checkUser = Admin::where('email',$email)->first();
            if($checkUser){
                return response()->json(['res' => 'fail', 'result' => 'Tài khoản bạn bị trùng'],200);
            }else{
                // dd($randomString)
                $dataMail = [
                    'name' => $fullname,
                    'username' => $username,
                    'email' => $email,
                    'otp' => $otp,
                    'password' => $password
                ];
                $create = Admin::create([
                    'name' => $fullname,
                    'username' => $username,
                    'email' => $email,
                    'remember_token' => $otp,
                    'password' => md5($password),
                ]);
                if($create){
                    Mail::send('mail.create_user',$dataMail,function($message) use ($titleMail,$email){
                        $message->to($email)->subject($titleMail);
                        $message->from($email,$titleMail);
                    });
                    return response()->json(['res' => 'success', 'result' => 'Tạo tài khoản thành công, vui lòng vào Gmail để kiểm tra'],200);
                }else{
                    return response()->json(['res' => 'fail', 'result' => 'Tạo tài khoản thất bại'],200);
                }
            }
        }

    }

    public function setting(){
        $titlePage = 'Cài đặt';
        if(Cookie::get('username')){
            $user = Admin::where('username',Cookie::get('username'))->first();
            return view('user.setting',compact(
                'titlePage',
                'user'
            ));
        }
    }

    public function changePassword(){
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    function loginForm(){
        return view('home.login');
    }

    function register(Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            'email' => ['required'],
            'password' => ['required','min:6','max:32']
        ],[
            'email.required' => 'Email không được để trống dữ liệu',
            'password.required' => 'Mật khẩu không được để trống dữ liệu',
            'password.min' => 'Mật khẩu phải ít nhất có 6 ký tự',
            'password.max' => 'Mật khẩu phải nhiều nhất có 32 ký tự',
        ])->validate();
        // if($validator->fails()){
        //     return redirect()->route('page.loginForm')->withErrors($validator)->withInput();
        // }else{
            $register = Customer::create([
                'image_customer' => 'http://127.0.0.1:8000/fe/image/person.svg',
                'name_customer' => 'UID'.substr(md5(rand(0,99)),6),
                'birthday_customer' => date('Y-m-d H:i:s'),
                'gentle_customer' => 0,
                'email_customer' => $data['email'],
                'password_customer' => md5($data['password']),
                'phone_customer' => ''
            ]);
            if($register){
                return redirect()->route('page.home');
            }else{
                return redirect()->route('page.loginForm');
            }
        // }
    }

    function login(Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            'email' => ['required'],
            'password' => ['required','min:6','max:32']
        ],[
            'email.required' => 'Email không được để trống dữ liệu',
            'password.required' => 'Mật khẩu không được để trống dữ liệu',
            'password.min' => 'Mật khẩu phải ít nhất có 6 ký tự',
            'password.max' => 'Mật khẩu phải nhiều nhất có 32 ký tự',
        ])->validate();
        $login = Customer::where('email_customer',$data['email'])->where('password_customer',md5($data['password']))->get();
        if(count($login) > 0){
            // $response->withCookie(cookie()->forever('email',$data['email']));
            Cookie::queue('email',$data['email'],2628000);
            return redirect()->route('page.home');
        }else{
            return redirect()->route('page.loginForm');
        }
    
        // return view('home.login');
    }

    function home(){
        if(Cookie::get('email')){
            $email = Cookie::get('email');
            $oneCustomer = Customer::where('email_customer',$email)->get();
            $allRoomByUser = Room::where('id_user',$oneCustomer[0]->id_customer)->get();
            // dd($allRoomByUser);
            return view('home',compact(
                'oneCustomer',
                'allRoomByUser'
            ));
        }else{
            return redirect()->route('page.loginForm');
        }
    }

    function logout(){
        Cookie::queue(Cookie::forget('email'));
        return response()->json(['res' => 'success'],200);
    }

}

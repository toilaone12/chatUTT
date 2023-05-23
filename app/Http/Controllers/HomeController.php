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
            $allRoomByUser = Room::where('id_user',$oneCustomer[0]->id_customer)->orderBy('created_at','DESC')->get();
            $dateNow = strtotime(date('Y-m-d H:i:s'));
            $arrRoom = array();
            foreach($allRoomByUser as $key => $room){
                $dateCreate = strtotime($room->created_at);
                $date = intval($dateNow - $dateCreate);
                $day = $date / 86400;
                $week = $day / 7;
                $month = $day / 30;
                $nameDate = '';
                if($day < 1){
                    $nameDate = 'Hôm nay';
                }else if($day > 1 && $day < 7){
                    $nameDate = intval($day). ' ngày trước';
                }else if($week < 4){
                    $nameDate = intval($week).' tuần trước';
                }else if($month < 12){
                    if($week > 4 && $week < 5){
                        $nameDate = '1 tháng trước';
                    }else{
                        $nameDate = intval($month).' tháng trước';
                    }
                }else{
                    $nameDate = 'Năm trước';
                }
                $arr = [
                    'name_date' => $nameDate,
                    'code_history' => $room->code_history,
                    'name_room' => $room->name_room,
                ];
                array_push($arrRoom,$arr);
            }
            $arrRoom = collect($arrRoom);
            // dd(collect($arrRoom)); 
            // dd($arrRoom[0]['name_date']);
            return view('home',compact(
                'oneCustomer',
                'arrRoom',
                'nameDate'
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

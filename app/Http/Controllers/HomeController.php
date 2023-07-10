<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Room;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


class HomeController extends Controller
{
    //
    function loginForm()
    {
        return view('home.login');
    }

    function registerForm()
    {
        $titlePage = 'Đăng ký';
        return view('home.register', compact('titlePage'));
    }

    function register(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'email' => ['required'],
            'password' => ['required', 'min:6', 'max:32'],
            're-password' => ['required', 'same:password', 'min:6', 'max:32']
        ], [
            'email.required' => 'Email không được để trống dữ liệu',
            'password.required' => 'Mật khẩu không được để trống dữ liệu',
            'password.min' => 'Mật khẩu phải ít nhất có 6 ký tự',
            'password.max' => 'Mật khẩu phải nhiều nhất có 32 ký tự',
            're-password.required' => 'Mật khẩu không được để trống dữ liệu',
            're-password.min' => 'Mật khẩu phải ít nhất có 6 ký tự',
            're-password.max' => 'Mật khẩu phải nhiều nhất có 32 ký tự',
            're-password.same' => 'Mật khẩu và mật khẩu xác nhận không khớp.',
        ])->validate();
        // if($validator->fails()){
        //     return redirect()->route('page.loginForm')->withErrors($validator)->withInput();
        // }else{
        $checkAccount = Customer::where('email_customer', $data['email'])->first();
        if ($checkAccount) {
            return redirect()->route('page.registerForm')->with(['res' => 'warn', 'message' => 'Tài khoản đã tồn tại, yêu cầu kiểm tra lại']);
        } else {
            $register = Customer::create([
                'image_customer' => 'http://127.0.0.1:8000/fe/image/person.svg',
                'name_customer' => 'UID' . strtoupper(substr(md5(rand(0, 99)), 6)),
                'birthday_customer' => date('Y-m-d H:i:s'),
                'gentle_customer' => 0,
                'email_customer' => $data['email'],
                'password_customer' => md5($data['password']),
                'phone_customer' => ''
            ]);
            if ($register) {
                $email = $data['email'];
                $password = $data['password'];
                $titleMail = 'Tạo tài khoản thành công';
                $dataMail = [
                    'email' => $email,
                    'password' => $password
                ];
                Mail::send('mail.create_customer', $dataMail, function ($message) use ($titleMail, $email) {
                    $message->to($email)->subject($titleMail);
                    $message->from($email, $titleMail);
                });
                return redirect()->route('page.registerForm')->with(['res' => 'success', 'message' => 'Tạo tài khoản thành công, vui lòng vào Gmail để kiểm tra']);
            } else {
                return redirect()->route('page.registerForm')->with(['res' => 'fail', 'message' => 'Tạo tài khoản thất bại']);
            }
        }
        // }
    }

    function forgotPasswordForm()
    {
        $titlePage = 'Quên mật khẩu';
        return view('home.forgot_password', compact('titlePage'));
    }

    function changePassword(Request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            'email' => ['required'],
            'password' => ['required', 'min:6', 'max:32'],
            're-password' => ['required', 'same:password', 'min:6', 'max:32']
        ], [
            'email.required' => 'Email không được để trống dữ liệu',
            'password.required' => 'Mật khẩu không được để trống dữ liệu',
            'password.min' => 'Mật khẩu phải ít nhất có 6 ký tự',
            'password.max' => 'Mật khẩu phải nhiều nhất có 32 ký tự',
            're-password.required' => 'Mật khẩu không được để trống dữ liệu',
            're-password.min' => 'Mật khẩu phải ít nhất có 6 ký tự',
            're-password.max' => 'Mật khẩu phải nhiều nhất có 32 ký tự',
            're-password.same' => 'Mật khẩu và mật khẩu xác nhận không khớp.',
        ])->validate();
        $checkAccount = Customer::where('email_customer', $data['email'])->first();
        if ($checkAccount) {
            $checkAccount->password_customer = md5($data['password']);
            $changePassword = $checkAccount->save();
            if($changePassword){
                return redirect()->route('page.forgotPasswordForm')->with(['res' => 'success', 'message' => 'Thay đổi mật khẩu thành công']);
            }else{
                return redirect()->route('page.forgotPasswordForm')->with(['res' => 'fali', 'message' => 'Thay đổi mật khẩu thất bại']);
            }
        } else {
            return redirect()->route('page.forgotPasswordForm')->with(['res' => 'warn', 'message' => 'Tài khoản của bạn chưa tồn tại, yêu cầu kiểm tra lại']);
        }
    }

    function changePasswordCustomer(Request $request){
        $data = $request->all();
        $customer = Customer::find($data['id']);
        $customer->password_customer = md5($data['password']);
        $changePassword = $customer->save();
        if($changePassword){
            return response()->json(['res' => 'success', 'noti' => 'changePassword', 'message' => 'Thay đổi mật khẩu thành công']);
        }else{
            return response()->json(['res' => 'fail', 'noti' => 'changePassword', 'message' => 'Thay đổi mật khẩu thất bại']);
        }
    }

    function login(Request $request)
    {
        $data = $request->all();
        // dd($data);
        if (isset($data['remember']) && $data['remember'] == 'on') {
            $arrRemember = [
                'username' => $data['email'],
                'password' => $data['password'],
                'remember' => 'on'
            ];
            $jsonRemember = json_encode($arrRemember);
            Cookie::queue('json_remember', $jsonRemember, 2628000);
        } else {
            $jsonRemember = Cookie::get('json_remember');
            if (isset($jsonRemember)) {
                Cookie::queue(Cookie::forget('json_remember'));
            }
        }
        $validator = Validator::make($data, [
            'email' => ['required'],
            'password' => ['required', 'min:6', 'max:32']
        ], [
            'email.required' => 'Email không được để trống dữ liệu',
            'password.required' => 'Mật khẩu không được để trống dữ liệu',
            'password.min' => 'Mật khẩu phải ít nhất có 6 ký tự',
            'password.max' => 'Mật khẩu phải nhiều nhất có 32 ký tự',
        ])->validate();
        $login = Customer::where('email_customer', $data['email'])->where('password_customer', md5($data['password']))->get();
        if (count($login) > 0) {
            // $response->withCookie(cookie()->forever('email',$data['email']));
            Cookie::queue('email', $data['email'], 2628000);
            return redirect()->route('page.home');
        } else {
            return redirect()->route('page.loginForm');
        }
    }
    //Google
    function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    function loginGoogle()
    {
        // die('1');
        $user = Socialite::driver('google')->user();
        $userName = $user->name;
        $email = $user->email;
        $picture = $user->avatar;
        $client = new Client();
        $response = $client->get($picture);
        $image = $response->getBody()->getContents();
        // dd(Str::slug($userName,''));
        $fileName = Str::slug($userName, '') . '-' . strtotime(now()) . '.jpg'; // Tên tệp tin
        // dd($fileName);
        Storage::disk('public')->put($fileName, $image);
        $checkLogin = Customer::where('email_customer', $email)->get();
        // dd($checkLogin);
        Cookie::queue('email', $email, 2628000);
        if (count($checkLogin) == 1) {
            // Cookie::queue('email',$email,2628000);
            return redirect()->route('page.home');
        } else {
            $loginGoogle = Customer::create([
                'image_customer' => 'http://127.0.0.1:8000/storage/' . $fileName,
                'name_customer' => $userName,
                'birthday_customer' => date('Y-m-d H:i:s'),
                'email_customer' => $email,
                'gentle_customer' => 0,
            ]);
            if ($loginGoogle) {
                return redirect()->route('page.home');
            } else {
                dd('1');
            }
        }

        // dd($user);
        // dd(Socialite::driver('google')->user());
    }

    function home()
    {
        $titlePage = 'ChatUTT';
        $email = Cookie::get('email');
        if (isset($email)) {
            $email = Cookie::get('email');
            $oneCustomer = Customer::where('email_customer', $email)->first();
            $allRoomByUser = Room::where('id_user', $oneCustomer->id_customer)->orderBy('created_at', 'DESC')->get();
            $dateNow = strtotime(date('Y-m-d H:i:s'));
            $arrRoom = array();

            foreach ($allRoomByUser as $key => $room) {
                $dateCreate = strtotime($room->created_at);
                $date = intval($dateNow - $dateCreate);
                $day = $date / 86400;
                $week = $day / 7;
                $month = $day / 30;
                $nameDate = '';
                if ($day < 1) {
                    $nameDate = 'Hôm nay';
                } else if ($day > 1 && $day < 7) {
                    $nameDate = intval($day) . ' ngày trước';
                } else if ($week < 4) {
                    $nameDate = intval($week) . ' tuần trước';
                } else if ($month < 12) {
                    if ($week > 4 && $week < 5) {
                        $nameDate = '1 tháng trước';
                    } else {
                        $nameDate = intval($month) . ' tháng trước';
                    }
                } else {
                    $nameDate = 'Năm trước';
                }
                $arr = [
                    'name_date' => $nameDate,
                    'code_history' => $room->code_history,
                    'name_room' => $room->name_room,
                ];
                array_push($arrRoom, $arr);
            }
            $arrRoom = collect($arrRoom);
            // dd(collect($arrRoom)); 
            // dd($arrRoom[0]['name_date']);
            return view('home.content', compact(
                'oneCustomer',
                'arrRoom',
                'titlePage'
            ));
        } else {
            return redirect()->route('page.loginForm');
        }
    }

    function logout()
    {
        // Auth::logout();
        Cookie::queue(Cookie::forget('email'));
        return response()->json(['res' => 'success'], 200);
    }
}

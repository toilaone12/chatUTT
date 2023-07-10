<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CustomerController extends Controller
{
    //
    public function listCustomer(){
        $listCustomer = Customer::all();
        $titlePage = 'Danh sách người đăng ký';
        return view('customer.list_customer',compact(
            'listCustomer',
            'titlePage'
        ));
    }

    public function deleteCustomer($id){
        $delete = Customer::find($id)->delete();
        if($delete){
            return redirect()->route('customer.listCustomer')->with('message','<span class="text-success">Xóa thông tin thành công</span>');
        }else{
            return redirect()->route('customer.listCustomer')->with('message','<span class="text-danger">Xóa thông tin thất bại</span>');
        }
    }

    function profile(Request $request){
        $id = $request->get('id');
        $titlePage = 'Thông tin cá nhân';
        $email = Cookie::get('email');
        if (isset($email)) {
            $email = Cookie::get('email');
            $oneCustomer = Customer::where('email_customer', $email)->first();
            return view('home.profile',compact('titlePage','oneCustomer'));
        }
    }

    public function getProfile(Request $request){
        $id = $request->get('id');
        $customer = Customer::find($id);
        if($customer){
            return response()->json(['res' => 'success','result' => $customer],200);
        }else{
            return response()->json(['res' => 'fail','result' => 'Lấy thông tin thất bại'],200);
        }
    }

    public function updateProfile(Request $request){
        $data = $request->all();
        // dd($data);
        $customer = Customer::find($data['id']);
        $customer->name_customer = $data['fullname'];
        $customer->birthday_customer = $data['birthday'];
        $customer->phone_customer = $data['phone'];
        $customer->gentle_customer = $data['gentle'];
        $customer->email_customer = $data['email'];
        $update = $customer->save();
        if($update){
            return response()->json(['res' => 'success', 'noti' => 'changePassword', 'message' => 'Thay đổi thông tin thành công']);
        }else{
            return response()->json(['res' => 'fail', 'noti' => 'changePassword', 'message' => 'Thay đổi thông tin thất bại']);
        }
    }
}

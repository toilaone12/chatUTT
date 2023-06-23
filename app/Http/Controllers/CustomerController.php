<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

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
}

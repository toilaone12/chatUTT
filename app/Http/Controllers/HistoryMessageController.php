<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\HistoryMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HistoryMessageController extends Controller
{
    //
    function historyMessageRoom(Request $request){
        $codeRoom = $request->get('codeRoom');
        $listHistoryMessage = HistoryMessage::where('code_history',$codeRoom)->get();
        if(count($listHistoryMessage) > 0){
            $imageCustomer = Customer::find($listHistoryMessage[0]->id_user)['image_customer'];
        }else{
            $imageCustomer = Customer::where('email_customer',Cookie::get('email'))->first()->image_customer;
        }
        return response()->json(['res' => 'success', 'result' => $listHistoryMessage, 'imageCustomer' => $imageCustomer],200);
    }
}

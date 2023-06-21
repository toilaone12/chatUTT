<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\HistoryMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class HistoryMessageController extends Controller
{
    //
    function historyMessageRoom(Request $request){
        $codeRoom = $request->get('codeRoom');
        // DB::enableQueryLog();
        $listHistoryMessage = HistoryMessage::where('code_history',$codeRoom)->get();
        // $db = DB::getQueryLog();
        // dd($db);
        if(count($listHistoryMessage) > 0){
            $imageCustomer = Customer::find($listHistoryMessage[0]->id_user)['image_customer'];
        }else{
            $imageCustomer = Customer::where('email_customer',Cookie::get('email'))->first()->image_customer;
        }
        return response()->json(['res' => 'success', 'result' => $listHistoryMessage, 'imageCustomer' => $imageCustomer],200);
    }
}

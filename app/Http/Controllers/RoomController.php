<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    function createRoom(){
        $codeHistory = substr(md5(rand()),0,15);
        $user_id = 1;
        $createRoom = Room::create([
            'id_user' => $user_id,
            'code_history' => $codeHistory,
            'name_room' => '',
        ]);
        if($createRoom){
            return response()->json(['res' => 'success','status' => 'Tạo phòng mới thành công!', 'name_room' => ''],200);
        }else{
            return response()->json(['res' => 'fail','status' => 'Lỗi truy vấn!'],200);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    function createRoom(Request $request){
        $data = $request->all();
        $codeHistory = substr(md5(rand()),0,15);
        $userId = $data['userId'];
        $createRoom = Room::create([
            'id_user' => $userId,
            'code_history' => $codeHistory,
            'name_room' => '',
        ]);
        if($createRoom){
            return response()->json(['res' => 'success','status' => 'Tạo phòng mới thành công!', 'name_room' => '', 'code_room' => $codeHistory],200);
        }else{
            return response()->json(['res' => 'fail','status' => 'Lỗi truy vấn!'],200);
        }
    }
}

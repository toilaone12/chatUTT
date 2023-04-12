<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    public function answerListQuestion(Request $request){
        $data = $request->all();
        $insert = Answer::create([
            'question_list' => $data['question'],
            'answer' => $data['answer'],
        ]);
        if($insert){
            return response()->json(['res' => 'success','status' => 'Bạn đã trả lời thành công!'],200);
        }else{
            return response()->json(['res' => 'fail','status' => 'Kiểm tra lại truy vấn của bạn!'],200);
        }
    }

    public function botAnswer(Request $request){
        $data = $request->all();
        if($data['question'] == ''){
            return response()->json(['res' => 'fail','status' => 'Cảm ơn bạn vì đã thích câu nói vừa rồi!'],200);
        }else{
            $startTime = microtime(true);
            $select = Answer::where('question_list','like','%'.$data['question'].'%')->get();
            $endTime = microtime(true);
            $queryTime = ($endTime - $startTime) * 1000;
            // $updateNameRoom = Room::update()
            if(count($select) > 0){
                return response()->json(['res' => 'success', 'status' => 'Trả lời thành công!', 'result' => ['answer' => $select[0]->answer,'time_request' => $queryTime]]);
            }else{
                return response()->json(['res' => 'fail','status' => 'Kiểm tra lại truy vấn của bạn!', 'result' => ['time_request' => $queryTime / 1000000 ]],200);
            }
        }
    }
}

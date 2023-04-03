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
            $select = Answer::where('question_list','like','%'.$data['question'].'%')->get();
            if(count($select) > 0){
                return response()->json(['res' => 'success', 'status' => 'Trả lời thành công!', 'result' => $select[0]->answer]);
            }else{
                return response()->json(['res' => 'fail','status' => 'Kiểm tra lại truy vấn của bạn!'],200);
            }
        }
    }
}

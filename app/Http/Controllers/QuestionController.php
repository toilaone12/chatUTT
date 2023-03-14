<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    //
    public function listQuestion(){
        $titlePage = 'Danh sách câu hỏi';
        $listQuestion = Question::all();
        return view('question.list_question',compact(
            'titlePage','listQuestion'
        ));
    }

    public function insertQuestionForm(){
        $titlePage = 'Thêm câu hỏi';
        return view('question.insert_question',compact(
            'titlePage',
        ));
    }

    public function insertQuestion(Request $request){
        $data = $request->all();
        Validator::make($data,[
            'name' => ['required'],
        ])->validate();
        $insert = Question::create([
            'question' => $data['name']
        ]);
        if($insert){
            return redirect()->route('question.listQuestion')->with('message','Thêm câu hỏi thành công!');
        }else{
            return redirect()->route('question.listQuestion')->with('message','Thêm câu hỏi thất bại!');
        }
    }
}

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
        $titlePage = 'Thêm từ khóa';
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
            return redirect()->route('question.insertQuestionForm')->with('message','Thêm từ khóa thành công!');
        }else{
            return redirect()->route('question.insertQuestionForm')->with('message','Thêm từ khóa thất bại!');
        }
    }

    public function editQuestionForm($id){
        $titlePage = 'Sửa từ khóa';
        $question = Question::find($id);
        return view('question.edit_question',compact(
            'question',
            'titlePage'
        ));
    }

    public function editQuestion($id,Request $request){
        $data = $request->all();
        Validator::make($data,[
            'name' => ['required'],
        ])->validate();
        $question = Question::find($id);
        // dd($question);
        $question->question = $data['name'];
        $edit = $question->save();
        if($edit){
            return redirect()->route('question.editQuestionForm',['id'=>$id])->with('message','Sửa từ khóa thành công!');
        }else{
            return redirect()->route('question.editQuestionForm',['id'=>$id])->with('message','Sửa từ khóa thất bại!');
        }
    }

    public function deleteQuestion($id){
        $delete = Question::find($id)->delete();
        if($delete){
            return redirect()->route('question.listQuestion',['id'=>$id])->with('message','Xóa từ khóa thành công!');
        }else{
            return redirect()->route('question.listQuestion',['id'=>$id])->with('message','Xóa từ khóa thất bại!');
        }
    }
}

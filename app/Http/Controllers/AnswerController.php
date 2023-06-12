<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\HistoryMessage;
use App\Models\Room;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    public function answerListQuestion(Request $request)
    {
        $data = $request->all();
        $insert = Answer::create([
            'question_list' => $data['question'],
            'answer' => $data['answer'],
        ]);
        if ($insert) {
            return response()->json(['res' => 'success', 'status' => 'Bạn đã trả lời thành công!'], 200);
        } else {
            return response()->json(['res' => 'fail', 'status' => 'Kiểm tra lại truy vấn của bạn!'], 200);
        }
    }

    public function botAnswer(Request $request)
    {
        $data = $request->all();
        // dd($data['question']);
        if($data['question'] == ''){
            return response()->json(['res' => 'fail','status' => 'Cảm ơn bạn vì đã thích câu trả lời vừa rồi!'],200);
        }else{
            $question = $this->removeAccents($data['question']);
            // $word = $this->spliceString($question);
            $keywords = array('dai hoc cong nghe giao thong van tai', 'utt', 'quy che', 'tuyen sinh', 'diem', 'giang vien', 'thac si', 'tien si');
            $pattern = '/(' . implode('|', array_map('preg_quote', $keywords)) . ')/i';
            // dd($pattern);
            $keyQuery = '';
            if (preg_match_all($pattern, $question, $matches)) {
                $foundKeywords = $matches[0];
                $keyQuery = $foundKeywords[0];
            }
            $startTime = microtime(true);
            $select = Answer::where('question_list','like','%'.$keyQuery.'%')->get();
            $endTime = microtime(true);
            $queryTime = ($endTime - $startTime) * 1000;
            dd($keyQuery);
            // $updateNameRoom = Room::update()
            // if(count($select) > 0){
            //     $noti = '';
            //     $insertHistoryMessage = HistoryMessage::create([
            //         'id_user' => $data['userId'],
            //         'code_history' => $data['codeRoom'],
            //         'question' => $data['question'],
            //         'answer' => $select[0]->answer
            //     ]);
            //     $oneRoom = Room::where('code_history',$data['codeRoom'])->first();
            //     if($oneRoom->name_room == ''){
            //         $oneRoom->name_room = $data['question'];
            //         $oneRoom->save();
            //         $noti = true;
            //     }else{
            //         $noti = false;
            //     }
            //     return response()->json(['res' => 'success', 'status' => 'Trả lời thành công!', 'result' => ['answer' => $select[0]->answer,'noti' => $noti, 'code_room' => $data['codeRoom'], 'time_request' => $queryTime]]);
            // }else{
            //     return response()->json(['res' => 'fail','status' => 'Xin lỗi bạn vì chúng tôi chưa cập nhật thông tin về câu hỏi này!', 'result' => ['time_request' => $queryTime / 1000000 ]],200);
            // }
        }
    }

    function removeAccents($string)
    {
        // Quy đổi về chữ thường
        $string = mb_strtolower($string,'UTF-8');
        // Chuyển đổi các ký tự có dấu thành chữ không dấu
        $convertTable = array(
            'á' => 'a',
            'à' => 'a',
            'ả' => 'a',
            'ã' => 'a',
            'ạ' => 'a',
            'ă' => 'a',
            'ắ' => 'a',
            'ằ' => 'a',
            'ẳ' => 'a',
            'ẵ' => 'a',
            'ặ' => 'a',
            'â' => 'a',
            'ấ' => 'a',
            'ầ' => 'a',
            'ẩ' => 'a',
            'ẫ' => 'a',
            'ậ' => 'a',
            'đ' => 'd',
            'é' => 'e',
            'è' => 'e',
            'ẻ' => 'e',
            'ẽ' => 'e',
            'ẹ' => 'e',
            'ê' => 'e',
            'ế' => 'e',
            'ề' => 'e',
            'ể' => 'e',
            'ễ' => 'e',
            'ệ' => 'e',
            'í' => 'i',
            'ì' => 'i',
            'ỉ' => 'i',
            'ĩ' => 'i',
            'ị' => 'i',
            'ó' => 'o',
            'ò' => 'o',
            'ỏ' => 'o',
            'õ' => 'o',
            'ọ' => 'o',
            'ô' => 'o',
            'ố' => 'o',
            'ồ' => 'o',
            'ổ' => 'o',
            'ỗ' => 'o',
            'ộ' => 'o',
            'ơ' => 'o',
            'ớ' => 'o',
            'ờ' => 'o',
            'ở' => 'o',
            'ỡ' => 'o',
            'ợ' => 'o',
            'ú' => 'u',
            'ù' => 'u',
            'ủ' => 'u',
            'ũ' => 'u',
            'ụ' => 'u',
            'ư' => 'u',
            'ứ' => 'u',
            'ừ' => 'u',
            'ử' => 'u',
            'ữ' => 'u',
            'ự' => 'u',
            'ý' => 'y',
            'ỳ' => 'y',
            'ỷ' => 'y',
            'ỹ' => 'y',
            'ỵ' => 'y',
            'đ' => 'd',
        );
        $string = strtr($string,$convertTable);
        return $string;
    }

    function spliceString($string){
        $words = explode(" ", $string);
        $startPos = array_search("truong", $words);
        $endPos = array_search("van tai", $words);
        $result = implode(" ", array_slice($words, $startPos, $endPos - $startPos + 1));
        return $words;
    }
}

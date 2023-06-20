@extends('dashboard')
@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Basic Form Inputs</h5>
                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sửa câu trả lời cho Chatbot</h5>
                                    <div class="form-group">
                                        <p class="text-success">
                                            <?php

                                            use Illuminate\Support\Facades\Session;

                                            $message = Session::get('message');
                                            if (isset($message)) {
                                                echo $message;
                                                Session::put('message', '');
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="form-group">
                                        <label for="" class="f-14 mb-2">Danh sách từ khóa</label>
                                        <div class="form-group">
                                            @foreach($listQuestion as $key => $question)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input option-question" value="{{$question->id_question}}" {{in_array($question->question,$arrAnswer) ? 'checked' : ''}} type="checkbox" id="flexCheckDefault-{{$key}}">
                                                <label class="form-check-label question-{{$question->id_question}}" for="flexCheckDefault-{{$key}}">{{$question->question}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="f-14">Câu trả lời</label>
                                        <textarea name="answer" placeholder="Câu trả lời" class="form-control border p-2 mt-2" id="" cols="30" rows="10">{{$answer->answer}}</textarea>
                                    </div>
                                    <div class="form-group form-default">
                                        <button type="submit" class="btn btn-success rounded edit-answer" data-id="{{$answer->id_answer}}">Xác nhận</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>
@endsection
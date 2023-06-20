@extends('dashboard')
@section('content')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Bootstrap Basic Tables</h5>
                        <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Bootstrap Tables</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Basic Tables</a>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="page-wrapper">
                        <!-- Page-body start -->
                        <div class="page-body">
                            <!-- Hover table card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Danh sách câu trả lời</h5>.
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
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block table-border-style"  style="height: 643px; margin-bottom: 30px">
                                    <div class="table-responsive" style="height: inherit;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <!-- <th width="20">Chọn</th> -->
                                                    <th>STT</th>
                                                    <th>Các từ khóa</th>
                                                    <th>Câu trả lời</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                ?>
                                                @foreach($listAnswer as $key => $answer)
                                                <tr>
                                                    <td scope="row">{{$key + 1}}</td>
                                                    <td class="" style="white-space:normal">{{$answer->question_list}}</td>
                                                    <td style="white-space:normal">{{$answer->answer}}</td>
                                                    <td>
                                                        <a href="{{route('answer.editFormAnswer',['id' => $answer->id_answer])}}" class="btn btn-success mr-3"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Hover table card end -->
                        </div>
                        <!-- Page-body end -->
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="page-wrapper">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Chọn thao tác</h5>
                                <div class="mt-3">
                                    <button type="submit" class="d-block m-auto btn btn-success rounded disabled add-question" data-toggle="modal" data-target="#modalCart" style="pointer-events: none;">Trả lời câu hỏi</button>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="d-block m-auto mt-1 btn btn-success rounded" disabled>Trả lời câu hỏi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Trả lời câu hỏi</h4>
                                <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="message-answer">
                         
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Câu hỏi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list-question-choose">
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <label for="">Câu trả lời</label>
                                    <textarea name="text-question" placeholder="Câu trả lời" class="form-control mt-2 text-question-choose" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary rounded" data-dismiss="modal">Đóng</button>
                                <button class="btn btn-primary rounded answer-question-choose pe-none disabled">Trả lời</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>
</div>
@endsection
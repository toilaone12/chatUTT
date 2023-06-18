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
                                    <h5>Sửa từ khóa cho Chatbot</h5>
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
                                    <form action="{{route('question.editQuestion',['id' => $question->id_question])}}" method="POST" class="form-material">
                                        @csrf
                                        <div class="form-group form-default">
                                            <input type="text" name="name" class="form-control" value="{{$question->question}}" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Tên từ khóa</label>
                                            @error('name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group form-default">
                                            <button type="submit" class="btn btn-success rounded">Xác nhận</button>
                                        </div>
                                    </form>
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
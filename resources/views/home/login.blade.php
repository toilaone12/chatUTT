<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('be/images/utt.png')}}" type="image/x-icon">
    <title>Đăng nhập</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('fe/css/style.css')}}"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('fe/css/login.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                    <p class="text-center mb-3 mt-2">Đăng nhập bằng</p>
                    <div class="row mx-auto ">
                        <div class="col-4">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="col-4">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div class="col-4">
                            <i class="fab fa-google"></i>
                        </div>
                    </div>
                    <div class="division">
                        <div class="row">
                            <div class="col-4">
                                <div class="line l"></div>
                            </div>
                            <div class="col-4"><span>hoặc</span></div>
                            <div class="col-4">
                                <div class="line r"></div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{route('page.login')}}" class="myform">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Tài khoản">
                        </div>
                        <div class="form-group">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Lưu mật khẩu</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 bn">Quên mật khẩu</div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg"><small><i class="far fa-user pr-2"></i>Đăng nhập</small></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
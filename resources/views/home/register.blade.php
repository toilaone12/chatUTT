<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('be/images/utt.png')}}" type="image/x-icon">
    <title>{{isset($titlePage) ? $titlePage : ''}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{asset('fe/css/style.css')}}"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('fe/css/login.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }
    </style>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                    <p class="text-center mb-3 mt-2">Đăng ký</p>
                    <?php

                    use Illuminate\Support\Facades\Session;

                    $res = Session::get('res');
                    $message = Session::get('message');
                    if (isset($res)) {
                        if ($res == 'success') {
                            echo '<p style="margin-left: 32px" class="text-success">'.$message.'</p>';
                        }else if($res == 'warn'){
                            echo '<p style="margin-left: 32px" class="text-warning">'.$message.'</p>';
                        }else{
                            echo '<p style="margin-left: 32px" class="text-danger">'.$message.'</p>';
                        }
                    }
                    ?>
                    <form method="POST" action="{{route('page.register')}}" class="myform">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" autocomplete="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" autocomplete="current-password" name="password" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" autocomplete="current-password" name="re-password" class="form-control" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group">
                            @error('re-password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg register"><small><i class="far fa-user pr-2"></i>Đăng ký</small></button>
                            <p style="cursor:pointer" class="mt-3 d-flex justify-content-center login">Đăng nhập</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                // Lấy kinh độ và vĩ độ của vị trí hiện tại
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // Sử dụng kinh độ và vĩ độ để thực hiện các hành động khác, ví dụ như hiển thị bản đồ
                localStorage.setItem('lat', latitude);
                localStorage.setItem('lng', longitude);
            });
        } else {
            // Trình duyệt không hỗ trợ định vị
            localStorage.removeItem('lat');
            localStorage.removeItem('lng');
            // console.log("Trình duyệt này không hỗ trợ định vị!");
        }

        $('.login').click(function() {
            location.href = "{{route('page.loginForm')}}"
        });



    })
</script>

</html>
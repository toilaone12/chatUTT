<?php

use Illuminate\Support\Facades\Cookie;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{isset($titlePage) ? $titlePage : 'Trang chủ'}}</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('be/images/utt.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('be/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- waves.css -->
    <!-- <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> -->
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('be/css/themify-icons.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('be/css/jquery.mCustomScrollbar.css')}}">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('be/css/style.css')}}">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="me-2">
                            <img class="img-fluid w-75" src="{{asset('be/images/banner_utt.png')}}" alt=" Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <!-- <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="fa-solid fa-xmark"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                </div>
                            </li> -->
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="fa-solid fa-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="fa-solid fa-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('be/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('be/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('be/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <!-- <img src="{{asset('be/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image"> -->
                                    <span><?= Cookie::get('username')?></span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="{{route('user.setting')}}"><i class="fa-solid fa-gear"></i>Thay đổi mật khẩu</a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="fa-solid fa-user"></i> Hồ sơ cá nhân
                                        </a>
                                    </li>

                                    <!-- <li class="waves-effect waves-light">
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li> -->
                                    <li class="waves-effect waves-light">
                                        <a class="logout">
                                            <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <!-- <img class="img-80 img-radius" src="{{asset('be/images/avatar-4.jpg')}}" alt="User-Profile-Image"> -->
                                    <div class="user-details">
                                        <span id="more-details">{{Cookie::get('username')}}<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="fa-solid fa-user"></i>Hồ sơ cá nhân</a>
                                            <a href="{{route('user.setting')}}"><i class="fa-solid fa-gear"></i>Thay đổi mật khẩu</a>
                                            <a class="logout"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Tìm kiếm</label>
                                    </div>
                                </form>
                            </div>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Trạng thái</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="#" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa-solid fa-house"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Trang chủ</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa-solid fa-user"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Tài khoản</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="{{route('question.listQuestion')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="fa-solid fa-list"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Khách hàng</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{route('user.listUser')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="fa-regular fa-square-plus"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Quản trị</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa-solid fa-question"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Câu hỏi</span>

                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="{{route('question.listQuestion')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="fa-solid fa-list"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Danh sách câu hỏi</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{route('question.insertQuestionForm')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="fa-regular fa-square-plus"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Thêm câu hỏi</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa-solid fa-voicemail"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Câu trả lời</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class=" ">
                                          <a href="{{route('answer.listAnswer')}}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Danh sách</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                            </ul>

                        </div>
                    </nav>
                    @yield('content');
                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('be/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('be/js/jquery-ui.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('be/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('be/js/bootstrap.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('be/js/excanvas.js')}} "></script>
    <!-- waves js -->
    <script src="{{asset('be/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('be/js/jquery.slimscroll.js')}} "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('be/js/modernizr.js')}} "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{asset('be/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('be/js/jquery.mCustomScrollbar.concat.min.js')}} "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('be/js/Chart.js')}}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{asset('be/js/amchart/gauge.js')}}"></script>
    <script src="{{asset('be/js/amchart/serial.js')}}"></script>
    <script src="{{asset('be/js/amchart/light.js')}}"></script>
    <script src="{{asset('be/js/amchart/pie.min.js')}}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="{{asset('be/js/pcoded.min.js')}}"></script>
    <script src="{{asset('be/js/vertical-layout.min.js')}} "></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{asset('be/js/custom-dashboard.js')}}"></script>
    <script type="text/javascript" src="{{asset('be/js/script.js')}} "></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="{{asset('be/js/main.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.delete-questions').click(function(){
                // console.log('a');
                var html = '<ul class="list-group">'
                var arr = [];
                $('.choose-question:checked').each(function(key,val) {
                    var questionKey = $(this).val(); 
                    var questionText = $('.question-'+$(this).val()).text(); 
                    html += '<li class="list-group-item">'+questionText+'</li>'
                    arr.push({key: questionKey, value: questionText});
                    // arr.push()
                    // console.log(questionKey);
                });
                // console.log(arr);
                html += '</ul>';
                Swal.fire({
                    title: '<p class="f-16">Bạn chắc chắn muốn xóa không?</p>',
                    icon: 'warning',
                    html: html,
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText:
                        '<i class="fa-solid fa-check"></i> Có',
                    confirmButtonAriaLabel: 'Đã xóa thành công!',
                    cancelButtonText:
                        '<i class="fa-solid fa-xmark"></i> Không',
                    cancelButtonAriaLabel: 'Đã hủy bỏ'
                }).then((result) => {
                    // console.log(arr);
                    if(result.isConfirmed){
                        $.ajax({
                            method: "POST",
                            url: '{{route("question.deleteMoreQuestion")}}',
                            data: {
                                arr: arr
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data){
                                // console.log(data);
                                if(data.res == 'success'){
                                    Swal.fire({
                                        title: 'Xóa thành công!',
                                        text: 'Bạn đã xóa thành công.',
                                        icon: 'success',
                                        showCloseButton: true,
                                        showCancelButton: true,
                                        confirmButtonText: 'Xác nhận',
                                    }).then((res) => {
                                        if(result.isConfirmed){
                                            location.reload();
                                        }
                                    });
                                }else{
                                    console.log("Fail");
                                }
                            },
                            error: function(err){
                                console.log(err);
                            }
                        });
                    }
                })
            }) 
            $('.answer-question-choose').click(function(){
                var textAnswer = $('.text-question-choose').val();
                var chooseQuestion = $('.question-choose').text();
                var arrQuestion = '|';
                $('.choose-question:checked').each(function(key,val) {
                    arrQuestion += $('.question-'+$(this).val()).text();
                    arrQuestion += '|';
                });
                // console.log(arrQuestion);
                $.ajax({
                    url: '{{route("answer.answerListQuestion")}}',
                    type: 'POST',
                    data: {
                        answer: textAnswer,
                        question: arrQuestion,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        if(data.res == 'success'){
                            $('.message-answer').html('<span class="text-success mr-2">'+data.status+'</span>');
                        }else if(data.res == 'fail'){
                            $('.message-answer').html('<span class="text-danger mr-2">'+data.status+'</span>');
                        }
                    },
                    error: function(error){
                        console.log(error);
                    }
                })
            });

            $('.edit-answer').click(function(){
                var arrQuestion = '|';
                var answer = $('textarea[name="answer"]').text();
                var id = $(this).data('id');
                $('.option-question:checked').each(function(){
                    arrQuestion += $('.question-'+$(this).val()).text();
                    arrQuestion += '|';
                })
                // console.log(answer);
                $.ajax({
                    url: '{{route("answer.editAnswer")}}',
                    type: 'POST',
                    data: {
                        id: id,
                        answer: answer,
                        question: arrQuestion,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: 'json',
                    success: function(data){
                        // console.log(data);
                        if(data.res == 'success'){
                            $('.notificaton-answer').html('<span class="text-success">'+data.status+'</span>');
                        }else if(data.res == 'fail'){
                            $('.notificaton-answer').html('<span class="text-danger">'+data.status+'</span>');
                        }
                    },
                    error: function(error){
                        console.log(error);
                    }
                })
            })

            $('.logout').click(function(){
                $.ajax({
                    url: "{{route('admin.logout')}}",
                    method: 'GET',
                    dataType: 'json',
                    success: function(data){
                        // console.log(data);
                        if(data.res == 'success'){
                            location.href = "{{route('admin.login')}}"
                        }else{
                            location.href = '/'
                        }
                    }
                });
            });

            $('.create-user').click(function(){
                // var input = $('.input-field');
                var username = $('.input-field[name="username"]').val();
                var fullname = $('.input-field[name="fullname"]').val();
                var email = $('.input-field[name="email"]').val();
                $.ajax({
                    url: "{{route('user.createUser')}}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{
                        fullname: fullname,
                        username: username,
                        email: email,
                    },
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        if(data.res === 'warning'){
                            $('.error-fullname').text(data.result.fullname);
                            $('.error-email').text(data.result.email);
                            $('.error-username').text(data.result.username);
                        }else if(data.res === 'fail'){
                            Swal.fire({
                                title: 'Tạo tài khoản!',
                                text: data.result,
                                icon: 'error',
                                showCloseButton: true,
                                showCancelButton: true,
                                confirmButtonText: 'Xác nhận',
                            })
                        }else if(data.res === 'success'){
                            Swal.fire({
                                title: 'Tạo tài khoản!',
                                text: data.result,
                                icon: 'success',
                                showCloseButton: true,
                                showCancelButton: true,
                                confirmButtonText: 'Xác nhận',
                            }).then((res) => {
                                if(result.isConfirmed){
                                    location.reload();
                                }
                            }); 
                        }
                        // if(data.res == 'success'){
                        //     location.href = "{{route('page.loginForm')}}"
                        // }else{
                        //     location.href = '/'
                        // }
                    }
                })
            })
        });
    </script>
</body>

</html>
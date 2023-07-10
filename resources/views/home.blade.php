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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fe/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="mode" data-id="{{$oneCustomer->id_customer}}">
    <nav class="navbar navbar-light d-flex justify-content-between" style="background-color: #448aff;">
        <a class="navbar-brand" href="{{route('page.home')}}">
            <img class="img-fluid w-75 ml-5" src="{{asset('be/images/banner_utt.png')}}" alt=" Theme-Logo" />
        </a>
        <a class="navbar-brand d-flex align-items-center" href="{{route('customer.profile',['id' => $oneCustomer->id_customer])}}">
            <img class="avatar avatar-xs" src="{{$oneCustomer->image_customer}}" alt="..."><span class="ml-2 fs-14 text-white">{{$oneCustomer->name_customer}}</span>
        </a>
    </nav>
    @yield('content')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('fe/js/main.js')}}"></script>
<script>
    $(document).ready(function() {
        //pc
        $('.room-chat-items').each(function(k, v) {
            $('.items-' + $(v).data('room')).click(function() {
                $('.room-chat').removeClass('d-lg-none d-ssm-none d-block')
                var codeRoom = $(v).data('room');
                $.ajax({
                    url: "{{route('history.historyMessageRoom')}}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        codeRoom: codeRoom
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.res == 'success') {
                            var html = "";
                            html += listHistoryMessage(data.result, data.imageCustomer, '{{asset("fe/image/icons8-bot-30.png")}}', codeRoom);
                            // console.log($('.list').children().last().scrollIntoView());
                            // // $('.list').children().last().scrollIntoView();
                            $('.room-chat').html(html);
                            $('.room-chat').removeClass('d-none');
                            $('.room-chat').attr('data-code', codeRoom);
                        }
                        $('.record-btn-' + codeRoom).click(function() {
                            // recognition.start();
                            // // voiceChat();
                            // recognition.onresult = function(event) {
                            //     // Lấy kết quả nhận dạng giọng nói
                            //     var result = event.results[event.results.length - 1][0].transcript;
                            //     // In kết quả vào input
                            //     console.log(result);
                            //     $(".question").val(result);
                            // }
                            // console.log('a2');
                            if ('webkitSpeechRecognition' in window) {
                                console.log('Web Speech Recognition is supported');

                                // Khởi tạo đối tượng Web Speech Recognition
                                var recognition = new webkitSpeechRecognition();

                                // Cấu hình các thiết lập của đối tượng recognition
                                recognition.continuous = true; // Tiếp tục nhận diện liên tục
                                recognition.interimResults = true; // Kết quả tạm thời

                                // Sự kiện khi nhận diện âm thanh thành công
                                recognition.onresult = function(event) {
                                    var interimTranscripts = '';
                                    var finalTranscripts = '';

                                    // Lặp qua các kết quả nhận diện
                                    for (var i = event.resultIndex; i < event.results.length; i++) {
                                        var transcript = event.results[i][0].transcript;

                                        // Nếu kết quả là kết quả tạm thời
                                        if (event.results[i].isFinal) {
                                            finalTranscripts += transcript;
                                        } else {
                                            interimTranscripts += transcript;
                                        }
                                    }

                                    // Hiển thị kết quả tạm thời và kết quả cuối cùng
                                    console.log('Interim Transcripts: ' + interimTranscripts);
                                    console.log('Final Transcripts: ' + finalTranscripts);
                                };

                                // Sự kiện khi xảy ra lỗi
                                recognition.onerror = function(event) {
                                    console.error('Speech recognition error: ' + event.error);
                                };

                                // Bắt đầu nhận diện giọng nói
                                recognition.start();
                            } else {
                                console.log('Web Speech Recognition is not supported');
                            }
                        })
                        $('.question').keyup(function() {
                            autoWrite();
                        });
                        $('.chat').click(function() {
                            var url = "{{route('answer.botAnswer')}}";
                            var image = '{{asset("fe/image/icons8-bot-30.png")}}'
                            var question = $('.question').val();
                            chatBot(question, url, image);
                        });
                    }
                })
                // console.log($(v).data('room'));
            });
            $('.items-' + $(v).data('room') + '-mb').click(function() {
                var codeRoom = $(this).data('room-mb');
                // console.log(codeRoom);
                $('.setting').addClass('d-ssm-none d-lg-block d-md-block');
                $('.room-chat-mb').addClass('d-block');
                $('.room-chat').addClass('d-block');
                $('.question-mb').keyup(function() {
                    autoWriteMoblie();
                    $('.question').val($(this).val());
                    // console.log(1);
                });
                // $.ajax({
                //     url: "{{route('history.historyMessageRoom')}}",
                //     method: "GET",
                //     dataType: 'json',
                //     data: {
                //         codeRoom: codeRoom
                //     },
                //     success: function(data){
                //         console.log(data);
                //         if(data.res == 'success'){
                //             var html = "";
                //             html += listHistoryMessage(data.result,data.imageCustomer,'{{asset("fe/image/icons8-bot-30.png")}}',codeRoom);
                //             $('.room-chat').html(html);
                //             $('.room-chat').removeClass('d-none');
                //             $('.room-chat').attr('data-code',codeRoom);
                //         }
                //         $('.record-btn-'+codeRoom).click(function(){
                //             recognition.start();
                //             voiceChat();
                //             console.log('a2');
                //         })
                //         $('.chat').click(function() {
                //             var url = "{{route('answer.botAnswer')}}";
                //             var image = '{{asset("fe/image/icons8-bot-30.png")}}'
                //             var question = $('.question').val();
                //             chatBot(question,url,image);
                //         });
                //     }
                // })
                // console.log($(v).data('room'));
            });
            $('.items-' + $(v).data('room')).dblclick(function() {
                $('.room-chat').addClass('d-lg-none d-ssm-none')
            })
            // console.log($(this).data('room')[v]); 
        });
        //dang xuat
        $('.logout').click(function() {
            $.ajax({
                url: "{{route('page.logout')}}",
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    if (data.res == 'success') {
                        location.href = "{{route('page.loginForm')}}"
                    } else {
                        location.href = '/'
                    }
                }
            });
        });
        //tao phong
        $('.open-room').click(function() {
            $.ajax({
                url: "{{route('room.createRoom')}}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    userId: $('body').data('id')
                },
                success: function(data) {
                    if (data.res == 'success') {
                        $('.room-chat').addClass('d-block');
                        $('.room-chat').attr('data-code', data.code_room);
                        var html = '';
                        if (data.name_room == '') {
                            html += '<div class="fs-12 pl-3 text-secondary">Hôm nay</div>'
                            html += '<div class="d-flex w-100 border-0 border-secondary room-chat-items items-' + data.code_room + ' mt-2 align-items-center pl-4" data-room="' + data.code_room + '" style="background-color: transparent;">'
                            html += '<i class="fa-regular fa-message text-secondary fs-20"></i>'
                            html += '<span class="text-secondary ml-3 pb-1 fs-16 text-room-' + data.code_room + '">Phòng mới</span>'
                            html += '</div>'
                            $('.history-chat').prepend(html);
                        }
                        $('.items-' + data.code_room).click(function() {
                            // var codeRoom = $(this).data('room');
                            $.ajax({
                                url: "{{route('history.historyMessageRoom')}}",
                                method: "GET",
                                dataType: 'json',
                                data: {
                                    codeRoom: data.code_room
                                },
                                success: function(data) {
                                    console.log(data);
                                    if (data.res == 'success') {
                                        var html = "";
                                        html += listHistoryMessage(data.result, data.imageCustomer, '{{asset("fe/image/icons8-bot-30.png")}}', data.code_room);
                                        console.log('a');
                                        $('.list-message').scrollTop = $('.list-message').scrollHeight;
                                        $('.room-chat').html(html);
                                        $('.room-chat').removeClass('d-none');
                                        $('.room-chat').attr('data-code', data.code_room);
                                    }
                                    $('.record-btn-' + data.code_room).click(function() {
                                        recognition.start();
                                        voiceChat();
                                        console.log('a1');
                                    })
                                    $('.question').keyup(function() {
                                        autoWrite();
                                    });
                                    $('.chat').click(function() {
                                        var url = "{{route('answer.botAnswer')}}";
                                        var image = '{{asset("fe/image/icons8-bot-30.png")}}'
                                        var question = $('.question').val();
                                        chatBot(question, url, image);
                                    });
                                }
                            })
                        });
                        $('.items-' + data.code_room + '-mb').click(function() {
                            // var codeRoom = $(this).data('room');
                            $.ajax({
                                url: "{{route('history.historyMessageRoom')}}",
                                method: "GET",
                                dataType: 'json',
                                data: {
                                    codeRoom: data.code_room
                                },
                                success: function(data) {
                                    console.log(data);
                                    if (data.res == 'success') {
                                        var html = "";
                                        html += listHistoryMessage(data.result, data.imageCustomer, '{{asset("fe/image/icons8-bot-30.png")}}', data.code_room);
                                        console.log('a');
                                        $('.list-message').scrollTop = $('.list-message').scrollHeight;
                                        $('.room-chat').html(html);
                                        $('.room-chat').removeClass('d-none');
                                        $('.room-chat').attr('data-code', data.code_room);
                                    }
                                    $('.record-btn-' + data.code_room).click(function() {
                                        recognition.start();
                                        voiceChat();
                                        console.log('a1');
                                    })
                                    $('.setting').addClass('d-ssm-none d-lg-block d-md-block');
                                    $('.room-chat-mb').addClass('d-block');
                                    $('.room-chat').addClass('d-block');
                                    $('.question-mb').keyup(function() {
                                        autoWriteMoblie();
                                        $('.question').val($(this).val());
                                        // console.log(1);
                                    });
                                    $('.chat').click(function() {
                                        var url = "{{route('answer.botAnswer')}}";
                                        var image = '{{asset("fe/image/icons8-bot-30.png")}}'
                                        var question = $('.question').val();
                                        chatBot(question, url, image);
                                    });
                                }
                            })
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $('.chat').click(function() {
            // console.log('a');
            var question = $('.question').val();
            var url = "{{route('answer.botAnswer')}}";
            var image = '{{asset("fe/image/icons8-bot-30.png")}}'
            chatBot(question, url, image);
            // console.log(printText("Hello, world!", 0));

        });

        $('.update-password').click(function(){
            const password = $('#passwordInput').val();
            const rePassword = $('#rePasswordInput').val();
            const id = '{{$oneCustomer->id_customer}}';
            $.ajax({
                url: '{{route("page.changePasswordCustomer")}}',
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    password: password,
                    rePassword: rePassword,
                    id: id
                },
                success: function(data){
                    // console.log(data);
                    if(data.res == 'success'){
                        alert('Thay đổi thành công');
                    }
                },
                error: function(err){
                    console.log(err);
                }
            })
        })

        $('.change-profile').click(function(){
        const id = '{{$oneCustomer->id_customer}}';
            if($('.upgrade-profile').hasClass('d-none')){
                $('.upgrade-profile').removeClass('d-none');
                $('.change-password').addClass('d-none');
                $('.profile').addClass('d-none');
            }
            $('.title').text('Thay đổi thông tin cá nhân')

            $.ajax({
                url: '{{route("customer.getProfile")}}',
                method: 'GET',
                data: {
                    id: id
                },
                success: function(data){
                    console.log(data);
                    var dateTimeString = data.result.birthday_customer;
                    var dateOnly = dateTimeString.split(' ')[0];
                    $('.fullname').val(data.result.name_customer);
                    $('.birthday').val(dateOnly);
                    $('.email').val(data.result.email_customer);
                    $('.phone').val(data.result.phone_customer);
                },
                error: function(err){
                    console.log(err);
                }
            })
        })

        $('.update-profile').click(function(){
            $.ajax({
                url: '{{route("customer.updateProfile")}}',
                method: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    fullname: $('.fullname').val(),
                    birthday: $('.birthday').val(),
                    email: $('.email').val(),
                    phone: $('.phone').val(),
                    gentle: $('.gentle').val(),
                    id : '{{$oneCustomer->id_customer}}'

                },
                success: function(data){
                    console.log(data);
                    if(data.res == 'success'){
                        alert('Thay đổi thông tin thành công');
                        location.reload();
                    }
                    // var dateTimeString = data.result.birthday_customer;
                    // var dateOnly = dateTimeString.split(' ')[0];
                    // $('.fullname').val(data.result.name_customer);
                    // $('.birthday').val(dateOnly);
                    // $('.email').val(data.result.email_customer);
                    // $('.phone').val(data.result.phone_customer);
                },
                error: function(err){
                    console.log(err);
                }
            })
        });

        //mb
    });
</script>

</html>
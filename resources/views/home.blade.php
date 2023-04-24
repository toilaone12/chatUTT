<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('be/images/utt.png')}}" type="image/x-icon">
    <title>ChatBot</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fe/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="mode" data-id="{{$oneCustomer[0]->id_customer}}">
    <div class="widget">
        <div class="left-panel panel ">
            <div class="date-chat">
            </div>
            <div class="city-chat">
            </div>
            <div class="temp">
                <img src="" class="icon-weather" alt="" width="60">
                27&deg;
            </div>
        </div>

    </div>
    <section class="gradient-custom mode mt-5 pt-5" >
        <div class="container py-5 mt-5 h-100">
            <div class="row f-100" style="margin-top: 100px;">
                <div class="col-md-4 col-lg-4 col-xl-4 mb-4 mb-md-0 bg-light rounded setting">
                    <h5 class="font-weight-bold mb-3 mt-4 text-dark">Cài đặt</h5>
                    <div class="card p-3">
                        <span class="text-secondary fs-18 ml-1 font-weight-bold mb-3">Các chế độ người dùng</span>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="toggle" class="toggle--checkbox">
                            <label for="toggle" class="toggle--label">
                            </label>
                            <span class="text-secondary fs-16 font-weight-bold mb-2 ml-2">Chọn chế độ ánh sáng</span>
                        </div>
                        <div class="">
                            <span class="text-secondary fs-16 font-weight-bold mb-4 mt-2 d-flex align-items-center open-room">
                                <i class="ml-3 mr-2 fa-solid fa-square-plus fs-20" style="font-size: 30px;"></i>
                                Tạo cuộc trò chuyện mới
                            </span>
                        </div>
                    </div>
                    <div class="history-chat mt-3">
                        @foreach($allRoomByUser as $key => $roomId)
                        <div class="d-flex w-100 h-100 border-0 room-chat-items mt-3 align-items-center pl-2" data-room="{{$roomId->code_history}}" style="background-color: transparent;">
                            <i class="fa-solid fa-message text-secondary fs-20"></i>
                            <span class="text-secondary ml-2 fs-16">{{$roomId->name_room == '' ? 'Phòng mới' : $roomId->name_room}}</span>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="card">
                    </div> -->
                </div>
                <div class="col-md-8 col-lg-8 col-xl-8 d-none room-chat" data-code="">
                    <div class="card card-bordered">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <h5 class="text-dark">Nhắn tin với ChatBot</h5>
                            </div>
                        </div>
                        <div class="ps-container ps-theme-default ps-active-y list-message" id="chat-content" style="overflow-y: scroll !important; height:500px !important;">
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                                </div>
                            </div>
                            <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                                <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;">
                                </div>
                            </div>
                        </div>

                        <div class="publisher bt-1 border-light">
                            <img class="avatar avatar-xs" src="{{$oneCustomer[0]->image_customer}}" alt="...">
                            <input class="publisher-input form-control question" type="text" placeholder="">
                            <span class="publisher-btn voice-btn">
                                <i class="fa-solid fa-microphone fs-22"></i>
                            </span>
                            <!-- <a class="publisher-btn" href="#" data-abc="true"><i
                                    class="fa fa-smile"></i></a>  -->
                            <a class="publisher-btn text-info icon chat" href="#" data-abc="true">
                                <i class="fa-solid fa-thumbs-up fs-22"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function weatherDay() {
        var apiKey = '69f59d0621e668fb571e5dda73e6ab46';
        var url = 'https://api.openweathermap.org/data/2.5/weather?lang=vi&lat=' + localStorage.getItem('lat') + '&lon=' + localStorage.getItem('lng') + '&appid=' + apiKey;
        $.getJSON(url, function(data) {
            var weather = data.weather[0].main;
            var date = new Date();
            var dayOfWeek = ['Chủ nhật','Thứ hai','Thứ ba','Thứ tư','Thứ năm','Thứ sáu','Thứ bảy'];
            var day = dayOfWeek[date.getDay()];
            var days = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            var hours = date.getHours();
            if(hours < 10){
                hours = '0'+hours;
            }
            var minutes = date.getMinutes();
            if(minutes < 10){
                minutes = '0'+minutes;
            }
            var dateTime = day+', '+days+'/'+month+'/'+year+' '+hours+':'+minutes;
            $('.city-chat').text(data.name);
            $('.date-chat').text(dateTime);
            $('.icon-weather').attr('src','http://openweathermap.org/img/w/' + data.weather[0].icon + '.png')
        });
    }

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
            console.log("Trình duyệt này không hỗ trợ định vị!");
        }
        weatherDay();
        $('.open-room').click(function() {
            $.ajax({
                url: "{{route('room.createRoom')}}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    userId: $('body').data('id')
                },
                success: function(data){
                    if(data.res == 'success'){
                        $('.room-chat').addClass('d-block');
                        $('.room-chat').attr('data-code',data.code_room);
                        var html = '';
                        if(data.name_room == ''){
                            html += '<div class="d-flex w-100 h-100 border-0 room-chat-items-'+data.code_room+' mt-3 align-items-center pl-2" style="background-color: transparent;">'
                            html += '<i class="fa-solid fa-plus text-secondary fs-20"></i>'
                            html += '<span class="text-secondary ml-2 fs-16">Phòng mới</span>'
                            html += '</div>'
                            $('.history-chat').append(html);
                        }
                    }
                },
                error: function(error){
                    console.log(error);
                }
            });
        });
        var recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;

        $('.voice-btn').click(function() {
            recognition.start();
        });

        recognition.onresult = function(event) {
            // Lấy kết quả nhận dạng giọng nói
            var result = event.results[event.results.length - 1][0].transcript;
            // In kết quả vào input
            $(".question").val(result);
        }

        $('.question').keyup(function() {
            var question = $('.question').val();
            // console.log(question);
            if (question !== '') {
                $('.icon').html('<i class="fas fa-paper-plane fs-22"></i>');
            } else {
                $('.icon').html('<i class="fa-solid fa-thumbs-up fs-22"></i>');
            }
        });

        $('.toggle--checkbox').change(function(e) {
            // console.log(1);
            e.preventDefault();
            if ($('section').hasClass('bg-dark')) {
                $('.mode').addClass('bg-cyan');
                $('.mode').removeClass('bg-dark');
            } else {
                $('.mode').addClass('bg-dark');
                $('.mode').removeClass('bg-cyan');
            }
        });
        $('.chat').click(function() {
            // console.log('a');
            var rand = Math.floor(Math.random() * 100) + 1;
            // console.log(rand);
            function printText(text, index) {
                if (index < text.length) {
                    setTimeout(function() {
                        printText(text, index + 1);
                    }, 50);
                    $('.media-answer-' + rand).append(text[index]);
                }
                return '';
            }
            var question = $('.question').val();
            var date = new Date();
            var minutes = 0;
            var delay = 3000;
            var index = 0;
            if (date.getMinutes() < 10) {
                var minutes = '0' + date.getMinutes();
            } else {
                var minutes = date.getMinutes();
            }
            var str = 'Cảm ơn bạn vì đã thích câu nói vừa rồi!';
            var time = date.getHours() + ":" + minutes;
            var html = '';
            if ($('.chat > i').hasClass('fa-thumbs-up')) {
                html = '<div class="media media-chat media-chat-reverse">' +
                    '<div class="media-body">' +
                    '<p class="mb-0">' +
                    '<i class="fa-solid fa-thumbs-up fs-22"></i>' +
                    '</p>' +
                    '<p class="mr-1 text-dark small mb-0 pr-0 d-flex justify-content-end meta">' + time + '</p>' +
                    '</div>' +
                    '</div>';
            } else {
                html = '<div class="media media-chat media-chat-reverse">' +
                    '<div class="media-body">' +
                    '<p class="mb-0">' +
                    question +
                    '</p>' +
                    '<p class="mr-1 text-dark small mb-0 pr-0 d-flex justify-content-end meta">' + time + '</p>' +
                    '</div>' +
                    '</div>';
                $('.question').val('');
                $('.icon').html('<i class="fa-solid fa-thumbs-up fs-22"></i>');
            }
            $('.list-message').append(html);
            setTimeout(function() {
                $('.list-message').append(
                    '<div class="lds-ellipsis border ml-4 mt-4"><div></div><div></div><div></div></div></br>'
                )
            }, 1000);
            // console.log(question);
            $.ajax({
                url: "{{route('answer.botAnswer')}}",
                method: 'POST',
                data: {
                    question: question,
                    userId: $('body').data('id'),
                    codeRoom: $('.room-chat').data('code')
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    // console.log(data.result.time_request);
                    if (data.res == 'fail') {
                        setTimeout(function() {
                            $('.list-message').append(
                                '<div class="media media-chat">' +
                                '<img class="avatar" src="{{asset("fe/image/icons8-bot-30.png")}}" alt="...">' +
                                '<div class="media-body hold">' +
                                '<p class="mb-0 mr-10 media-answer-' + rand + '">' +
                                printText(data.status, -1) +
                                '</p>' +
                                '<p class="mr-1 ml-2 text-dark small pr-0 mb-0 meta">' + time + '</p>' +
                                '</div>' +
                                '</div>',
                                $('.lds-ellipsis').hide())
                        }, delay);
                    } else {
                        setTimeout(function() {
                            $('.list-message').append(
                                '<div class="media media-chat">' +
                                '<img class="avatar" src="{{asset("fe/image/icons8-bot-30.png")}}" alt="...">' +
                                '<div class="media-body hold">' +
                                '<p class="mb-0 px-3 mr-10 media-answer-' + rand + '">' +
                                printText(data.result.answer, -1) +
                                '</p>' +
                                '<p class="mr-1 ml-2 text-dark small pr-0 mb-0 meta">' + time + '</p>' +
                                '</div>' +
                                '</div>',
                                $('.lds-ellipsis').hide()
                            )
                            // if($('.room-chat-items').attr('data-room') == data.code_room){
                            if(data.noti == true){
                                $('.room-chat-items-'.data.code_room).text(printText(question));
                            }
                            // }
                        }, data.result.time_request * 100);
                    }
                }
            })
            // console.log(printText("Hello, world!", 0));

        });
    });
</script>

</html>
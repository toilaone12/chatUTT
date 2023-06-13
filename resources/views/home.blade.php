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
    <div class="d-lg-block d-md-block d-sm-none d-ssm-none">
        <div class="widget">
            <div class="left-panel panel ">
                <div class="date-chat">
                </div>
                <div class="city-chat">
                </div>
                <div class="temp degree-weather">
                </div>
            </div>
        </div>
        <section class="gradient-custom mode mt-5 pt-5">
            <div class="container py-5 mt-5 h-100">
                <div class="row f-100" style="margin-top: 100px;">
                    <div class="col-md-4 col-lg-4 col-xl-4 mb-4 mb-md-0 bg-light rounded setting"  style="height:630px">
                        <h5 class="font-weight-bold mb-3 mt-4 text-dark">Cài đặt</h5>
                        <div class="card p-3">
                            <span class="text-secondary fs-18 ml-1 font-weight-bold mb-3">Chế độ người dùng</span>
                            <div class="d-flex align-items-center" style="cursor:pointer">
                                <input type="checkbox" id="toggle" class="toggle--checkbox">
                                <label for="toggle" class="toggle--label">
                                </label>
                                <span class="text-secondary fs-16 font-weight-bold mb-2 ml-2">Chọn chế độ ánh sáng</span>
                            </div>
                            <div class="">
                                <span class="text-secondary fs-16 font-weight-bold mb-2 mt-2 d-flex align-items-center open-room" style="cursor:pointer">
                                    <i class="ml-3 mr-2 fa-solid fa-circle-plus fs-20" style="color: #96dcee; font-size: 30px;"></i>
                                    Tạo cuộc trò chuyện mới
                                </span>
                            </div>
                            <div class="">
                                <span class="text-secondary fs-16 font-weight-bold mb-4 mt-2 d-flex align-items-center logout" style="cursor:pointer">
                                    <i class="ml-3 mr-2 fa-solid fa-right-from-bracket fs-20" style="color: #96dcee; font-size: 30px;"></i>
                                    Đăng xuất
                                </span>
                            </div>
                        </div>
                        <div class="history-chat mt-3 overflow-auto" style="height:300px">
                            @foreach($arrRoom as $key => $room)
                            <div class="fs-12 pl-3 text-secondary">{{$room['name_date']}}</div>
                            <div class="d-flex w-100 border-0 border-secondary room-chat-items items-{{$room['code_history']}} mt-2 align-items-center pl-4" data-room="{{$room['code_history']}}" style="background-color: transparent;">
                                <i class="fa-regular fa-message text-secondary fs-20"></i>
                                <span class="text-secondary ml-3 pb-1 fs-16 text-room-{{$room['code_history']}}">{{$room['name_room'] == '' ? 'Phòng mới' : $room['name_room']}}</span>
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
                                <span class="publisher-btn record-btn">
                                    <i class="fa-solid fa-microphone fs-22 "></i>
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
    </div>
    <div class="d-ssm-block d-lg-none d-md-none">
        <div class="widget">
            <div class="left-panel panel ">
                <div class="date-chat">
                </div>
                <div class="city-chat">
                </div>
                <div class="temp degree-weather">
                </div>
            </div>
        </div>
        <section class="gradient-custom mode mt-5 pt-5">
            <div class="container py-5 mt-5 h-100">
                <div class="row f-100" style="margin-top: 100px;">
                    <div class="col-md-12 col-lg-4 col-xl-4 mb-4 mb-md-0 bg-light rounded setting"  style="height:630px">
                        <h5 class="font-weight-bold mb-3 mt-4 text-dark">Cài đặt</h5>
                        <div class="card p-3">
                            <span class="text-secondary fs-18 ml-1 font-weight-bold mb-3">Chế độ người dùng</span>
                            <div class="d-flex align-items-center" style="cursor:pointer">
                                <input type="checkbox" id="toggle" class="toggle--checkbox">
                                <label for="toggle" class="toggle--label">
                                </label>
                                <span class="text-secondary fs-16 font-weight-bold mb-2 ml-2">Chọn chế độ ánh sáng</span>
                            </div>
                            <div class="">
                                <span class="text-secondary fs-16 font-weight-bold mb-2 mt-2 d-flex align-items-center open-room" style="cursor:pointer">
                                    <i class="ml-3 mr-2 fa-solid fa-circle-plus fs-20" style="color: #96dcee; font-size: 30px;"></i>
                                    Tạo cuộc trò chuyện mới
                                </span>
                            </div>
                            <div class="">
                                <span class="text-secondary fs-16 font-weight-bold mb-4 mt-2 d-flex align-items-center logout" style="cursor:pointer">
                                    <i class="ml-3 mr-2 fa-solid fa-right-from-bracket fs-20" style="color: #96dcee; font-size: 30px;"></i>
                                    Đăng xuất
                                </span>
                            </div>
                        </div>
                        <div class="history-chat mt-3 overflow-auto" style="height:300px">
                            @foreach($arrRoom as $key => $room)
                            <div class="fs-12 pl-3 text-secondary">{{$room['name_date']}}</div>
                            <div class="d-flex w-100 border-0 border-secondary hide-setting-mb room-chat-items items-{{$room['code_history']}}-mb mt-2 align-items-center pl-4" data-room-mb="{{$room['code_history']}}" style="background-color: transparent;">
                                <i class="fa-regular fa-message text-secondary fs-20"></i>
                                <span class="text-secondary ml-3 pb-1 fs-16 text-room-{{$room['code_history']}}">{{$room['name_room'] == '' ? 'Phòng mới' : $room['name_room']}}</span>
                            </div>
                            @endforeach
                        </div>
                        <!-- <div class="card">
                        </div> -->
                    </div>
                    <div class="w-100 d-none room-chat-mb" data-code="">
                        <div class="card card-bordered">
                            <div class="px-3 py-2 border-bottom bg-light justify-content-start align-items-center d-flex">
                                {{-- <div class="d-flex justify-content-between align-items-center mt-2"> --}}
                                    <i class="fa-solid fa-chevron-left fs-22 mr-3 back-to-setting-mb" style="color: var(--blue-background)"></i>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <img class="avatar avatar-xs mr-2" src="{{asset("fe/image/icons8-bot-30.png")}}" alt="...">
                                        <span class="fs-16 font-weight-bold">Chatbot</span>
                                    </div>
                                    {{-- <h5 class="text-dark">Nhắn tin với ChatBot</h5> --}}
                                {{-- </div> --}}
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
                                <span class="publisher-btn record-btn">
                                    <i class="fa-solid fa-microphone fs-22 "></i>
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
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('fe/js/main.js')}}"></script>
<script>
    $(document).ready(function() {      
        //pc
        $('.room-chat-items').each(function(k,v){
            $('.items-'+$(v).data('room')).click(function(){
                var codeRoom = $(v).data('room');
                $.ajax({
                    url: "{{route('history.historyMessageRoom')}}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        codeRoom: codeRoom
                    },
                    success: function(data){
                        console.log(data);
                        if(data.res == 'success'){
                            var html = "";
                            html += listHistoryMessage(data.result,data.imageCustomer,'{{asset("fe/image/icons8-bot-30.png")}}',codeRoom);
                            $('.room-chat').html(html);
                            $('.room-chat').removeClass('d-none');
                            $('.room-chat').attr('data-code',codeRoom);
                        }
                        $('.record-btn-'+codeRoom).click(function(){
                            recognition.start();
                            voiceChat();
                            console.log('a2');
                        })
                        $('.question').keyup(function() {
                            autoWrite();
                        });
                        $('.chat').click(function() {
                            var url = "{{route('answer.botAnswer')}}";
                            var image = '{{asset("fe/image/icons8-bot-30.png")}}'
                            var question = $('.question').val();
                            chatBot(question,url,image);
                        });
                    }
                })
                // console.log($(v).data('room'));
            });
            $('.items-'+$(v).data('room')+'-mb').click(function(){
                var codeRoom = $(this).data('room-mb');
                // console.log(codeRoom);
                $('.setting').addClass('d-none');
                $('.room-chat-mb').addClass('d-block');
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
                //         $('.question').keyup(function() {
                //             autoWrite();
                //         });
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
            // console.log($(this).data('room')[v]); 
        });
        //dang xuat
        $('.logout').click(function(){
            $.ajax({
                url: "{{route('page.logout')}}",
                method: 'GET',
                dataType: 'json',
                success: function(data){
                    // console.log(data);
                    if(data.res == 'success'){
                        location.href = "{{route('page.loginForm')}}"
                    }else{
                        location.href = '/'
                    }
                }
            });
        });
        //mo phong
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
                            html += '<div class="fs-12 pl-3 text-secondary">Hôm nay</div>'
                            html += '<div class="d-flex w-100 border-0 border-secondary room-chat-items items-'+data.code_room+' mt-2 align-items-center pl-4" data-room="'+data.code_room+'" style="background-color: transparent;">'
                            html += '<i class="fa-regular fa-message text-secondary fs-20"></i>'
                            html += '<span class="text-secondary ml-3 pb-1 fs-16 text-room-'+data.code_room+'">Phòng mới</span>'
                            html += '</div>'
                            $('.history-chat').prepend(html);
                        }
                        $('.items-'+data.code_room).click(function(){
                            // var codeRoom = $(this).data('room');
                            $.ajax({
                                url: "{{route('history.historyMessageRoom')}}",
                                method: "GET",
                                dataType: 'json',
                                data: {
                                    codeRoom: data.code_room
                                },
                                success: function(data){
                                    console.log(data);
                                    if(data.res == 'success'){
                                        var html = "";
                                        html += listHistoryMessage(data.result,data.imageCustomer,'{{asset("fe/image/icons8-bot-30.png")}}',data.code_room);
                                        $('.room-chat').html(html);
                                        $('.room-chat').removeClass('d-none');
                                        $('.room-chat').attr('data-code',data.code_room);
                                    }
                                    $('.record-btn-'+data.code_room).click(function(){
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
                                        chatBot(question,url,image);
                                    });
                                }
                            })
                        });
                    }
                },
                error: function(error){
                    console.log(error);
                }
            });
        });

        $('.chat').click(function() {
            // console.log('a');
            var question = $('.question').val();
            var url = "{{route('answer.botAnswer')}}";
            var image = '{{asset("fe/image/icons8-bot-30.png")}}'
            chatBot(question,url,image);
            // console.log(printText("Hello, world!", 0));

        });

        //mb
    });
</script>

</html>
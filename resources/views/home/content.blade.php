@extends('home')
@section('content')
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
        <div class="container py-5 h-100 pt-5" style="margin-top: 5rem;">
            <div class="row f-100" style="margin-top: 100px;">
                <div class="col-md-4 col-lg-4 col-xl-4 mb-4 mb-md-0 bg-light rounded setting" style="height:765px">
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
                    <div class="history-chat mt-3 overflow-auto" style="height:440px">
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
                        <div class="ps-container ps-theme-default ps-active-y list-message" id="chat-content" style="overflow-y: scroll !important; height:635px !important;">
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
                            <img class="avatar avatar-xs" src="{{$oneCustomer->image_customer}}" alt="...">
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
        <div class="container py-5 h-100" style="margin-top: 9rem;">
            <div class="row f-100" style="margin-top: 100px;">
                <div class="col-md-12 col-lg-4 col-xl-4 mb-4 mb-md-0 bg-light rounded setting" style="height:765px">
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
                        <div class="ps-container ps-theme-default ps-active-y list-message" id="chat-content" style="overflow-y: scroll !important; height:635px !important;">
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
                            <img class="avatar avatar-xs" src="{{$oneCustomer->image_customer}}" alt="...">
                            <input class="publisher-input form-control question-mb" type="text" placeholder="">
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
@endsection
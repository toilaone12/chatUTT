var recognition = new webkitSpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;

function weatherDay() {
    var apiKey = '69f59d0621e668fb571e5dda73e6ab46';
    var url = 'https://api.openweathermap.org/data/2.5/weather?lang=vi&lat=' + localStorage.getItem('lat') + '&lon=' + localStorage.getItem('lng') + '&appid=' + apiKey;
    $.getJSON(url, function(data) {
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
        if(month < 10){
            month = '0'+month;
        }
        if(days < 10){
            days = '0'+days;
        }
        var dateTime = day+', '+days+'/'+month+'/'+year+' '+hours+':'+minutes;
        var degree = Math.round(data.main.temp - 273.15);
        // console.log(data.main.temp - 273.15);
        $('.city-chat').text(data.name);
        $('.date-chat').text(dateTime);
        // console.log(url);
        var html = '';
        html += '<img src="http://openweathermap.org/img/w/' + data.weather[0].icon + '.png" class="icon-weather" alt="" width="60">';
        html += degree+'&deg;'
        $('.degree-weather').html(html);
    });
}

function voiceChat(){
    recognition.onresult = function(event) {
        // Lấy kết quả nhận dạng giọng nói
        var result = event.results[event.results.length - 1][0].transcript;
        // In kết quả vào input
        console.log(event);
        $(".question").val(result);
    }
    console.log('a3');
}

function autoWrite(){
    var question = $('.question').val();
    // console.log($('.question'));
    if (question !== '') {
        $('.icon').html('<i class="fas fa-paper-plane fs-22"></i>');
    } else {
        $('.icon').html('<i class="fa-solid fa-thumbs-up fs-22"></i>');
    }
}

function autoWriteMoblie(){
    var question = $('.question-mb').val();
    // console.log($('.question-mb').length);
    if (question !== '') {
        $('.icon').html('<i class="fas fa-paper-plane fs-22"></i>');
    } else {
        $('.icon').html('<i class="fa-solid fa-thumbs-up fs-22"></i>');
    }
}

function printText(text, index, rand) {
    if (index < text.length) {
        setTimeout(function() {
            printText(text, index + 1, rand);
        }, 33);
        $('.media-answer-' + rand).append(text[index]);
    }
    return '';
}

function printTextRoom(text, index, code) {
    if (index < text.length) {
        var textRoom = $('.text-room-'+code);
        setTimeout(function() {
            printTextRoom(text, index + 1, code);
        }, 500);
        textRoom.append(text[index]);
        // console.log('.items-'+code);
        // console.log(text[index]);
        // console.log(text.length);
        // console.log(text[index]);
        // $('.media-answer-' + rand).append(text[index]);
    }
    return '';
}

function chatBot(question,url,image){
    var rand = Math.floor(Math.random() * 100) + 1;
    var date = new Date();
    var minutes = 0;
    var delay = 2000;
    // var index = 0;
    // console.log(rand);
    if (date.getMinutes() < 10) {
        var minutes = '0' + date.getMinutes();
    } else {
        var minutes = date.getMinutes();
    }
    // var str = 'Cảm ơn bạn vì đã thích câu nói vừa rồi!';
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
    }, 100);
    // console.log(question);
    $.ajax({
        url: url,
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
            console.log(data);
            if (data.res == 'fail') {
                setTimeout(function() {
                    $('.list-message').append(
                        '<div class="media media-chat">' +
                        '<img class="avatar" src="'+image+'" alt="...">' +
                        '<div class="media-body hold">' +
                        '<p class="mb-0 mr-lg-8 mr-ssm-5 media-answer-' + rand + '">' +
                        printText(data.status, -1, rand) +
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
                        '<img class="avatar" src="'+image+'" alt="...">' +
                        '<div class="media-body hold">' +
                        '<p class="mb-0 px-3 mr-lg-8 mr-ssm-5 media-answer-' + rand + '">' +
                        printText(data.result.answer, -1, rand) +
                        '</p>' +
                        '<p class="mr-1 ml-2 text-dark small pr-0 mb-0 meta">' + time + '</p>' +
                        '</div>' +
                        '</div>',
                        $('.lds-ellipsis').hide()
                    )
                    // if($('.room-chat-items').attr('data-room') == data.code_room){
                        // }
                }, data.result.time_request * 100);
                if(data.result.noti == true){
                    // console.log(question)
                    var textRoom = $('.text-room-'+data.result.code_room);
                    if(textRoom.text()){
                        textRoom.text('');
                    }
                    printTextRoom(question,0,data.result.code_room);
                    // console.log(text(printText(question)));
                }else{
                    // console.log(data.code_room);
                }
            }
        }
    })
}

function listHistoryMessage(result,imageCustomer,imageBot,codeRoom){
    var rand = Math.floor(Math.random() * 100) + 1;
    var html = '';
    console.log(result);
    // $.each(data.result,function(k,v){
    // });
    html+=                '<div class="card card-bordered">'
    html+=                    '<div class="card-header">'
    html+=                       '<div class="d-flex justify-content-between align-items-center mt-2">'
    html+=                            '<h5 class="text-dark">Nhắn tin với ChatBot</h5>'
    html+=                        '</div>'
    html+=                    '</div>'
    html+=                    '<div class="ps-container ps-theme-default ps-active-y list-message" id="chat-content" style="overflow-y: scroll !important; height:635px !important;">'  
    html+=                        '<div class="list">'
    $.each(result,function(k,v){
    html+=                        '<div class="media media-chat media-chat-reverse">' 
    html+=                            '<div class="media-body">' 
    html+=                                '<p class="mb-0">' 
    html+=                                    v.question 
    html+=                                '</p>' 
    html+=                                '<p class="mr-1 text-dark small mb-0 pr-0 d-flex justify-content-end meta"></p>' 
    html+=                            '</div>' 
    html+=                        '</div>';
    html+=                        '<div class="media media-chat">' 
    html+=                            '<img class="avatar" src="'+imageBot+'" alt="...">' 
    html+=                                '<div class="media-body hold">' 
    html+=                                     '<p class="mb-0 px-3 mr-lg-8 mr-ssm-5 media-answer-' + rand + '">' 
    html+=                                      v.answer
    html+=                                     '</p>' 
    html+=                                     '<p class="mr-1 ml-2 text-dark small pr-0 mb-0 meta"></p>' 
    html+=                                '</div>' 
    html+=                        '</div>'
    });
    html+=                        '</div>'
    html+=                        '<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">'
    html+=                            '<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">'
    html+=                            '</div>'
    html+=                        '</div>'
    html+=                        '<div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">'
    html+=                            '<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;">'
    html+=                            '</div>'
    html+=                       '</div>'
    html+=                   '</div>'
    html+=                    '<div class="publisher bt-1 border-light">'
    html+=                       '<img class="avatar avatar-xs" src="'+imageCustomer+'" alt="...">'
    html+=                       '<input class="publisher-input form-control question" type="text" placeholder="">'
    html+=                       '<span class="publisher-btn record-btn-'+codeRoom+'">'
    html+=                            '<i class="fa-solid fa-microphone fs-22"></i>'
    html+=                        '</span>'
    html+=                        '<a class="publisher-btn text-info icon chat" href="#" data-abc="true">'
    html+=                            '<i class="fa-solid fa-thumbs-up fs-22"></i>'
    html+=                        '</a>'
    html+=                    '</div>'
    html+=                '</div>'
    return html;
}
$(document).ready(function() {
    weatherDay();
    $('.record-btn').click(function() {
        recognition.start();
        voiceChat();
        // console.log('a');
    });

    $('.question').keyup(function() {
        autoWrite();
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

    $('.back-to-setting-mb').click(function(){
        $('.setting').removeClass('d-ssm-none');
        $('.room-chat-mb').removeClass('d-block');
        $('.room-chat').removeClass('d-block');
        $('.room-chat').addClass('d-none');
    })

    $('.click-profile').click(function(){
        if($('.profile').hasClass('d-none')){
            $('.change-password').addClass('d-none');
            $('.upgrade-profile').addClass('d-none');
            $('.profile').removeClass('d-none');
            $(this).addClass('active');
            $('.click-change-password').removeClass('active');
        }
        $('.title').text('Thông tin cá nhân')
    })

    $('.click-change-password').click(function(){
        if($('.change-password').hasClass('d-none')){
            $('.change-password').removeClass('d-none');
            $('.upgrade-profile').addClass('d-none');
            $('.profile').addClass('d-none');
            $(this).addClass('active');
            $('.click-profile').removeClass('active');
        }
        $('.title').text('Thay đổi mật khẩu');
    })

    $('.change-profile').click(function(){
        if($('.upgrade-profile').hasClass('d-none')){
            $('.upgrade-profile').removeClass('d-none');
            $('.change-password').addClass('d-none');
            $('.profile').addClass('d-none');
        }
        $('.title').text('Thay đổi thông tin cá nhân')
    })

    $('.eye-password').click(function(){
        if($('#passwordInput').attr('type') === 'password'){
            $('.icon-password').addClass('fa-eye-slash')
            $('.icon-password').removeClass('fa-eye')
            $('#passwordInput').attr('type','text')
        }else{
            $('.icon-password').removeClass('fa-eye-slash')
            $('.icon-password').addClass('fa-eye')
            $('#passwordInput').attr('type','password')
        }
    })

    $('.eye-re-password').click(function(){
        if($('#rePasswordInput').attr('type') === 'password'){
            $('.icon-re-password').addClass('fa-eye-slash')
            $('.icon-re-password').removeClass('fa-eye')
            $('#rePasswordInput').attr('type','text')
        }else{
            $('.icon-re-password').removeClass('fa-eye-slash')
            $('.icon-re-password').addClass('fa-eye')
            $('#rePasswordInput').attr('type','password')
        }
    })
});
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
        var dateTime = day+', '+days+'/'+month+'/'+year+' '+hours+':'+minutes;
        $('.city-chat').text(data.name);
        $('.date-chat').text(dateTime);
        $('.icon-weather').attr('src','http://openweathermap.org/img/w/' + data.weather[0].icon + '.png')
    });
}

function listHistoryMessage(result,imageCustomer){
    var html = '';
    // $.each(data.result,function(k,v){
    // });

    html += '<div class="card card-bordered">'
    html +=     '<div class="card-header">'
    html +=         '<div class="d-flex justify-content-between align-items-center mt-2">'
    html +=             '<h5 class="text-dark">Nhắn tin với ChatBot</h5>'
    html +=         '</div>'
    html +=     '</div>'
    html += '<div class="ps-container ps-theme-default ps-active-y list-message" id="chat-content" style="overflow-y: scroll !important; height:500px !important;">'
    html +=     '<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">'
    html +=         '<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">'
    html +=     '</div>'
    html +=     '<div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">'
    html +=         '<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;">'
    html +=         '</div>'
    html +=     '</div>'
    html += '</div>'
    // html += '<div class="publisher bt-1 border-light">'
    // html +=     '<img class="avatar avatar-xs" src="'+imageCustomer+'" alt="...">'
    // html +=     '<input class="publisher-input form-control question" type="text" placeholder="">'
    // html +=     '<span class="publisher-btn voice-btn">'
    // html +=         '<i class="fa-solid fa-microphone fs-22"></i>'
    // html +=     '</span>'
    // html +=     '<a class="publisher-btn text-info icon chat" href="#" data-abc="true">'
    // html +=         '<i class="fa-solid fa-thumbs-up fs-22"></i>'
    // html +=     '</a>'
    // html += '</div>'
    html += '</div>'
    return html;
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
        // console.log("Trình duyệt này không hỗ trợ định vị!");
    }
    weatherDay();

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

});
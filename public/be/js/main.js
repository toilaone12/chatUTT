$(document).ready(function(){
    $('.choose-question').click(function() {
        // alert(1);
        if ($('input[type="checkbox"]:checked').length > 0) {
            $('.add-question').addClass('pe-auto');
            $('.delete-questions').addClass('pe-auto');
            $('.add-question').removeClass('disabled');
            $('.delete-questions').removeClass('disabled');
        } else {
            $('.add-question').removeClass('pe-auto');
            $('.delete-questions').removeClass('pe-auto');
            $('.delete-questions').addClass('disabled');
            $('.add-question').addClass('disabled');
        }
    });

    $('.add-question').click(function() {
        // var choose = [];
        var html = '';
        $('.choose-question:checked').each(function(key,val) {
            html += '<tr>'
            html += '<th scope = "row">'+(parseInt(key)+1)+'</th>'
            html += '<td class="question-choose">'+$('.question-'+$(this).val()).text()+'</td>'
            html += '</tr>'
            console.log($(this).val());
        });
        $('.list-question-choose').html(html);
        
    });

    $('.text-question-choose').keyup(function(){
        // console.log($(this).val().length);
        if($(this).val().length > 0){
            $('.answer-question-choose').addClass('pe-auto');
            $('.answer-question-choose').removeClass('disabled');
            $('.answer-question-choose').removeClass('pe-none');
        }
    });

    $('.choose-all-question').click(function(){
        var isChecked = $('.choose-question').not(':checked').length !== 0; // b1: true b2: false
        $('.choose-question').prop('checked', isChecked);
        if ($('input[type="checkbox"]:checked').length > 0) {
            $('.add-question').addClass('pe-auto');
            $('.delete-questions').addClass('pe-auto');
            $('.add-question').removeClass('disabled');
            $('.delete-questions').removeClass('disabled');
        } else {
            $('.add-question').removeClass('pe-auto');
            $('.delete-questions').removeClass('pe-auto');
            $('.delete-questions').addClass('disabled');
            $('.add-question').addClass('disabled');
        }
    })

    //create-user
    $('.input-field').keyup(function(){
        var fullname = $('input[type="text"][name="fullname"]').val();
        var username = $('input[type="text"][name="username"]').val();
        var email = $('input[type="email"][name="email"]').val();
        if(fullname !== '' && username !== '' && email !== ''){
            $('.create-user').removeClass('disabled');
            $('.create-user').addClass('pe-auto');
        }else{
            $('.create-user').addClass('disabled');
            $('.create-user').removeClass('pe-auto');
        }
    })
    //open eye password
    $('.open-password').click(function(){
        if($('.icon-password').hasClass('fa-eye-slash')){
            $('.password').attr('type','text');
            $('.icon-password').addClass('fa-eye');
            $('.icon-password').removeClass('fa-eye-slash');
        }else{
            $('.password').attr('type','password');
            $('.icon-password').removeClass('fa-eye');
            $('.icon-password').addClass('fa-eye-slash');
        }
        // console.log($('i').hasClass('fa-eye-slash'));
    });
    $('.open-re-password').click(function(){
        if($('.icon-re-password').hasClass('fa-eye-slash')){
            $('.re-password').attr('type','text');
            $('.icon-re-password').addClass('fa-eye');
            $('.icon-re-password').removeClass('fa-eye-slash');
        }else{
            $('.re-password').attr('type','password');
            $('.icon-re-password').removeClass('fa-eye');
            $('.icon-re-password').addClass('fa-eye-slash');
        }
        // console.log($('i').hasClass('fa-eye-slash'));
    });
});
$(function(){
    $('.logtab').click(function(){
        $('.log').show();
        $(this).css("background","#292E2E")
        $('.regtab,.infotab,.mestab').css("background","none");
        $('.reg,.mes,.inf').hide();
    });
    $('.regtab').click(function(){
        $('.reg').show();
        $(this).css("background","#292E2E")
        $('.logtab,.infotab,.mestab').css("background","none");
        $('.log,.mes,.inf').hide();
    });
    $('.mestab').click(function(){
        $('.mes').show();
        $(this).css("background","#292E2E")
        $('.regtab,.infotab,.logtab').css("background","none");
        $('.reg,.log,.inf').hide();
    });
    $('.infotab').click(function(){
        $('.inf').show();
        $(this).css("background","#292E2E")
        $('.regtab,.logtab,.mestab').css("background","none");
        $('.reg,.mes,.log').hide();
    });
});

// START FORM VALIDATION 
$(function(){

    function reg(){
        if(document.getElementById('user').value == ""){
            $('.r1').html('ادخل اسم العضوية');
        }else{
            $('.r1').html('');
        }
        if(document.getElementById('pass').value == ""){
            $('.r2').html('ادخل رقمك السرى');
        }else{
            $('.r2').html('');
        }
        if(document.getElementById('mail').value == ""){
            $('.r4').html('ادخل البريد الالكترونى');
        }else{
            $('.r4').html('');
        }
    }
    
    function mes(){
        if(document.getElementById('yourname').value == ""){
            $('.r5').html('أدخل اسمك');
        }else{
            $('.r5').html('');
        }
        if(document.getElementById('yourmail').value == ""){
            $('.r6').html('ادخل البريد الالكترونى');
        }else{
            $('.r6').html('');
        }
        if(document.getElementById('message').value == ""){
            $('.r7').html('رسالتك فارغة');
        }else{
            $('.r7').html('');
        }
    }

    function log(){
        if(document.getElementById('username').value == ""){
            $('.r8').html('اسم المستخدم فارغ');
        }else{
            $('.r8').html('');
        }
        if(document.getElementById('password').value == ""){
            $('.r9').html('كلمة المرور فارغة');
        }else{
            $('.r9').html('');
        }
    }

    $("#register_form").submit(function(){
        reg();
        if(!$("#user").val() || !$("#pass").val() || !$("#pass2").val() || !$("#mail").val()){
            return (false);
		}else{
			return (true);
		}

    });
    
    $("#message_form").submit(function(){
        mes();
        if(!$("#yourname").val() || !$("#yourmail").val() || !$("#message").val()){
            return (false);
        }else{
            alert('تم ارسال الرسالة بنجاح');
            return (true);
        }
    });

    $("#login_form").submit(function(){
        log();
        if(!$("#username").val() || !$("#password").val()){
            return (false);
        }else{
            return (true);
        }
    });
});

// END FORM VALIDATION




// TOOLBOX START
$(function(){
    $('.toolicon').click(function(){
        $('.toolcontent').toggle(100);
    });
    $('.color1').click(function(){
        $('.buttonsub,.tabs').css("background","#D4995B");
        $('.inf span,.alertms').css("color","#D4995B");
    });
    $('.color2').click(function(){
        $('.buttonsub,.tabs').css("background","#50C28C");
        $('.inf span,.alertms').css("color","#50C28C");
    });
    $('.color3').click(function(){
        $('.buttonsub,.tabs').css("background","#57ABD9");
        $('.inf span,.alertms').css("color","#57ABD9");
    });
    $('.color4').click(function(){
        $('.buttonsub,.tabs').css("background","#E85664");
        $('.inf span,.alertms').css("color","#E85664");
    });
    $('.color5').click(function(){
        $('body').css("background","#FFFFFF");
    });
    $('.color6').click(function(){
        $('body').css("background","#383B3B");
    });
});
// TOOLBOX END
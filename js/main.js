$('.hamburger').click (()=>{
    $('.hamburger').toggleClass('open');
    $('.mobile.mobile-ul').toggleClass('active');
    if($('.hamburger').hasClass('open')){
        $('html, body').css({
            overflow: 'hidden'
        });
    } else {
        $('html, body').css({
            overflow: ''
        });
    }
    
});

$(document).ready(function() {
    $(".input-tel").mask("+7-(999)-999-9999");;
});

$('.content-cause-popup').click(()=>{
    $('.popup').addClass('d-flex');
    setTimeout(() => {
        $('.popup').addClass('visible');
    }, 10);
    $('html, body').css({
        overflow: 'hidden'
    });
});

$('.popup').click((e)=>{
    if (e.target.classList.contains('popup')) {
        $('.popup').removeClass('visible');
        setTimeout(() => {
            $('.popup').removeClass('d-flex'); 
            $("#myForm").css({ opacity: 1 });
            $("#myForm").css({ display: 'block' });
            $('.thanks').css({ display: 'none' });   
            $('.thanks').css({ opacity: 0 });
        }, 100);
    }
    $('html, body').css({
        overflow: ''
    });
});

$("#myForm").on("submit", (e)=> {
    e.preventDefault();
	$.ajax({
		url: '/php/handler.php',
		method: 'post',
		data: $("#myForm").serialize(),
		success: function(data){
            if(data != 'ok'){
                $('#error').html(data);
            } else {
                $("#myForm").css({ opacity: 0 });
                setTimeout(() => {
                    $("#myForm").css({ display: 'none' });
                    $('.thanks').css({ display: 'block' });   
                }, 300);
                $('.thanks').css({ opacity: 1 });


                $('#error').html('');
            }
		}
	});
});
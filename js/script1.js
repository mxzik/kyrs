menu.onclick = function myfuction(){
    var x = document.getElementById('myTopnav');
    
    if(x.className === "topnav"){
    x.className+=" responsive";
    } else x.className="topnav";
    }

$(document).ready(function(){
 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
 
});



$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1
    });
});





$('#form').trigger('reset');
$(function() {
    'use strict';
$('#form').on('submit', function(e) {
    e.preventDefault();
	$.ajax({
	url: 'order.php',
	type: 'POST',
    contentType: false,
    processData: false,
	data: new FormData(this),
	success: function(msg) {
	console.log(msg);
	if (msg == 'ok') {
		 alert('Сообщение отправлено');
	$('#form').trigger('reset'); // очистка формы
	} else {
		alert('Ошибка');
    }
 }
});
});
});

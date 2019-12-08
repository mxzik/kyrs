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
        items:8
    });
});
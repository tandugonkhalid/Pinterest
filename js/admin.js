$('.nav-link a').hover(function(){
    $(this).css('color', 'rgb(207, 0, 0)')
}, function(){
    $(this).css('color', 'white')
});

$('.card').hover(function(){
   $(this).css('box-shadow', '.5px .5px 10px 0px black') 
}, function(){
    $(this).css('box-shadow', 'none')
});

$(document).ready(function(){
        $("#load-items").load("../includes/load-products.inc.php"); 
});

$('.logout').click(function(){
    window.location.href="../admin/login.php";
})
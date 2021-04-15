$('.nav-link a').hover(function(){
    $(this).css('color', 'rgb(207, 0, 0)')
}, function(){
$(this).css('color', 'white')
})

$('.btn').css('color','rgb(230, 0, 0)')
$('.btn').css('background-color', 'white')

$('.nav-item').hover(function(){
    $(this).css('color', 'rgb(207, 0, 0)')
}, function(){
    $(this).css('color', 'black')
})

const login = document.querySelector(".login")

login.addEventListener('click', function(){
window.location.href = 'admin/login.php';
})

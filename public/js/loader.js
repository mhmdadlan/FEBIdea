$('body').prepend("<div class='loader'><img class='loader_icon' src='../assets/images/logo.png' /></div>");
$(".loader_icon").css("top", ($(window).innerHeight() / 2) - 50 + 'px');
$(".loader_icon").css("left", ($(window).innerWidth() / 2) - 50 + 'px');
$('#dashboard').css('display', 'none');
$(window).load(function() {
$(".loader").fadeOut("slow");
$('#dashboard').css('display','');
})

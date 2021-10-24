// $( document ).ready(function() {
//     $(".reserveren").css("min-width", "0vw")
//  		$(".reserveren").css("min-height", "0vw")
//  		$(".reserveren").css("width", "20vw")
//  		$(".reserveren").css("height", "3vw")
//  		$(".reserverenElements").css("display", "none")
//  		$(".icon2").attr("class", "fas fa-grip-lines fa-2x icon2")
// });

function active() {
	$('.reserveren').toggleClass('active');
	$('.reserverenElements').toggleClass('show');
};

function sidebar() {
 if($(".reserverenElements").css("display") == "block") {
 	$(".reserveren").css("min-width", "0vw")
 	$(".reserveren").css("min-height", "0vw")
 	$(".reserveren").css("width", "20vw")
 	$(".reserveren").css("height", "3vw")
 	$(".reserverenElements").css("display", "none")
 	$(".icon2").attr("class", "fas fa-grip-lines fa-2x icon2")

	$(".page_3").css("display", "none")
	$(".page_3").attr("class", "page_3 col-md-12")
	$(".page_1").css("display", "block")
	$(".page_1").attr("class", "page_1 col-md-12")
 }else {
 	$(".reserveren").css("min-width", "20vw")
 	$(".reserveren").css("width", "20vw")
 	$(".reserveren").css("min-height", "80vh")
 	$(".reserveren").css("height", "80vh")
 	$(".reserverenElements").css("display", "block")
 	$(".icon2").attr("class", "far fa-window-close fa-2x icon2")
 }
 			
};

function next1() {
	$(".page_1").css("display", "none")
	$(".page_1").attr("class", "page_1 col-md-12")
	$(".page_2").css("display", "block")
	$(".page_2").attr("class", "page_2 col-md-12")
};

function next2() {
	$(".page_2").css("display", "none")
	$(".page_2").attr("class", "page_2 col-md-12")
	$(".page_3").css("display", "block")
	$(".page_3").attr("class", "page_3 col-md-12")
};
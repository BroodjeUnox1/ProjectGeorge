$( document ).ready(function() {
    $(".reserveren").css("min-width", "0vw")
 		$(".reserveren").css("min-height", "0vw")
 		$(".reserveren").css("width", "3vw")
 		$(".reserveren").css("height", "3vw")
 		$(".reserverenElements").css("display", "none")
 		$(".icon2").attr("class", "fas fa-grip-lines fa-2x icon2")
});

function sidebar() {
 if($(".reserveren").css("min-width") == "336px") {
 	$(".reserveren").css("min-width", "0vw")
 	$(".reserveren").css("min-height", "0vw")
 	$(".reserveren").css("width", "3vw")
 	$(".reserveren").css("height", "3vw")
 	$(".reserverenElements").css("display", "none")
 	$(".icon2").attr("class", "fas fa-grip-lines fa-2x icon2")
 }else {
 	$(".reserveren").css("min-width", "20vw")
 	$(".reserveren").css("width", "20vw")
 	$(".reserveren").css("min-height", "80vh")
 	$(".reserveren").css("height", "80vh")
 	$(".reserverenElements").css("display", "block")
 	$(".icon2").attr("class", "far fa-window-close fa-2x icon2")
 }
 			
}
function toggleActive() {
	$('#reserveren').toggleClass('toggleActive');
};

$( document ).ready(function() {

	$('#time').change(function () {
		var val = $(this).val();
		if (val == '13:30') {
			$('#people').html("<option>1</option>");
		}
		else {
			$('#people').html(`
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			`);
		}
	}
	)

	$('.bestform').submit(function(event){
		// console.log('test')
		event.preventDefault();
		var	date = $('#date').val();
		var	time = $('#time').val();
		var	people = $('#people').val();
		var	name = $('#name').val();
		var	email = $('#email').val();
		var	phone = $('#phone').val();
		$.post("./testAjax.php",{
			date:date,
			time:time,
			people:people,
			name:name,
			email:email,
			phone:phone
		},
			function(response) {
				
			});

	});

	$('#date').change(function(event){
		event.preventDefault();
		var	x = $('#date').val();
		$.post("./newtest.php",{
			x:x
		},
			function(response) {
				
			});
	});
	
});

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
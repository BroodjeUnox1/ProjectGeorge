function toggleActive() {
	$('#reserveren').toggleClass('toggleActive');
};

$( document ).ready(function() {

	$("#date").change(function() {
        var value = this.value;
        $.post("./reserveren/timeList.php", {
            date: value
        }
        , function(data){
            $("#test").html(data);

            // $('#time option:not(:first)').remove();
            $('#time option:gt(0)').remove();

            $("#timeSelect").after(data);
        });
    })

	$("#time").change(function() {
        var value = this.value;
        //do your work here
        $.post("./reserveren/peopleList.php",
        {
            time: value
        }
        , function(data){
            // $("#test").html(data);

            // $('#time option:not(:first)').remove();
            $('#people option:gt(0)').remove();

            $("#peopleSelect").after(data);
        });
    })


	$('.bestform').submit(function(event){
		// console.log('test')
		event.preventDefault();
		var	date = $('#date').val();
		var	time = $('#time').val();
		var	people = $('#people').val();
		var	name = $('#name').val();
		var	email = $('#email').val();
		var	phone = $('#phone').val();
		$.post("./reserveren/reserveren.php",{
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

	$( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });

	$( "#datepicker" ).change(function(){
        // var currentDate = $( "#datepicker" ).datepicker( "getDate" );
        var currentDate = $( "#datepicker" ).datepicker().val();

        // alert(currentDate);

        $.post("./reserveren/dash.php",
        {
            currentDate: currentDate
        }
        , function(data){
            $("#tableData").html(data);
        });

    });

    $('#table').DataTable();
	
});

function next1() {
    var	date = $('#date').val();
    var	time = $('#time').val();
    var	people = $('#people').val();

    if (date == null || date == "") {
        $("#date").css({"border": "1px solid red"});
    }
    if (time == null) {
        $("#time").css({"border": "1px solid red"});
    }
    if (people == null) {
        $("#people").css({"border": "1px solid red"});
    }
    else {
        $(".page_1").css("display", "none");
        $(".page_1").attr("class", "page_1 col-md-12");
        $(".page_2").css("display", "block");
        $(".page_2").attr("class", "page_2 col-md-12");
    }

};

function next2() {
    var	name = $('#name').val();
    var	email = $('#email').val();
    var	phone = $('#phone').val();

    if (name == null || name == "") {
        $("#name").css({"border": "1px solid red"});
    }
    if (email == null || email == "") {
        $("#email").css({"border": "1px solid red"});
    }
    if (phone == null || phone == "") {
        $("#phone").css({"border": "1px solid red"});
    }
    else {
        $(".page_2").css("display", "none")
        $(".page_2").attr("class", "page_2 col-md-12")
        $(".page_3").css("display", "block")
        $(".page_3").attr("class", "page_3 col-md-12")
    }
};
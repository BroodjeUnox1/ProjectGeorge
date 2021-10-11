<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page title -->
    <title>George | Bestellen</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  link & cdn's || bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yaldevi&display=swap" rel="stylesheet">

    <style type="text/css">
        .line-height {
            line-height: 30px;
        }

        .pointer:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
	<button onclick="toggle()">Open</button>
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="toggleUpdate()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height: 80vh; overflow-y: scroll;">
                	<div class="row">
                		<div class="col-md-8 line-height"><small>name+amount</small></div>
                		<div class="col-md-2 line-height"><small>price</small></div>
                		<div class="col-md-2 line-height"><i class="fas fa-times pointer" style="color: red;" onclick="removeFromBasket(' + obj.indexOf(index) + ')"></i></div>
                	</div>
                	<hr>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="afrekenen()">Checkout</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="toggleUpdate()">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">

// 	const ages = [32, 33, 16, 40];

// ages.filter(checkAdult)    // Returns [32, 33, 40]

// function checkAdult(age) {
//   return age >= 18;
// }
	let testArray = [{Name: "burger", Currency: "1"},{Name: "burger", Currency: "1"},{Name: "burger", Currency: "1"}]
	makeAmountArray(testArray)
    function toggle() {
        //getting data and assigning it to the modal before opening
        //opening modal
        $(".modal").toggle();
    }

    function toggleUpdate() {
        location.reload();
    }

    function afrekenen() {
        $(".modal-body").empty()
        $(".modal-body").append('<div class="row"><div class="col-md-6"><small>Voornaam</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Achter naam</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Telefoon</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Email</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Straatnaam</small><input type="text" class="form-control"></div><div class="col-md-6"><small>postcode</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Betaalmethode</small><select name="" id="" class="form-control"><option value="ideal"><small>Ideal</small></option><option value="paypal"><small>Paypal</small></option><option value="paysafecard"><small>PaySafeCard</small></option></select></div></div></div>')    
    }

</script>

</html>
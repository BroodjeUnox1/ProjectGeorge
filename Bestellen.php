<?php 
    session_start();
    include "./class/bestelClass.php";
    $test= new Bestel();
    
    if(isset($_POST["add"])) {
        // print($_POST['currency']);
        // print($_POST['name']);
        $test->add($_POST['name'], $_POST['currency']);
    }
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="menu.css">
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
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Bestelling</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleUpdate()">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="max-height: 80vh; overflow-y: scroll;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Reken af</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="toggleUpdate()">Close</button>
                    </div>
                </div>
            </div>
        </div>
     <div class="container" id="menu">
        <h1><strong>Menu</strong></h1>
    </div>

    <div class="container mt-2">
        <nav class="navbar navbar-expand-lg navbar-light" id="menuNavbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-2 category">
        <h3><strong>Category A</strong></h3>
        <div class="row">
            <button class="btn btn-secondary" onclick="toggle()">
                <i class="fas fa-shopping-basket"></i>
            </button>
            <small id="total" class="mt-2"></small>
        </div>
    </div>

    <?php $test->show(); ?>
    <?php $test->total();?>
</body>
    <script type="text/javascript">
        function toggle() {
            //getting data and assigning it to the modal before opening
            getData();
            //opening modal
            $(".modal").toggle();
        }

        function toggleUpdate() {
            location.reload();
        }
        
        function add(val1, val2, val3){
            console.log(val3);
            // let amountNumber = $(`.${val3}`).val()

            //api request to add to shopping basket
            $.post('./api/bestel.php', {name: val1, currency: val2}, function(response){ //amount toevoegen
                // see what response is
                console.log(response)
                // reloading page to update total price
                location.reload();
            })
        }
        
        function getData(){
            // api call to get the data
            $.post('./api/getOrderData.php', {name: "data"}, function(response){
                // assigning data to the repsonse we got
                let data = response;
                // transfor the data in a usable array
                const obj = JSON.parse(data);
                // to get the total we set it to 0 and later add all prices
                let total = 0;
        
                // first empty old table of data before adding new data
                $(".modal-body").empty();
        
                // loop over all the data and append it
                for (index of obj) {
                    // add the price to total price + replacing the dollar sign with nothing
                    total += parseFloat(index.currency.replace("€",""));
                    $(".modal-body").append('<div class="row"><div class="col-md-6 line-height">'+index.name+'</div><div class="col-md-4 line-height">'+index.currency+'</div><div class="col-md-2 line-height"><i class="fas fa-times pointer" style="color: red;" onclick="removeFromBasket('+obj.indexOf(index)+')"></i></div></div>')
                }
                // add the total price to the end
                $(".modal-body").append('<div class="col-md-3 offset-md-9">Totaal: €'+total.toFixed(2)+'</div>')
            })
        }

        // removes a dish from the basket
        function removeFromBasket(val) {
            // make post call to delete item from shopping basket
            $.post('./api/deleteProductFrombasket.php', {index: val}, function(response){
                // see what response is
                console.log(response)
                // reloading data
                getData();
                
            })
        }
    </script>
</html>
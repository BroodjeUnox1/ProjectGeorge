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
    <title>George | Order</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
                    <h5 class="modal-title" style="font-family: 'Space Grotesk';">Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="toggleUpdate()">
                        <span aria-hidden="true">&times;</span>
                    </button>             
                </div>
                <div class="modal-body" style="max-height: 80vh; overflow-y: scroll;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="pay" onclick="afrekenen()">Checkout</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="toggleUpdate()">Close</button>
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

    <div class="container mt-2">
        <div class="row category">
            <div class="col-10">
                <h3 class=""><strong>Dices</strong></h3>
            </div>
            <div class="col-2 basketButton">
                <small id="total" class="mt-2"></small>
                <button class="btn btn-secondary ml-2" onclick="toggle()">
                    <i class="fas fa-shopping-basket"></i>
                </button>
            </div>
        </div>
    </div>

    <?php $test->show(); ?>
    <?php $test->total();?>

</body>
<script src="./js/bestellen/main.js"></script>
<script src="./js/bestellen/timePicker.js"></script>

</html>
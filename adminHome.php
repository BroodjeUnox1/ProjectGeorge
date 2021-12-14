<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/adminCss.css">
    <title>Dashboard || Home</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./adminHome.php">Dashboard</a>
        <a href="./adminMenu.php">Menu Drinks</a>
        <a href="./adminMenuFood">Menu Foods</a>
    </div>
    <!-- <span onclick="openNav()">open</span> -->

    <div class="welcomeDash">
        <div class="card-body">
            <span style="font-size:30px; cursor:pointer; color: white; float: left;" onclick="openNav()">&#9776;</span>
        </div>
    </div>

    <div class="container" id="main">
        <div class="row dashboard">
            <div class="col-12 card border-dark">
                <h1>Welcome back {{ username }}!</h1>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card dashboardCard">
                    <img src="https://cpmr-islands.org/wp-content/uploads/sites/4/2019/07/Happy-Test-Screen-01-825x510.png"
                        class="card-img-top" alt="...">
                    <div class="card-body" >
                        <h5 class="card-title">Menu Drinks</h5>
                        <p class="card-text">Klik hier om het menu van drinken aan te passen</p>
                        <a href="./adminMenu.php" class="btn">Menu drinks</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card dashboardCard">
                    <img src="https://cpmr-islands.org/wp-content/uploads/sites/4/2019/07/Happy-Test-Screen-01-825x510.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Menu Foods</h5>
                        <p class="card-text">Klik hier om het menu van foods aan te passen.</p>
                        <a href="./adminMenuFood.php" class="btn">Menu Foods</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript">
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
</body>

</html>
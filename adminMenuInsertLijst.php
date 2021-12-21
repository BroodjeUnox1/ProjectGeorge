<?php
    // Include database file
  include 'class/adminDatabase.php';
  $categoriesObj = new adminDatabase();

  // Insert Record in drinks table
  if(isset($_POST['submit'])) {
    $categoriesObj->insertDataCategoriesDrinks($_POST);
  }
?>
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
        <a href="./adminMenuFood.php">Menu Foods</a>
    </div>
    <!-- <span onclick="openNav()">open</span> -->

    <div class="welcomeDash">
        <div class="card-body">
            <span style="font-size:30px; cursor:pointer; color: white; float: left;" onclick="openNav()">&#9776;</span>
        </div>
    </div>

    <div class="container" id="main">
        <div class="row">
            <div class="col-12 headLijst" style="text-align:center">
                <h1>Insert category</h1>
            </div>

            <form action="adminMenuInsertLijst.php" method="POST" class="editForm mb-3 mt-3">
                <div class=" ">
                    <label for="name" class="form-label">Category name:</label>
                    <input type="text" name="name" class="form-control" id="exampleInputLijst"
                        aria-describedby="lijstHelp">
                </div>

                <button type="submit" name="submit" class="btn mt-3 float-end" value="submit">Save</button>

                <a href="adminMenuLijstView.php">
                    <button type="cancel" class="btn mt-3 float-end">Cancel</button>
                </a>
            </form>
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
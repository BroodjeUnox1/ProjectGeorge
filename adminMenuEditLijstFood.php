<?php
    include './class/adminDatabase.php';
    $categoryObj = new adminDatabase();

    //edit record
    if(isset($_GET['editCategory']) && !empty($_GET['editCategory'])) {
        $editCategory = $_GET['editCategory'];
        $category = $categoryObj->displayRecordByIdCategoriesFoods($editCategory);
    }


    //update record
    if(isset($_POST['update'])){
        $categoryObj->updateRecordCategoriesFoods($_POST);
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
                <h1>Edit menu lijst</h1>
            </div>
            <form action="adminMenuEditLijstFood.php" method="POST">
                <div class="mb-3 mt-3 editForm">
                    <label for="exampleInputLijst" class="form-label">Naam Lijst</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $category['name'];?>" required>
                    <a href="./adminMenuFood.php">
                        <input type="hidden" name="id" value="<?php echo $category["id"];?>">
                        <button type="submit" name="update" value="update" class="btn mt-3 float-end">Update</button>
                    </a>
                    <a href="adminMenuFood.php">
                        <button type="cancel" class="btn mt-3 float-end">Annuleren</button>
                    </a>
                </div>
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
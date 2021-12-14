<?php
  include './class/adminDatabase.php';

  $drinkObj = new adminDatabase();

  //edit record
  if (isset($_GET['editDrink']) && !empty($_GET['editDrink'])){
      $editDrink = $_GET['editDrink'];
      $drink = $drinkObj->displyaRecordByIdDrinks($editDrink);
  }

  //update record
  if(isset($_POST['update'])){
    $drinkObj->updateRecordDrinks($_POST);
  }
  var_dump($drink, $_GET);
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
    <a href="./adminMenu.php">Menu</a>
    <a href="#">Bestellingen</a>
    <a href="#">Reserveringen</a>
    <a href="#">Gast gegevens</a>
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
        <h1>Edit drink</h1>
      </div>

      <form action="adminMenuEditDrink.php" method="POST" >
        <div class="mb-3 mt-3 editForm">
          <div>
              <label for="exampleInputGerecht" class="form-label">Name:</label>
              <input type="text" class="form-control" value="<?php echo $drink['name'] ?>" id="exampleInputLijst" aria-describedby="lijstHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mt-3">
              <label for="exampleInputLijst" class="form-label">Description</label>
              <input type="text" class="form-control" value="<?php echo $drink['description'] ?> "id="exampleInputLijst" aria-describedby="lijstHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mt-3">
              <label for="exampleInputLijst" class="form-label">Price</label>
              <input type="number" class="form-control" value="<?php echo $drink['price']?> "id="exampleInputLijst" aria-describedby="lijstHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
        </div>

        <!-- <label for="exampleInputLijst" class="form-label mt-3">Vegetarisch?</label>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Gerecht is vegetarisch</label>
        </div>

        <label for="exampleInputLijst" class="form-label mt-3">Noten?</label>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault">Gerecht is vegetarisch</label>
        </div> -->

        <a href="adminMenuLijstView.php?catId=<?php echo $drink['id'] ?>">
          <input type="hidden" name="id" value="<?php echo $drink["id"];?>">
          <button type="submit" name="update" value="update" class="btn mt-3 float-end">Submit</button>
        </a>
        <a href="adminMenuLijstView.php?catId=<?php echo $drink['id'] ?>"">
          <button type="cancel" class="btn mt-3 float-end">Annuleren</button>
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
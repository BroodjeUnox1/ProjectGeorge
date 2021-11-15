<?php

  // Include database file
  include 'class/adminDatabase.php';

  $drinksObj = new adminDatabase();

  // Delete record from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $customerObj->deleteRecord($deleteId);

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="container" id="main">
<?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration added successfully
            </div>";
      }
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Record deleted successfully
            </div>";
    }
  ?>
        <div class="row">
            <div class="col-12 headLijst" style="text-align:center">
                <h1>Menu lijsten</h1>
            </div>
            <a href="./adminMenuLijstInsertGerecht.php">
                <button type="button" class="btn mt-3 btn-dark" style="font-size:25px;">Nieuwe gerecht toevoegen +</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Omschrijving</th>
                        <th scope="col">Prijs</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $drinks = $drinksObj->displayData();
                    foreach ($drinks as $drink) {
                ?>
                <tr>
                    <td><?php echo $drink['id'] ?></td>
                    <td><?php echo $drink['name'] ?></td>
                    <td><?php echo $drink['description'] ?></td>
                    <td><?php echo $drink['price'] ?></td>
                    <td>
                        <a href="edit.php?editId=<?php echo $drink['id'] ?>" style="color:green">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>&nbsp
                        <a href="index.php?deleteId=<?php echo $drink['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
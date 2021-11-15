<?php

  // Include database file
  include 'class/adminDatabase.php';
  $categoriesObj = new adminDatabase();

  // Insert Record in drinks table
  if(isset($_POST['submit'])) {
    $categoriesObj->insertDataCategories($_POST);
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>

    <div class="card text-center" style="padding:15px;">
        <h4>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</h4>
    </div><br>

    <div class="container">
        <form action="test2.php" method="POST" class="editForm mb-3 mt-3">
            <div class=" ">
                <label for="name" class="form-label">Naam gerecht</label>
                <input type="text" name="name" class="form-control" id="exampleInputLijst" aria-describedby="lijstHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mt-3">
                <label for="description" class="form-label">Omschrijving</label>
                <input type="text" name="description" class="form-control" id="exampleInputLijst"
                    aria-describedby="lijstHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mt-3">
                <label for="price" class="form-label">Prijs</label>
                <input type="text" name="price" class="form-control" id="exampleInputLijst"
                    aria-describedby="lijstHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>

            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <?php
                    $categories = $categoriesObj->displayData();
                    foreach ($categories as $category) {
                ?>
                <option name="category"><?php echo $category['category_id'] ?></option>
                <?php } ?>
            </select>

            <button type="submit" name="submit" class="btn mt-3 float-end" value="submit">Submit</button>
            <a href="adminMenuLijstView.php">
                <button type="cancel" class="btn mt-3 float-end">Annuleren</button>
            </a>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
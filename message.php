<?php
    // var_dump($_GET);

    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["id"]))? $_GET["id"]: "";

    switch($alert) {
        case "insert_category_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    succesfully created new category.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        case "insert_category_error":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    unsuccesfully created new category. contact admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
    }
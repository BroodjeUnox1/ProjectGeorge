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
        case "update_category_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Update of the category has been done succesfully.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        case "update_category_error":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                   Update was unsuccesfully. Contact the admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        case "delete_category_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Deletion of the category has been done succesfully.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        case "delete_category_error":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Deletion of the category has been done unsuccesfully. Contact admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        //----------------
        case "delete_drink_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Deletion of the category has been done unsuccesfully. Contact admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        case "delete_drink_error":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Deletion of the category has been done unsuccesfully. Contact admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        //----------------
        // case "delete_category_error":
        //     echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
        //             Deletion of the category has been done unsuccesfully. Contact admin for more information.
        //           </div>';
        //     header("Refresh: 3.5; ./adminMenu.php");
        // break;
        // case "delete_category_error":
        //     echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
        //             Deletion of the category has been done unsuccesfully. Contact admin for more information.
        //           </div>';
        //     header("Refresh: 3.5; ./adminMenu.php");
        // break;
    }
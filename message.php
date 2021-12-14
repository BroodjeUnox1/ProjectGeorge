<?php
    include './class/adminDatabase.php';
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["catId"]))? $_GET["catId"]: "";
    $catId = (isset($_GET["category_id"]))? $_GET["category_id"]: "";
    // var_dump($_GET, $id);exit;

    switch($alert) {
        //----------------
        //category drinks alert
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
                    Deletion of the category has been done unsuccesfully. Either category is not empty or there something has gone wrong. Contact admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenu.php");
        break;
        //----------------
        //drinks alert
        case "delete_drink_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Deletion of the category has been done succesfully.
                  </div>';
            header("Refresh: 3.5; ./adminMenuLijstView.php?catId=".$id);
        break;
        case "delete_drink_error":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Deletion of the category has been done unsuccesfully. Contact admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenuLijstView.php?catId=".$id);
        break;
        case "update_drink_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Update of the drink was succesfully updated.
                  </div>';
            header("Refresh: 3.5; ./adminMenuLijstView.php?catId=".$id);
        break;
        case "update_drink_error":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    Update of the drink was unsuccesful. Contact the admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenuLijstView.php?catId=".$id);
        break;
        case "insert_drink_succes":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    insert of the drink was succesful.
                  </div>';
            header("Refresh: 3.5; ./adminMenuLijstView.php?catId=".$id);
        break;
        case "insert_drink_error":
            echo '<div class="alert alert-success mt-4 w-50 mx-auto text-center" role="alert">
                    insert of the drink was unsuccesful. Contact the admin for more information.
                  </div>';
            header("Refresh: 3.5; ./adminMenuLijstView.php?catId=".$id);
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
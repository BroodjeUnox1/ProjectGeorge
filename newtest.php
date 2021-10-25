<?php 

session_start();

if(isset($_POST['x'])) {
    $x = $_POST['x'];
    $_SESSION['x'] = $_POST['x'];
};
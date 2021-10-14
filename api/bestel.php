<?php 
session_start();

require '../class/bestelClass.php';

$test = new Bestel();

$test->add($_POST["name"], $_POST["currency"] , $_POST['amount']);

?>
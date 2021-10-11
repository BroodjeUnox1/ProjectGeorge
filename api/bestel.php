<?php 
session_start();

require '../class/bestelClass.php';

$test = new Bestel();



$test->add($_POST["name"], "€" . str_replace("€", "", $_POST["currency"]) * $_POST['amount'], $_POST['amount']);


?>
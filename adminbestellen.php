<?php 
session_start();
include "./class/bestelClass.php";

$test = new Bestel();

$test->pay();

 ?>
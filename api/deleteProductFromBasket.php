<?php 
session_start();

unset($_SESSION['mandje'][$_POST["index"]]);
$newArray = array_values($_SESSION['mandje']);
unset($_SESSION['mandje']);
$_SESSION['mandje'] = $newArray;

 ?>
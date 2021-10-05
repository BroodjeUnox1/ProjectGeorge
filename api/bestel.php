<?php 
session_start();

require '../class/bestelClass.php';

$test = new Bestel();
for($i=0;$i<$_POST['amount'];$i++) {
	$test->add($_POST["name"], $_POST["currency"]);
}


?>
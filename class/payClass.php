<?php 
session_start();
include "bestelClass.php";

class PayClass extends Bestel {

	function __construct($firstname, $lastname, $phone, $email, $street, $postal, $time) {
		$this->pay($firstname, $lastname, $phone, $email, $street, $postal, $time);
	}

}

$pay = new PayClass($_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['email'], $_POST['street'], $_POST['postal'], $_POST['time']);

?>
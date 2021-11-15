<?php

session_start();

include "../class/db.php";
$db = new db();

$date = $_SESSION['date'];
$time = $_POST['time'];


$q = $db->query('SELECT people FROM reservation WHERE date = ? AND timeslot = ?', array($date, $time))->fetchAll();

foreach ($q as $abc) {
	$number += $abc['people'];
}

$maxPeople = 10;
$reservationsLeft = $maxPeople - $number;

for ($i=1; $i <= $reservationsLeft; $i++) { 
    $people .= "<option>{$i}</option>";
}

echo $people;
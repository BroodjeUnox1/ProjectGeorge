<?php

session_start();

include "../class/db.php";
$db = new db();

$date = $_POST['date'];
$_SESSION['date'] = $date;


$minutes = 60;
$start = "12:00";
$end = "16:00";
$startTime = DateTime::createFromFormat("H:i", $start);
$endTime = DateTime::createFromFormat("H:i", $end);
$interval = new DateInterval("PT".$minutes."M");
$timeRange = new DatePeriod($startTime, $interval, $endTime);


foreach ($timeRange as $time) {

    $time = $time->format('H:i');


    $q = $db->query('SELECT people FROM reservation WHERE date = ? AND timeslot = ?', array($date, $time))->fetchAll();

    $number = 0;
    foreach ($q as $x) {
        $number += $x['people']; 
    }
    

    if ($number >= 10) {
        $color = 'red';
    }
    else {
        $color = 'green';
    }
    

    if ($color == 'red') {
        $timeX .= "<option disabled style='color: {$color}; background-color: rgba(211, 211, 211, 0.5);'>{$time}</option>";
    }
    else {
        $timeX .= "<option style='color: {$color};'>{$time}</option>";
    }
}

echo $timeX;
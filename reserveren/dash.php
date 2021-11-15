<?php

session_start();

include "../class/db.php";
$db = new db();

$d = $_POST['currentDate'];

$q = $db->query('SELECT * FROM reservation WHERE date = ?', array($d))->fetchAll();

$html = "";

foreach ($q as $field => $value) {
    $html .= "<tr>";
    $html .= "<td>" . $value['timeslot'] . "</td>";
    $html .= "<td>" . $value['name'] . "</td>";
    $html .= "<td>" . $value['email'] . "</td>";
    $html .= "<td>" . $value['people'] . "</td>";
    $html .= "</tr>";
}
echo $html;

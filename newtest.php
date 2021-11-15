<?php 

session_start();

if(isset($_POST['x'])) {
    $x = $_POST['x'];
    $_SESSION['x'] = $_POST['x'];
};

$result = $db->query('SELECT * FROM reservation WHERE date = ?', $x)->numRows();
if ($result > 10) {
    $color = 'red';
}
else {
    $color = 'green';
}


$startTime = "12:00";
$endTime = "14:00";

$timeSlot = $startTime;


while ($timeSlot <= $endTime) { 
    $html .= '<option style="color: '. $color .';">'. $timeSlot .'</option>';
    $timeSlot = strtotime($timeSlot);
    $timeSlot = date("H:i", strtotime('+30 minutes', $timeSlot));
}

$time = $document->getElementsByTagName('#time');
parentNode->replaceChild($html, $time);

<?php

session_start();

include "./class/db.php";
$db = new db();

if(isset($_POST['date'])) {
    $date = $_POST['date'];
    $_SESSION['date'] = $_POST['date'];
};
if(isset($_POST['time'])) {
    $time = $_POST['time'];
    $_SESSION['time'] = $_POST['time'];
};
if(isset($_POST['people'])) {
    $people = $_POST['people'];
    $_SESSION['people'] = $_POST['people'];
};
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $_SESSION['name'] = $_POST['name'];
};
if(isset($_POST['email'])) {
    $email = $_POST['email'];
    $_SESSION['email'] = $_POST['email'];
};
if(isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    $_SESSION['phone'] = $_POST['phone'];
};

if (!empty($_SESSION['date']) && !empty($_SESSION['time']) && !empty($_SESSION['people']) && !empty($_SESSION['name']) && !empty($_SESSION['email']) && !empty($_SESSION['phone'])) {
    $db->query('INSERT INTO reservation (date, timeslot, people, name, email, phone) VALUES (?, ?, ?, ?, ?, ?)', $_SESSION['date'], $_SESSION['time'], $_SESSION['people'], $_SESSION['name'], $_SESSION['email'], $_SESSION['phone']);
}
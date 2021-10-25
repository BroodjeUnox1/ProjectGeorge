<?php

session_start();

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



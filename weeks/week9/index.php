<?php

// our index page which will show the session_start()

session_start();

include('config.php');

// did the user log in correctly

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

//include('./includes/header.php');
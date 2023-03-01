<?php 
// our server.php filr - this is where our session will start
// our session is a way to store the information

session_start();
include('config.php');
// this is where eventually you will have the header include
// include('./header.php');

// this server.php page will be communicating to our database!!!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user, using if isset reg_user

if(isset($_POST['reg_user'])) {
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

// we want to make sure that all the input fields have been filled out
// if empty, we are going to use a new function which is called array_push()

if(empty($first_name)) {
   array_push($errors, "First name is required!!!");
}

if(empty($last_name)) {
    array_push($errors, "Last name is required!!!");
 }

 if(empty($email)) {
    array_push($errors, "Email is required!!!");
 }

 if(empty($username)) {
    array_push($errors, "Username is required!!!");
 }

 if(empty($password_1)) {
    array_push($errors, "Password is required!!!");
 }

// our logic is this - is password_1 !== to password_2

if($password_1 !== $password_2) {
    array_push($errors, "Passwords do not match!");
}












} // end if isset
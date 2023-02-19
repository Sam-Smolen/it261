<?php 
ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;
     
    case 'daily.php' :
     $title = 'Daily page of our Website Project';
    $body = 'daily inner';
    break;
            
    case 'project.php' :
     $title = 'Project page of our Website Project';
     $body = 'project inner';
    break;

    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
     break;

    case 'gallery.php' :
    $title = 'Gallery page of our Website Project';
    $body = 'gallery inner';
    break;
}


// our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

 function make_links($nav) {
        $my_return = '';
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
            } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
            }

        } // end foreach
        return $my_return;
    
    } // end function

// my forms PHP

ob_start();

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$toppings = '';
$size = '';
$comments = '';
$privacy = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$toppings_err = '';
$size_err = '';
$privacy_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
    $first_name_err = 'Please enter your first name!';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_err = 'Please enter your last name!';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
    $email_err = 'Please provide an email address!';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

if(empty($_POST['toppings'])) {
    $toppings_err = 'You must choose at least one topping!';
} else {
    $toppings = $_POST['toppings'];
}

if($_POST['size'] == NULL) {
    $size_err = 'Select a size';
} else {
    $size = $_POST['size'];
}


if(empty($_POST['privacy'])) {
    $privacy_err = 'Please agree to our privacy policy!';
} else {
    $privacy = $_POST['privacy'];
}

if(isset($_POST['comments'])) {
    $comments = $_POST['comments'];
}

function my_toppings($toppings) {
    $my_return = '';

    if(!empty($_POST['toppings'])) {
        $my_return = implode(', ', $_POST['toppings']);


    } else {
        $toppings_err = 'Please select your toppings!';
    }
return $my_return;

}

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['toppings'],
$_POST['size'],
$_POST['comments'],
$_POST['privacy'],)) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.'  '.PHP_EOL.'
Last Name: '.$last_name.'  '.PHP_EOL.'
Email: '.$email.'  '.PHP_EOL.'
Phone Number: '.$phone.'  '.PHP_EOL.'
Selected Toppings: '.my_toppings($toppings).'  '.PHP_EOL.'
Size: '.$size.'  '.PHP_EOL.'
Additional instructions/comments : '.$comments.'  '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@samsmolen.com'    
    );
    
    if(!empty($first_name && 
    $last_name && 
    $email && 
    $phone && 
    $toppings && 
    $size &&
    $privacy) && 
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
    
    
    
    mail($to, $subject, $body, $headers);
    header('Location:thx.php');
    }
}

}



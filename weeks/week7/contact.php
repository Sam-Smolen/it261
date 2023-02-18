<?php

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
$comments_err = '';
$privacy_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
    $first_name_err = '';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
    $last_name_err = '';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
    $email_err = '';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['phone'])) {
    $phone_err = '';
} else {
    $phone = $_POST['phone']
}

if(empty($_POST['toppings'])) {
    $toppings_err = '';
} else {
    $toppings = $_POST['toppings'];
}

if(empty($_POST['size'])) {
    $size_err = '';
} else {
    $size = $_POST['size'];
}

if(empty($_POST['comments'])) {
    $comments_err = '';
} else {
    $comments = $_POST['comments']
}

if(empty($_POST['privacy'])) {
    $privacy_err = '';
} else {
    $privacy = $_POST['privacy'];
}





}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailable Form HW 6</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
    <legend>Complete Your Order</legend>

    <label>First Name</label>
    <input type="text" name="first_name">

    <label>Last Name</label>
    <input type="text" name="last_name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Phone</label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx">

    <label>Toppings</label>
    <ul>
    <li>
    <input type="checkbox" name="toppings[]" value="pep">Pepperoni
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="olives">Olives
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="gpep">Green Peppers
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="rpep">Red Peppers
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="onions">Onions
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="sausage">Sausage
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms
    </li>
    </ul>
    
    <label>Choose Size</label>
    <select name="size">

    <option value="" NULL>Select one</option>

    <option value="small">Small</option>

    <option value="medium">Medium</option>

    <option value="large">Large</option>

    <option value="x-large">Extra Large</option>
    
    </select>

    <label>Comments</label>
    <textarea name="comments"></textarea>

    <label>Privacy</label>
    <ul>
        <li>
        <input type="radio" name="privacy" value="yes">Privacy
        </li>
    </ul>
    <input type="submit" value="Place my Order!">

    <input type="button" value="reset">

    </fieldset>
    </form>
</body>
</html>
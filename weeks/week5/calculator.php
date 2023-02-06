<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calculator2.php for it261 Week 5</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body style="background-color: white;">
    <h1>My Trip Calculator</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <label>Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

    <label>Total miles driving?</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">

    <label>How fast do you typically drive?</label>
    <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">

    <label>How many hours per day do you plan on driving?</label>
    <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">

    <label>Price of gas</label>
    
    <ul>
    <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked="checked"';?>>$3.00</li>
    <li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked"';?>>$3.50</li>
    <li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked="checked"';?>>$4.00</li>
    </ul>

    <label for="economy">Fuel efficiency</label>
    <select name="economy" id="economy">
    <option value="" NULL <?php if(isset($_POST['economy']) && $_POST['economy'] == NULL) echo 'selected="unselected"';?>>Select one</option>
    <option value="10" <?php if(isset($_POST['economy']) && $_POST['economy'] == '10') echo 'selected="selected"';?>>10 mpg</option>
    <option value="15" <?php if(isset($_POST['economy']) && $_POST['economy'] == '15') echo 'selected="selected"';?>>15 mpg</option>
    <option value="20" <?php if(isset($_POST['economy']) && $_POST['economy'] == '20') echo 'selected="selected"';?>>20 mpg</option>
    <option value="25" <?php if(isset($_POST['economy']) && $_POST['economy'] == '25') echo 'selected="selected"';?>>25 mpg</option>
    <option value="30" <?php if(isset($_POST['economy']) && $_POST['economy'] == '30') echo 'selected="selected"';?>>30+ mpg</option>
    </select>

    <input type="submit" value="Calculate">

    <p class="reset"><a href="">Reset</a></p>

    </fieldset>
    </form>

    <?php 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        
        if(empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name!</p>';
        }
        if(empty($_POST['miles'])) {
            echo '<p class="error">Please fill out your total driving miles!</p>';
        }
        if(empty($_POST['speed'])) {
            echo '<p class="error">Please fill out how fast you will be driving!</p>';
        }
        if(empty($_POST['hours'])) {
            echo '<p class="error">How many hours a day would you like to drive?</p>';
        }
        if(empty($_POST['price'])) {
            echo '<p class="error">Your cost of gas, please!</p>';
        }
        if(($_POST['economy']) == NULL) {
            echo '<p class="error">Please select your cars efficiency!</p>';
        }
    

}if(isset($_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['price'],
    $_POST['economy'])) {
        $name = $_POST['name'];
        $miles = floatval($_POST['miles']);
        $speed = floatval($_POST['speed']);
        $hours = floatval($_POST['hours']);
        $price = floatval($_POST['price']);
        $economy = floatval($_POST['economy']);
        if($speed > 0 && $miles > 0 && $hours > 0 && $price > 0 && $economy > 0) {
            $milesPerDay = $hours * $speed;
            $totalHours = $miles / $speed;
            $daysTraveled = $totalHours / $hours;
            $gallons = $miles / $economy;
            $totalCost = $gallons * $price;
        }
       

        if(!empty($name && $miles && $speed && $hours && $price && $economy)) {

        echo '
            <div class="box">
            
        <p>Hello '.$miles.', you will be traveling a total of '.number_format($totalHours, 2).' hours, taking '.number_format($daysTraveled, 2).' days<br>And will be using '.number_format($gallons).' gallons of gas, costing you $'.number_format($totalCost).'</p>
            
        </div>
        ';
        }
    
}
    
    
    ?>


</body>
</html>
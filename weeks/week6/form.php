<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 in week 6</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <fieldset>
    <legend>Contact Sam</legend>
    
    <label>First Name</label>
    <input type="text" name="first_name">

    <label>Last Name</label>
    <input type="text" name="last_name">

    <label>Email</label>
    <input type="email" name="email">
    
    <label>Gender</label>
    <ul>
    <!-- will come back to gender once we will br adding the sticky part of the form -->
    <li>
    <input type="radio" name="gender" value="male">
    </li>
    </ul>

    <label>Phone</label>
    <input type="tel" name="phone">

    <label>Favorite Wines</label> 
    <ul>
        <!-- we will return to the wines portion to add additional wines when we are adding the sticky part of our form -->
    <li>
    <input type="checkbox" name="wines[]" value="cab">Cabernet
    </li>

    </ul>
    <label>Regions</label>
    <select name="regions">
        <!-- we will return to options to add additional options when we are making our form sticky -->
    <option value="" NULL>Select one</option>


    </select>

    <label>Comments</label>
    <textarea name="comments"></textarea>


    <label>Privacy</label>
    <ul>

    <li>
    <input type="radio" name="privacy" value="yes">Privacy
    </li>
    </ul>

    <input type="submit" value="Send it!">




</fieldset>
</form>

</body>
</html>
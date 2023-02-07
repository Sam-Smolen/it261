<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 4 sticky form</title>
    <link href="css/currency.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
    <label>NAME</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

    <label>EMAIL</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">

    <label>How much money do you have?</label>
    <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']);?>">
    <!-- time for our radio button that has an additional attribute of VALUE -->
    <label>Choose you currency</label>
    <ul>
    <li><input type="radio" name="currency" value="0.014" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.014) echo 'checked="checked"';?>> Rubles</li>
    <li><input type="radio" name="currency" value="0.74" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.74) echo 'checked="checked"';?>>Canadian Dollars</li>
    <li><input type="radio" name="currency" value="1.20" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.20) echo 'checked="checked"';?>>Pounds</li>
    <li><input type="radio" name="currency" value="1.07" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.07) echo 'checked="checked"';?>>Euros</li>
    <li><input type="radio" name="currency" value="0.0075" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0075) echo 'checked="checked"';?>>Yen</li>

    </ul>
    
    <label>Choose your banking institution</label>
    <select name="bank">
    <option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected"';?>>Select one!</option>
    <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected="selected"';?>>Bank of America</option>
    <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected="selected"';?>>Chase Bank</option>
    <option value="banner" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'banner') echo 'selected="selected"';?>>Banner Bank</option>
    <option value="wells" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'wells') echo 'selected="selected"';?>>Wells Fargo</option>
    <option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected="selected"';?>>Boeing Credit Union</option>
    </select>
    
    
    <input type="submit" value="Convert it!">
        
    <p><a href="">Reset it!</a></p>
    
    </fieldset>
    </form>

    <?php 
    // we will start with the server request method
    // then, we will ask ourselves if any fields are empty
    // if the fields are not empty, we will elseif they are set

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        echo '<p class="error">Please fill out your name!</p>';
    }
    
    if(empty($_POST['email'])) {
        echo '<p class="error">Please fill out your email!</p>';
    }
    
    if(empty($_POST['amount'])) {
        echo '<p class="error">Please fill out your amount!</p>';
    }

    if(empty($_POST['currency'])) {
        echo '<p class="error">Please check your currency!</p>';
    }

    if($_POST['bank'] == NULL) {
        echo '<p class="error">Please fill out your banking institution!</p>';
    }





} if(isset($_POST['name'],
    $_POST['email'],
    $_POST['amount'],
    $_POST['currency'],
    $_POST['bank'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = floatval($_POST['amount']);
        $currency = floatval($_POST['currency']);
        $bank = $_POST['bank'];
        $dollars = $amount * $currency;

        if(!empty($name && $email && $amount && $currency && $bank)) {



         echo '
        <div class ="box">
        <h2>Hello '.$name.',</h2>
        <p>You now have <b> $'.$dollars.' American dollars</b> and we will be emailing you at <b>'.$email.'</b> with your information, as well as depositing your funds at <b>'.$bank.' bank!</b></p>

        </div>
        ';

        }
        if($dollars > 500) {
            echo'<div class="happy-message">
            <h2>I am REALLY happy, because I have $'.$dollars.' American Dollars!</h2>
            <iframe width="540px" height="315px" src="https://www.youtube.com/embed/O5APc0z49wg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>';
        } else {
            echo '<div class="unhappy-message">
            <h2>I am NOT happy, because I have $'.$dollars.' American Dollars!</h2>
            <iframe width="540px" height="315px" src="https://www.youtube.com/embed/l5aZJBLAu1E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>';
        }
    }
    

    ?>
    
    
    <footer>
        <p>Copyright &copy; 2023</p>
        <p>All Rights Reserved</p>
        <p><a href="https://samsmolen.com/it261/">Web design by Sam</a></p>
        <p><a id="html-checker" href="" target="_blank">HTML Validation</a></p>
        <p><a id="css-checker" href="" target="_blank">CSS Validation</a></p>
    </footer>
    <script>
  document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
             
             document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>
</body>
</html>
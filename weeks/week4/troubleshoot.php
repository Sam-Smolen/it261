<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Adder.php</h1>
<form action="" method="post">
<fieldset>
<label>Enter the first number:</label>
<input type="number" name="num1"><br>
<label>Enter the second number:</label>
<input type="number" name="num2"><br>
<input type="submit" value="Add Em!!">
</fieldset>
</form>

<?php     //adder-wrong.php

/* This assignment will be to troubleshoot  (repair) a PHP page called "adder.php." Before the errors were added to it, the page was designed to add two numbers via a form field and produce the correct answer. */

// all steps needed to repair the code will be commented at the bottom of this page.

// Starting Point: Here is the flawed "code"!

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = intval($num1) + intval($num2);
echo'<p><a href="">Reset page</a></p>';

if (empty($_POST['num1']&&
    $_POST['num2'])) {
    echo '<p class ="error">Please fill in your numbers</p>';
    } else {
        echo '<h2>You added '.$num1.' and '.$num2.'';
        echo '<p style="color:red;"> and the answer is <br>
        '.$myTotal.'!</p>';
    }
} 

?>

</body>
</html>

    <!-- STEPS TO REPAIR: 

    step 1: move all HTML to the the top of the page, on line 1 add <!DOCTYPE html> and set html to lang="en"

    step 2: add proper meta tags on lines 4-6 to ensure cross browser compatibility 

    step 3: on line 8, add link to stylesheet, and remove tags for inline styles <body> begins on line 10. 

    step 4: on line 11, remove the space after the closing h1. remove backslash from opening form tag, and move opening form tag to the next line to make the code more readable. <form> starts on line 12 now. 

    step 5: on line 12, add method="post" after action="" in our opening form tag.

    step 6: on line 13, add an opening <label> to begin the line. 

    step 7: after the closing label tag on line 13, move the input tag down a line so that the input tag is on its own line to make our code easier to understand

    step 8: now on line 14, change our input type="text" to be type="number" since we will be working with numbers, also make sure to change the name="Num1" to be name="num1" with a lowercase n to match our variable name.

    step 9: on line 15, remove the / from the opening label tag, and add a closing label tag after the text Enter the second number: to create the label for our second input, then directly after the closing label tag, start a new line so that the input for our second label is on line 16. This makes the code easier to read.

    step 10: on line 16, change the input type to be number instead of text
 
    step 11: on line 17, remove the extra space between the opening form tag and the closing input tag. add a closing double quotation after the two !!\'s. Then move the closing form tag to the line below so that it is line 18 instad of 17.  

    step 12: create 2 blank lines, one should be directly under the line with the opening form tag, and the other will be directly above the closing form tag. For me these are lines 13 and 19. 

    step 13: add an opening <fieldset> to my new blank line on 13 and a closing </fieldset> to the newly created blank line on 19. 

    step 14: on line 33, change the -= to be just = sign. Also change Num2 to num2 with a lowercase n to match our variable name. 

    step 15: on line 34, remove the extra spaces after between $num1 and the ..\'s, and change the double quotes to single quotes. also add a single quote before and after the two dots surrounding num 2 like so '.$num2.'. and remove the extra quotes so that all that there is two single quotes before the semi colon 

    step 16: on line 35, remove the extra space in between the single quote and opening p tag

    step 17: on line 36, remove the < and > surrounding style="color:red;", and then cut and copy style="color:red;"
    and place it inside the opening p tag on line 35

    step 18: on line 36, remove the double quotes and make sure that my $myTotal is surround by a dot within a single quote with no extra spaces like so '.$myTotal.'. also remove the single quote following the ! and place it after the closing p tag

    step 19: on line 37, add a closing </p> tag after the closing </a> but inside the single quote, then outside the signle quote end the line with a semi colon. 

    step 20: on line 46, remove the ' { and ; that is following the closing html tag. then cut and copy the ?> and paste it onto line 40, to close out php tag. 
    
    
    STEPS TO GET RID OF ERROR MESSAGES

    step 1: line 33, make sure myTotal is equal to the sum of intval() num1+num2

    step 2: create another if statement to check if post is empty. 

    step 3: if there is an empty field, echo error. else, add em! -->
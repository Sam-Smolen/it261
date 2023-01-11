<?php
// concatenation
// operators -assignment operators
// some preset functions
// arrays

$name = 'Sam';
$first_name = 'Sam';
$last_name = 'Smolen';
echo '<br>';
$name = 'Sam';
$name .= ' Smolen';
echo $name;

echo '<br>';

$color = 'red';
echo $color;

echo '<br>';
echo 'Sam\'s favorite color is '.$color.'';

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
$x = 20;
$x += 5;
echo $x;
echo '<br>';
$x = 100;
$x /= 10;
echo $x;
echo '<br>';
echo '<h3>Our Product, quantity and tax</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo '<h3>We would like our amount to reflect 2 decimal places -- we are thinking about floats and a new function - number_format()</h3>';
echo '<br>';
$product = 120; // is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 2);
echo 'We have a total of <b>$'.$total_friendly.'</b> dollars';
echo '<br>';

$product = 120; // is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
echo '<br>';

echo '<br>';


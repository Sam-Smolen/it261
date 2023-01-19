<?php
// this file will demonstrate for loops and in addition to placing your php inside your HTML!!!
// the for loop - loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) {code to be excecuted for each iteration; }

// celcius and farenheit

// $far =($cel * 9/5) + 32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Tables</title>
    <style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
    
table {
    width: 500px;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid lightblue;
}
td, th {
    border-collapse: collapse;
    border: 1px solid lightblue;
    padding: 5px; 
}
 
h1, h2 {
    text-align: center;
    margin: 10px 0;
    color: green;
}

    </style>
</head>
<body>
    <h1>Celcius / Farenheit Table!</h1>
<table>
<tr>
<th>Celcius</th>
<th>Farenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 5) {
$far =($cel * 9/5) + 32;
echo '<tr>';
echo '</tr>';
echo '<td> '.$cel.' degrees </td>';
echo '<td> '.$far.' degrees </td>';
}
?>

</table>

<!-- Kilometers to Mileage converter using a for loop-->
<!-- For reference, 1 kilometer equals 0.621371 miles. -->
<h2>Kilometers / Mileage Table!</h2>
<table>
    <tr>
        <th>Kilometers</th>
        <th>Mileage</th>
    </tr>
    <?php
    for($kilometers = 0; $kilometers <= 100; $kilometers += 5) {
        $miles =($kilometers * 0.621371);
        echo '<tr>';
        echo '</tr>';
        echo '<td> '.$kilometers.' kilometer(s) </td>';
        echo '<td> '.$miles.' mile(s) </td>';
    }
    ?>
</table>

</body>
</html>
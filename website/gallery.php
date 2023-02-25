<?php
$founder ['Enzo_Ferrari'] = 'ferra_ Founded by Enzo Ferrari in 1939 from the Alfa Romeo racing division as Auto Avio Costruzioni, the company built its first car in 1940';
$founder ['Ferruccio_Lamborghini'] = 'lambo_ Industrialist and businessman who created Automobili Lamborghini in 1963';
$founder ['Ferdinand_Porsche'] = 'porsc_Ferdinand Porsche founded the company called "Dr. Ing. h. c. F. Porsche GmbH" with Adolf Rosenberger and Anton Piëch in 1931.';
$founder ['Lionel_Martin'] = 'aston_Aston Martin Lagonda Global Holdings PLC is an English manufacturer of luxury sports cars and grand tourers. Its predecessor was founded in 1913 by Lionel Martin and Robert Bamford';
$founder ['Horacio_Pagani'] = 'pagan_Horacio Pagani is an Argentine-Italian businessman and engineer in the automotive industry. He is the founder of Pagani Automobili S.p.A., an Italian specialty auto-maker. Prior to founding his own company, Pagani worked for Renault and Lamborghini.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Hw 7 Gallery</title>
    <style>

    body {
        background-color: black;
        color: yellow;
    }    

    table {
        border: 3px solid yellow;
        border-collapse: collapse;
    }

    td {
        border: 3px solid yellow;
        width: 300px;
        padding: 10px;
        font-size: 20px;
        text-align: center;
        margin: 0 auto;
    }

    img {
        max-width: 100%;
        width: 350px;
        height: 350px;
    }

    .car {
        width: 500px;
    }

    .car img {
        width: 500px;
    }

    .about {
        font-size: 15px;
    }

    h1 {
        text-align: center;
        margin-bottom: 3rem;
    }

    footer {
        height: 60px;
        line-height: 60px;
        clear: both;
    }

    footer ul {
        display: flex;
        justify-content: center;
        list-style-type: none;
    }

    footer li {
        justify-content: center;
        margin:0 15px;
    }

    </style>
</head>
<body>
    <h1>My Gallery for Week 7 HW</h1>
        <table>
        <?php foreach($founder as $name => $image) :?>
            <tr>
                <td><img src="./images/<?php echo substr($image, 0, 5) ;?>.png" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
                <td><b><?php echo str_replace('_', ' ', $name) ;?></b></td>
                <td class="about"><?php echo substr($image, 6) ;?></td>
                <td  class="car"><img src="./images/<?php echo substr($image, 0, 4) ;?>.png" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
            </tr>
        <?php endforeach ;?>
        </table>
    <?php 
    include('./includes/footer.php');
    ?>
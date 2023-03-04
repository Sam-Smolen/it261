<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;  ?></title>
    <link rel="stylesheet" href="css/db_styles.css" type="text/css">
</head>
<body class="<?php echo $body  ; ?>">

<header>
<div class="inner-header">
<a href="https://samsmolen.com/it261/">

<img id="logo" src="images/logo.png" alt="logo">    
</a>
<!-- navbar
<nav>
    <ul>
        <li>
            <a href="">Home</a>
        </li>
        <li>
            <a href="">About</a>
        </li>
        <li>
            <a href="">Daily</a>
        </li>
        <li>
            <a href="">Project</a>
        </li>
        <li>
            <a href="">Contact</a>
        </li>
        <li>
            <a href="">Gallery</a>
        </li>
    </ul>
</nav>
 end navbar-->
 <nav>
    <ul>
        <?php 
        echo make_links($nav);
        ?>
    </ul>
 </nav>
</div>
<!-- end inner-header -->

</header>
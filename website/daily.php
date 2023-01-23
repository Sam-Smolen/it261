<?php

date_default_timezone_set('America/Los_Angeles');


if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date ('l');
}

switch($today) {
    case 'Monday' :
    $genre = '<h2> Monday is our Blues Music day!</h2>';
    $pic = 'blues.png';
    $alt = 'Blues Music';
    $content = '<p>Blues is a music genre and musical form which originated in the Deep South of the United States around the 1860s. Blues incorporated spirituals, work songs, field hollers, shouts, chants, and rhymed simple narrative ballads from the African-American culture.</p>';
    echo"<body bgcolor=#9B2915>";
    
    break;

    case 'Tuesday' :
    $genre = '<h2>Tuesday is our Rock Music day!</h2>';
    $pic = 'rock.png';
    $alt = 'Rock Music';
    $content = '<p><p>Rock music is a broad genre of popular music that originated as "rock and roll" in the United States in the late 1940s and early 1950s, developing into a range of different styles in the mid-1960s and later, particularly in the United States and United Kingdom.[3] It has its roots in 1940s and 1950s rock and roll, a style that drew directly from the blues and rhythm and blues genres of African-American music and from country music.</p>';
    echo"<body bgcolor=lightgreen>";
    break;

    case 'Wednesday' :
    $genre = '<h2>Wednesday is our Jazz Music day!</h2>';
    $pic = 'jazz.png';
    $alt = 'Jazz Music';
    $content = '<p>Jazz is a music genre that originated in the African-American communities of New Orleans, Louisiana, in the late 19th and early 20th centuries, with its roots in blues and ragtime. Since the 1920s Jazz Age, it has been recognized as a major form of musical expression in traditional and popular music.</p>';
    echo"<body bgcolor=#E9B44C>";
    
    break;

    case 'Thursday' :
    $genre = '<h2>Thursday is our Country music day!</h2>';
    $pic = 'country.png';
    $alt = 'Country Music';
    $content = '<p>Country is a music genre originating in the Southern and Southwestern United States. First produced in the 1920s, country primarily focuses on working class Americans and blue-collar American life.</p>';
    echo"<body bgcolor=##9B2915>";
    break;

    case 'Friday' :
    $genre = '<h2>Friday is our Classical Music day!</h2>';
    $pic = 'classical.png';
    $alt = 'Classical Music';
    $content = '<p>Classical music generally refers to the art music of the Western world, considered to be distinct from Western folk music or popular music traditions. It is sometimes distinguished as Western classical music, as the term "classical music" also applies to non-Western art music.</p>';
    echo"<body bgcolor=#EEE82C>";
    break;

    case 'Saturday' :
    $genre = '<h2>Saturday is our Hip-Hop Music day!</h2>';
    $pic = 'hiphop.png';
    $alt = 'Hip-Hop Music';
    $content = '<p>Hip hop music or hip-hop music, also known as rap music and formerly known as disco rap, is a genre of popular music that originated in New York City in the 1970s. It consists of stylized rhythmic music that commonly accompanies rapping, a rhythmic and rhyming speech that is chanted.</p>';
    echo"<body bgcolor=orange>";
    break;

    case 'Sunday' :
    $genre = '<h2>Sunday is our Pop music day!</h2>';
    $pic = 'pop.png';
    $alt = 'Pop Music';
    $content = '<p>Pop music is a genre of popular music that originated in its modern form during the mid-1950s in the United States and the United Kingdom. The terms popular music and pop music are often used interchangeably, although the former describes all music that is popular and includes many disparate styles.</p>';
    echo"<body bgcolor=#DB5ABA>";

    break;
}
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    break;

    case 'about.php' :
    break;
     
    case 'daily.php' :
    break;
            
    case 'project.php' :
    break;

    case 'contact.php' :
     break;

    case 'gallery.php' :
    break;
}


$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Switch hw#3</title>
    <style>

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
#wrapper {
    max-width: 1200px;
    margin: 20px auto;
    clear: both;
    overflow: hidden;
}

.inner {
    background-color: white;
}

h1, h2, img {
    margin-bottom: 20px;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
}

img {
    margin: 0 auto;
    max-width: 100%;
    width: 800px;
}

main p {
    margin-bottom: 20px;
    padding-top: 2rem;
    line-height: 3rem; 
    font-size: 20px;
}

.genre {
    clear: both;
    text-align: left;
    color: white;
    margin: 0 1rem;
}

.genres {
    clear: both;
}

.genres li {
    margin: 0 3rem;
    color:white;
}
.genres li a {
    color: white;
}

footer {
    height: 60px;
    line-height: 60px;
    background: lightgrey;
    clear: both;
    margin-top: 5rem;
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

header {
    background: lightgrey;
    padding: 20px 0 ;
}

.inner-header {
    max-width: 100%;
    margin: 0px auto;
    overflow: hidden;
}

#logo {
    width: 200px;
    float: left;
    margin-left: 2rem;
}

nav ul {
    float: right;
    margin-top: 30px;
    list-style-type: none;
    margin-right: 30px;
}

nav li {
    float: left;
    margin-left: 30px;
}

nav a {
    text-decoration: none;
}

main {
    width: 55%;
    background: lightblue;
    margin: 3rem 2rem;
    float: left;
}

aside {
    width: 35%;
    margin-right: 5rem;
    margin-top: 3rem;
    background: lightsalmon;
    float: right;
}
    </style>
</head>
<body>
<header>
<div class="inner-header">
<a href="https://samsmolen.com/it261/">

<img id="logo" src="images/logo.png" alt="logo">    
</a>

<nav>
    <ul>
    <?php 
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                echo '<li><a style="color:red;" href=" '.$key.' ">'.$value.'</a></li>';
            } else {
                echo '<li><a style="color:green;" href=" '.$key.' ">'.$value.'</a></li>';
            }
        } // end foreach
        ?>
    </ul>
</nav>

</div>
<!-- end inner-header -->

</header>
    <main>
    <h1 style="padding:2rem;">My Daily Switch HW exercise for it261 week 3</h1>
    <?php 
    echo $genre;
    ?>
    
    <?php echo $content;?>
    </main>
    <aside><img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>"></aside>
    <h2 class ="genre">Not a Fan? Check out our other Daily Genres!</h2>
    <ul class="genres">
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
     </ul>
    
</div>
   </div> 
</body>
</html>
<?php
include('./includes/footer.php');

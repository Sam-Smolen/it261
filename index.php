<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPortal Page</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <header>
    <h1>
        <a href="index.php">Sam's Portal Page</a>
    </h1>
    <h2>Welcome to my IT261 Portal website</h2>
    </header>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="">Switch</a></li>
                <li><a href="">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
        <main>
        <h2 class="display__2">About Sam</h2>
        <img class="right" src="images/me.jpg" width="300px" height="350px" alt="Picture of me">
        <p class="about__me">
            A Little bit about me! <br>
            My name is Sam Smolen. I'm currently studying computer programming at Seattle Central College while also employed as a general contractor. My career interests in programming are in the backend rather than design. Although I want to learn how to build full stack applications. <br>I like to spend my freetime with my girlfriend, family or friends, and also my dog Moose. <br>Hobbies of mine would be playing video games, golfing, playing frisbee or working out.
        </p>
        <img class="left" src="images/mamp.png" width="1000px" height="500px" alt="mamp">
        <img class="left" src="images/mampError.png" width="1000px" height="500px" alt="mamp error">
        </main>
        <aside>
        <h2 class="display__2">Weekly Class Exercises</h2>
        <h3 class="display__3">Week 2</h3>
        <ul class="weekly__exercises">
            <li><a href="weeks/week2/var.php">var.php</a></li>
            <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
            <li><a href="weeks/week2/currency.php">currency.php</a></li>
            <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
            <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
        </ul>
        <h3 class="display__3" style="padding-top:5px;">Week 3</h3>
        <ul class="weekly__exercises">
            <li><a href="weeks/week3/about.php">about.php</a></li>
            <li><a href="weeks/week3/date.php">date.php</a></li>
            <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
            <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
            <li><a href="weeks/week3/if.php">if.php</a></li>
            <li><a href="weeks/week3/index.php">index.php</a></li>
            <li><a href="weeks/week3/switch.php">switch.php</a></li>
        </ul>
        </aside>
        <footer>
             <p><small>&copy; 2022 by 
                 <a href="contact.php">Sam Smolen</a>, All Rights Reserved ~ 
                 <a id="html-checker" href="#">Check HTML</a> ~ 
                 <a id="css-checker" href="#">Check CSS</a></small>
            </p>
           </footer>
    </div>
</body>
</html>
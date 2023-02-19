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
                <li><a href="website/daily.php">Switch</a></li>
                <li><a href="weeks/week4/troubleshoot.php">Troubleshoot</a></li>
                <li><a href="weeks/week5/calculator.php">Calculator</a></li>
                <li><a href="https://samsmolen.com/it261/website/contact.php">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>
        <main>
        <h2 class="display__2">About Sam</h2>
        <img class="right" src="images/me.jpg" alt="Picture of me">
        <p class="about__me">
            A Little bit about me! <br>
            My name is Sam Smolen. I'm currently studying computer programming at Seattle Central College while also employed as a general contractor. My career interests in programming are in the backend rather than design. Although I want to learn how to build full stack applications. <br>I like to spend my freetime with my girlfriend, family or friends, and also my dog Moose. <br>Hobbies of mine would be playing video games, golfing, playing frisbee or working out.
        </p>
        <img class="left" src="images/mamp.png" alt="mamp">
        <img class="left" src="images/mampError.png" alt="mamp error">
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
            <li><a href="weeks/week3/date.php">date.php</a></li>
            <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
            <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
            <li><a href="weeks/week3/if.php">if.php</a></li>
            <li><a href="weeks/week3/index.php">index.php</a></li>
            <li><a href="weeks/week3/switch.php">switch.php</a></li>
        </ul>
        <h3 class="display__3" style="padding-top:5px;">Week 4</h3>
        <ul class="weekly__exercises">
            <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
            <li><a href="weeks/week4/form1.php">form1.php</a></li>
            <li><a href="weeks/week4/form2.php">form2.php</a></li>
            <li><a href="weeks/week4/form3.php">form3.php</a></li>
            <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
            <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
        </ul>
        <h3 class="display__3" style="padding-top:5px;">Week 5</h3>
        <ul class="weekly__exercises">
            <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
            <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
            <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
            <li><a href="weeks/week5/currency4.php">currency4.php</a></li>
        </ul>
        <h3 class="display__3" style="padding-top:5px;">Week 6</h3>
        <ul class="weekly__exercises">
            <li><a href="weeks/week6/form.php">form.php</a></li>
            <li><a href="weeks/week6/form2.php">form2.php</a></li>
            <li><a href="weeks/week6/functions.php">functions.php</a></li>
        </ul>
        <h3 class="display__3" style="padding-top:5px;">Week 7</h3>
        <ul class="weekly__exercises">
            <li><a href="weeks/week7/form3.php">form3.php</a></li>
            <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
            <li><a href="weeks/week7/rand.php">rand.php</a></li>
            <li><a href="weeks/week7/strings.php">strings.php</a></li>
        </ul>
        </aside>
        <footer>
             <p><small>&copy; 2022 by 
                 <a href="contact.php">Sam Smolen</a>, <a id="html-checker" href="#top" target="_blank">Check HTML</a> ~
      <a id="css-checker" href="#" target="_blank">Check CSS</a>
            </p>
           </footer>
    </div>

    <script>
  document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
             
  document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>

</body>
</html>
<?php   
// this will be our people-view page, which of course starts with our include, pointing to our config, BUT NOT our header include!

include('config.php');

// is our get set - is it isset?

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:database.php');
}

// we will now select from the table who people id = id

$sql = 'SELECT * FROM scary_movies WHERE movie_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $movie_name = stripcslashes($row['movie_name']);
        $year_released = stripcslashes($row['year_released']);
        $country = stripcslashes($row['country']);
        $budget = stripcslashes($row['budget']);
        $occupation = stripcslashes($row['occupation']);
        $box_office = stripcslashes($row['box_office']);
        $director_name = stripcslashes($row['director_name']);
        $blurb = stripcslashes($row['blurb']);
        $plot = stripcslashes($row['plot']);
        $feedback = '';
    
    
    
    
    } // close while


} else { // end if statement

$feedback = 'There is a problem!!!';


} // end else

include('./includes/db_header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to Our Movie View Page!</h1>
    <h2><?php echo $movie_name;?></h2>
        <ul>
        <?php
        echo '
        <li><b>Director: </b>'.$director_name.'</li>
        <li><b>Year Released: </b>'.$year_released.'</li>
        <li><b>Country: </b>'.$country.'</li>
        <li><b>Budget: </b>'.$budget.'</li>
        <li><b>Box Office: </b>'.$box_office.'</li>
        <li>
        <p class="blurb">'.$blurb.'</p>
        </li>
        ';
        ?>
        </ul>
        <p><a href="database.php">Return to the movie page!</a></p>




</main>

<div class="db-view">

<figure>
<img src="./images/movie<?php echo $id ;?>.png" alt="<?php echo $movie_name ;?>">
<figcaption>
<?php
echo '
'.$movie_name.' | '.$director_name.', | '.$year_released.' --

';
?>
</figcaption>
</figure>
<p class="plot"><i><?php
echo $plot;
?></i></p>
</div>

<?php
// we are going to release the server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);



?>



</div>
<!-- end wrapper -->


<?php
include('./includes/footer.php');

<?php 
// my database assignment for week 9, my topic - scary movies!
include('config.php');
include('./includes/db_header.php');

?>
<div id="wrapper">
<main> 
<h1>My week 9 Database HW! <br>Scary Movies!</h1>
<?php 
$sql = 'SELECT * FROM scary_movies';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0)  {

while($row = mysqli_fetch_assoc($result)) {

echo '
<h2>'.$row['movie_name'].' ('.$row['year_released'].')</h2>

';



} // end while


} else { // end if number of rows is greater than 0
echo 'Nobody is home!';
}

@mysqli_free_result($result);


@mysqli_close($iConn);

?>

</main>

<aside>

<h3>This is my aside</h3>
<aside>
    <h3>Check out these other titles!</h3>
    <?php
    $photos[0] = 'scary1';
    $photos[1] = 'scary2';
    $photos[2] = 'scary3';
    $photos[3] = 'scary4';
    $photos[4] = 'scary5';

    $i = rand(0, 4);
    $my_image = ''.$photos[$i].'.png';
    echo '<img src="./images/'.$my_image.'" alt="'.$photos[$i].'">';

    ?>
</aside>
</div>
<?php
include('./includes/footer.php');
?>
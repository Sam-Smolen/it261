<?php
// errors page which will be using a for each loop
// we are going to be counting errors
// if we have more than ZERO errors, not a good thing, we will need to echo our message
include('./includes/header.php');

if(count($errors) > 0) : ?>
<div class="error">
<?php foreach($errors as $error) : ?>
<p class="errors">
<?= $error ?>
</p>
<?php endforeach; ?>
</div>
<!-- end div error -->


<?php endif; ?>
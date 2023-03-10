
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <fieldset>
    <legend>Complete Your Order</legend>

    <label>First Name</label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
    <span class="error"><?php echo $first_name_err ;?></span>    
    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
    <span class="error"><?php echo $last_name_err ;?></span>
    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
    <span class="error"><?php echo $email_err ;?></span>
    <label>Phone</label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
    <span class="error"><?php echo $phone_err ;?></span>
    
    <label>Toppings</label>
    <ul>
    <li>
    <input type="checkbox" name="toppings[]" value="pep" <?php if(isset($_POST['toppings']) && in_array('pep', $toppings)) echo 'checked="checked"';?>>Pepperoni
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="olives" <?php if(isset($_POST['toppings']) && in_array('olives', $toppings)) echo 'checked="checked"';?>>Olives
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="gpep" <?php if(isset($_POST['toppings']) && in_array('gpep', $toppings)) echo 'checked="checked"';?>>Green Peppers
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="rpep" <?php if(isset($_POST['toppings']) && in_array('rpep', $toppings)) echo 'checked="checked"';?>>Red Peppers
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="onions" <?php if(isset($_POST['toppings']) && in_array('onions', $toppings)) echo 'checked="checked"';?>>Onions
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="sausage" <?php if(isset($_POST['toppings']) && in_array('sausage', $toppings)) echo 'checked="checked"';?>>Sausage
    </li>
    <li>
    <input type="checkbox" name="toppings[]" value="mushrooms" <?php if(isset($_POST['toppings']) && in_array('mushrooms', $toppings)) echo 'checked="checked"';?>>Mushrooms
    </li>
    </ul>
    <span class="error"><?php echo $toppings_err;?></span>

    <label>Choose Size</label>
    <select name="size">

    <option value="" NULL <?php if(isset($_POST['size']) && $_POST['size'] == NULL) echo 'selected="unselected"';?>>Select one</option>

    <option value="small" <?php if(isset($_POST['size']) && $_POST['size'] == 'small') echo 'selected="selected"';?>>Small</option>

    <option value="medium" <?php if(isset($_POST['size']) && $_POST['size'] == 'medium') echo 'selected="selected"';?>>Medium</option>

    <option value="large" <?php if(isset($_POST['size']) && $_POST['size'] == 'large') echo 'selected="selected"';?>>Large</option>

    <option value="x-large" <?php if(isset($_POST['size']) && $_POST['size'] == 'x-large') echo 'selected="selected"';?>>Extra Large</option>
    
    </select>
    <span class="error"><?php echo $size_err ;?></span>

    <label>Additional Comments or Instructions (not required.)</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>

    <label>Privacy</label>
    <ul>
        <li>
        <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"';?>>Privacy
        </li>
    </ul>
    <span class="error"><?php echo $privacy_err ;?></span>
    <input type="submit" value="Place my Order!">

    <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="reset">

    </fieldset>
</form>
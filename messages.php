<?php
    $errors=['Reset Password']; /* this is an array, containing errors */
    if (count($errors) >0):
?> 
<div class="error"> 
    <?php foreach($errors as $error):?>
    <p><?php echo $error; ?></p> <?php endforeach ?> 
</div> 
<?php endif ?>
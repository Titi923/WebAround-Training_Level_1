<?php
    $islogged = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Different php</title>
</head>
<body>
    <?php
        if ($islogged || !$islogged) {
    ?>
    <h1 class="both">This content is for both</h1>
    <p>members and non-member</p>
    <?php
    }
    ?>
    
    <?php
    if ($islogged) {        
        ?>
    <h1 class="Member">You are a member</h1>
    <?php
}   
    ?>
    
    <?php
    if (!$islogged) {        
        ?>
    <h1 class="Non-Member">You are not a member</h1>
    <?php
}   
    ?>
</body>
</html>
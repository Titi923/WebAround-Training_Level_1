<?php
function copyright()
{
    $release_year = 2019;
    $current_year = date('Y');
    if ($release_year == $current_year) {
        $final = "&copy $current_year";
    } else {
        $final = "&copy $release_year - $current_year";
    }
    return $final;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 7-copyright</title>
</head>

<body>
    <h1>
        <?= copyright(); ?>
    </h1>
</body>

</html>
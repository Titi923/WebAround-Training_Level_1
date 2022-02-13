<?php
$rest_name = "Pizza Riba";
$arr = ['Pizza', 'Burger', 'Pasta'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge_1 Emmbed php in html</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <h1><?= $rest_name ?></h1>
    <h2>Today's speciality is <?= $arr[0] ?></h2>
</body>

</html>
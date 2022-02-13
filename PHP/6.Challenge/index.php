<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Challnge_1/6.Challenge/style.css">
    <title>Multiplication table</title>
</head>

<body>
    <table>
        <?php
        for ($row = 1; $row <= 10; $row++) {
            echo '<tr>';
            for ($a = 1; $a <= 10; $a++) {
                echo "<th>&nbsp;";
                echo $a * $row;
                echo "</th>";
            }
            echo '</tr>';
        }
        ?>
        <!-- <th>A</th>
        <th>B</th>
        <th>C</th>
        <tr>
            <th>a
            <th>b</th>
            </th>
        </tr>
        <tr>
            <th>b</th>
        </tr>
        <tr>
            <th>c</th>
        </tr> -->
    </table>
</body>

</html>
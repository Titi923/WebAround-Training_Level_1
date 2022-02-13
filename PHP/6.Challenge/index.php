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
        <!-- First row of the table! -->
        <?php
        echo '<tr>';
        echo '<th> </th>';
        for ($col = 1; $col <= 10; $col++) {
            echo "<th>$col</th>";
        }
        echo '</tr>';
        // Create rest of rows
        for ($row = 1, $col = 1; $row <= 10; $row++) {
            echo '<tr>';
            // First cell
            if ($col == 1) {
                echo "<th>$row</th>";
            }
            while ($col <= 10) {
                echo '<td>', $row * $col++, '</td>';
            }
            echo '</tr>';
            // Reset col at the end of each row
            $col = 1;
        }
        ?>
    </table>
</body>

</html>
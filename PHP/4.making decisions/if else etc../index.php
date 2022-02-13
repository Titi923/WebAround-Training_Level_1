<?php
$rest_name = "Pizza Riba";
$num = 19;
if ($num <= 18) {
    echo "minor is true";
} elseif ($num >= 18 and $num <= 50) {
    echo 'adult';
} else {
    echo "I don't care about your age you can eat at $rest_name !";
}

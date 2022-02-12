<?php
    $total_minutes = 134;
    $minutes = $total_minutes % 60;
    $hours = $total_minutes / 60;
    $hours = floor($hours);
    echo "time taken was $hours hours and $minutes minutes"
?>
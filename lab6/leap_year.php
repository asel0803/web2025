<?php
if (isset($_GET['year'])) {
    $year = $_GET['year'];
    if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) { 
        // остаток деления на 4 равен 0, остаток деления на 100 не равен  0 
        // или остаток от деления на 400 = 0
        echo "Leap";
    } else {
        echo "Not leap";
    }
}
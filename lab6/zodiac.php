<?php
if (isset($_GET['date'])) {
    $date = explode('-', $_GET['date']);
    echo $date[2], ' ', $date[1],' ', $date[0], ': '; //dd mm yyyy
    if ((($date[1] == 3) && ($date[2] >= 21)) || (($date[1] == 4) && ($date[2] <= 20))) {
        echo 'Овен';
    }
    if ((($date[1] == 4) && ($date[2] >= 21)) || (($date[1] == 5) && ($date[2] <= 20))) {
        echo 'Телец';
    }
    if ((($date[1] == 5) && ($date[2] >= 21)) || (($date[1] == 6) && ($date[2] <= 21))) {
        echo 'Близнецы';
    }
    if ((($date[1] == 6) && ($date[2] >= 22)) || (($date[1] == 7) && ($date[2] <= 22))) {
        echo 'Рак';
    }
    if ((($date[1] == 7) && ($date[2] >= 23)) || (($date[1] == 8) && ($date[2] <= 23))) {
        echo 'Лев';
    }
    if ((($date[1] == 8) && ($date[2] >= 24)) || (($date[1] == 9) && ($date[2] <= 23))) {
        echo 'Дева';
    }
    if ((($date[1] == 9) && ($date[2] >= 24)) || (($date[1] == 10) && ($date[2] <= 23))) {
        echo 'Весы';
    }
    if ((($date[1] == 10) && ($date[2] >= 24)) || (($date[1] == 11) && ($date[2] <= 22))) {
        echo 'Скорпион';
    }
    if ((($date[1] == 11) && ($date[2] >= 23)) || (($date[1] == 12) && ($date[2] <= 21))) {
        echo 'Стрелец';
    }
    if ((($date[1] == 12) && ($date[2] >= 22)) || (($date[1] == 1) && ($date[1] <= 20))) {
        echo 'Козерог';
    }
    if ((($date[1] == 1) && ($date[2] >= 21)) || (($date[1] == 2) && ($date[2] <= 19))) {
        echo 'Водолей';
    }
    if ((($date[1] == 2) && ($date[2] >= 20)) || (($date[1] == 3) && ($date[2] <= 20))) {
        echo 'Рыбы';
    }
}
<?php
$arr = ['1'=>'Monday', '2'=>'Tuesday', '3'=>'Wednesday', '4'=>'Thursday', '5'=>'Friday', '6'=>'Saturday', '7'=>'Sunday',];
$day = 6;
foreach ($arr as $kay=>$value) {
    if ($kay == $day) {
        echo '<em>' . $value . '</em>' . '<br>';
    }
    else echo $value . '<br>';
}
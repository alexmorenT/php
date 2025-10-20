<?php

// crear factorial

$num = $_GET["id"];

function factorial ($num) {
    if ($num < 10){
        return ($num % 10);
    } else {
        return ($num % 10) + factorial($n / 10);
    }
    
 }

echo "$num";

?>
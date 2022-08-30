<!-- Program to print the given format -->

<?php

$size = 5;
$temp = 0;

for ($i = 1; $i <= $size; $i++) {
    echo "<br>";
    $temp += $i;
    for ($j = 1; $j <= $temp; $j++) {
        echo "*";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "0";
    }
}

?>
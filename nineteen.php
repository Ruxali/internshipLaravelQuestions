<!-- Program to makes square format using * -->

<?php
$size = 5;

for ($i = 1; $i <= $size; $i++) {
    echo "<br>";
    if ($i == 1 || $i == $size) {
        for ($j = 1; $j <= $size; $j++) {

            echo "*";
        }
    } else {
        for ($j = 1; $j <= $size; $j++) {
            if($j == $size || $j == 1){
                echo "*";
            }
            else{
                echo "+";
            }            
        }
    }
}
?>
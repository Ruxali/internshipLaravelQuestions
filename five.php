<!-- Program to print number in descending number -->

<?php
    function descOrder($number){

        $num = $number;
        while($num != 1){
            echo "$num <br>";

            $num = $num-1;
        }
        return $num;
    }

    $number = 6;
    echo "The descending order for first $number numbers is: <br>",descOrder($number);
?>
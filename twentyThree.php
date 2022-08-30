<!-- Program to find LCM of two numbers -->

<?php
    //initialize two numbers
    $num1 = 20;
    $num2= 30;

    if($num1 > $num2){
        $temp = $num1;
    }else{
        $temp = $num2;
    }

    for($i=1; $i<=$temp; $i++){
        if($num1 % $i == 0 && $num2 % $i == 0){
            $hcf = $i;
        }
    }

    $lcm = ($num1 * $num2) / $hcf;

    echo "The LCM of $num1 and $num2 is: $lcm";
?>
<!-- Program to find Highest Common Factor (HCF) of two numbers -->

<?php
    //initialize two numbers
    $num1 = 24;
    $num2= 48;

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

    echo "The HCF of $num1 and $num2 is: $hcf";
?>
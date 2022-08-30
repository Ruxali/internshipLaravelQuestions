<!-- Program to check if a number is Prime or not -->

<?php
    // function to check if the number is prime or not
    function primeNumber ($number){

        if($number == 1){
            return 0;
        }

        for($i=2; $i< $number; $i++){
            if($number % $i == 0){
                return 0;
            }else{
                return 1;
            }
        }
    }
    
    //input value
    $number = 137;
    $flag = primeNumber($number);

    //check if prime or not
    if($flag == 1){
        echo "The given number ($number) is Prime
                as it can only be divided by 1 and itself.";
    }else{
        echo "The given number ($number) is not Prime
                as it can be divided by 1,itself and other numbers as well.";
    }
?>
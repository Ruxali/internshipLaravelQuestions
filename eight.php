<!-- Program to find if the provided year is leap year or not -->

<?php
    //function to check if the year is leap year
    function leapYear ($year){

        $rem = $year % 4; // check the remainder
        if($rem == 0){
            return 1;
        }else{
            return 0;
        }
    }
    
    //input value
    $year = 2016;
    $flag = leapYear($year);

    //check if prime or not
    if($flag == 1){
        echo "The given year ($year) is Leap year.";
    }else{
        echo "The given year ($year) is not Leap year.";
    }

?>
<!-- Program to print Factorial of any number -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
    <!-- //HTML form to take input from user -->
    <form method="POST">
        <label>Enter any positive integer:</label>
        <input type="number" name="number" id="num"> <br> <br>
        <input type="submit" name="Submit"><br>
    </form>

    <!-- Php code to find the factorial of user input number -->
    <?php
        if($_POST){
            $factorial = 1;

            $inputNum = $_POST['number'];
            echo "The factorial of $inputNum: &nbsp";

            for($i = 1; $i <=$inputNum; $i++){
                $factorial = $factorial*$i;
            }
            echo $factorial ;
        } 
    ?>
</body>
</html>
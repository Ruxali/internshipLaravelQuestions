<!-- Program to concatenate two string -->

<?php
$string1 = "HELLO";
$string2 = "WORLD";

//split strings into array
$array1 = str_split($string1);
$array2 = str_split($string2);
//before concatenation
echo "Before Concatenation: <br>";
echo $string1, "<br>";
echo $string2, "<br> <br>";

//concatenation process
echo "After Concatenation: <br>";

$count = max(array(count($array1), count($array2)));
$result =" ";
for ($i = 0; $i <= $count; $i++) {
        if (array_key_exists($i, $array1) ) {
            $result .= $array1[$i];
        }
        if(array_key_exists($i, $array2)){
            $result .= $array2[$i];
        }
}

echo $result;
?>
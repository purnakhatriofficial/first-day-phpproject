<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP practice</title>
    <style>
        div{
            font-size:2rem;
            text-align:center;
            color:white;
            background-color:darkblue;
            padding:1rem
        }
    </style>
</head>
<body>
<div>
<?php

$number1 = 20;
$number2 = 30;

$sum = $number1+$number2;

echo "The sum is " . $sum;

echo "<br>";


$num1 = 50;
$num2 = 10;
$sub =  $num1 - $num2;
echo "The subtraction is " . $sub;

echo "<br>";

$num1 = 12;
$num2 = 15;
$multi = $num1 * $num2;
echo "The Multiplication is " . $multi;

echo "<br>";

$num1 =  1450;
$num2 = 14;
$division =  $num1/$num2;
echo "The divisions number is " . $division;

echo "<br>";

$condition =  True;
echo  var_dump($condition);

$number = 19;
echo  var_dump($number);
$names = "purna";
echo  var_dump($names);
$ko =  10.5;
echo var_dump($ko);


$Fname = "Purna Bahadur ";
$Lname = "Khatri";
$age = 22;
$weight = 65;
 $marrid = "Single";

 echo "My name is " . $Fname . "" . "I age is " .  $age. ". I have weight "  . $weight. ". I have a " . $marrid;


 define ("name" , "Purna Bahadur Khatri");
 echo name;

?>
   </div> 
</body>
</html>
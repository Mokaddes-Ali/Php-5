<?php

//function practise
function big(){         //without parameter
    echo "big";
}
big();
echo "</br>";
//function example use parameter
$num = 26;
function bigNumber($num){            //with parameter
    echo "This is a big number $num";
}
bigNumber(45);
echo "</br>";
bigNumber(14500);
echo "</br>";
bigNumber(255000);
echo "</br>";
//function example two parameters
function showCopyright($holder , $period){
    echo "Copyright &copy; $holder . All Rights Reserved . $period";
}
showCopyright("Mokaddes Ali", "2012-2030");
echo "</br>";
//funtyion return any result
function myMath($num1, $num2){
    $result = $num1 * $num2;
    return $result;
    echo "result print";
}
echo myMath(9, 8);
echo "</br>";
echo "</br>";
//use function calculate even or Odd numbers
function evenOrood($n){
    if ($n % 2 == 0){
        return true;
    }else {
        return false;
    }
}

$y =  25;
if(evenOrood($y)){
    echo "{$y} is even number";
}
else {
    echo "{$y} is odd number";
}
echo "</br>";
echo "</br>";
//type hinding in function
echo "type hinding sum of function:-" . "\n";
function sumNum( float $a, int $b, int $c){
$sum = $a + $b + $c;
echo $sum . "\n";
}
sumNum(6.5, 7, 8);
echo "</br>";
echo "</br>";

//unlimited argument conut in function
function sum (...$numbers){
       $sum = 0;
       for($i=0;$i< count($numbers);$i++){
        $sum += $numbers[$i];
}
echo $sum;
}
sum (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "</br>";
echo "</br>";
//Ricarsive function
echo "This is ricarsive function:-" . "\n";
function printNumber($n){
     if($n > 10){
         return;
     }
     echo $n . " ";
     printNumber($n + 1);

 }

 printNumber(0);
 echo "</br>";
 echo "</br>";

 //pHp swapping

 $a = 15;
 $b = 20;
 echo "\nThe number before swapping is:\n";
 echo "Number a =" . $a . " and b=" . $b;
 echo "</br>";
     $temp = $a;
     $a = $b;
     $b = $temp;
echo "\nThe number after swapping is:: \n";
echo "Number a =" . $a . " and b=" . $b . "\n";
echo "</br>";
echo "</br>";
//Make Fibonacci Series using functions
//0 1 1 2 3 5 8 13 21;
echo "This series is a Fibonacci series:-" . "\n";
function fibonacci($old, $new, $start, $end){
    if($start > $end){
        return;
    }
    $start++;
    echo "$old" . " ";
    $temp = $old + $new;
    $old = $new;
    $new = $temp;
    fibonacci($old, $new, $start, $end);
}
fibonacci(0, 1, 1, 10);

//Time and Date
echo "</br>";
echo "</br>";
echo "Date and Time:-" . "\n";
echo date ("l F Y-m-d H:i:s",);
7<?php

/*
$array = ['Ayusha','Adhikari feels stupid'];
print_r($array);
echo "Hello";
echo "<h2> Taking multiple "," Argument at once </h2>";
echo 'hi'.'babe <br>';
echo strpos("ayusha is hii <br>","is");
$y = "ayusha is ayusha so ayushaaaaaaaaaaaaaaa";
echo "<br>";
echo strtoupper($y);
echo "<br>";
echo str_replace("ayusha","Adhikari",$y);
echo"<br>";
echo $y ='Ayusha has so called \'Life\' in here';
echo"<br>";
echo "His Nona has the family heirloom \"Ruby\" in Burgundy";
echo"<br>";
$no = 400;
var_dump(is_int($no));
$x = 59.85;
var_dump(is_int($x));

$score = 95;

var_dump($score >= 95); // This will output bool(true)
var_dump($score < 95);  // This will output bool(false)

if ($score >= 95) {
    echo "YOU HAVE PASSED";
} else {
    echo "U FAILED";
}
*/
/*
$a = 5;            // Integer
$b = 5.31;         // Float
$c = "HII how are u"; // String
$d = true;         // Boolean
$e = NULL;         // NULL

// Type Casting
$a = (string)$a;   // Convert integer to string
$b = (float)$b;    // Convert float to float (redundant, no change)
$c = (string)$c;   // Convert string to string (redundant, no change)
$d = (bool)$d;     // Convert boolean to boolean (redundant, no change)
$e = (string)$e;   // Convert NULL to string (results in an empty string)

// Output the types and values
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
*/
#PHP CONSTANTS
/*
define("Welcome", "HELLO TO THE WEBSITE"); #define(name, value);
echo Welcome;
echo "<br>";

const CAR ="Mercedes";
echo CAR;

define("cats", [
    "British Short hair", 
    "Bengal", 
    "Maine Coon", 
    "Birman"
]);

for ($x = 0; $x < count(cats); $x++) {
    echo cats[$x] . "<br>";
}*/
/*
echo "MAGIC CONSTANT";
echo __DIR__;
*/
/*
$favcolor ="red";

switch($favcolor){
    case "red":
        echo "FAV IS RED";
        break;
    case "Bluue":
        echo "Fav is blue";
        break;
    default:
    echo "Your fav is nnada";
}*/
$y ='Ayusha';
$i = 0;
while($i<=strlen($y)){
    echo substr($y,0,$i);
    echo"<br>";
    $i++;
}
?>

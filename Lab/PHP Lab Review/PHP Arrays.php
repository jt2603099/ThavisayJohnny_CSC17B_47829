<!DOCTYPE html>

<html>

<?php
// Exercise 1
$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);

// Exercise 2
echo $fruits[1];

// Exercise 3
$age = array("Petter" => "35", "Ben" => "37", "Joe" => "43");

// Exercise 4
echo "Ben is " . $age['Ben'] . "    years old.";

// Exercise 5
foreach ($age as $x => $y) {
    echo "Key=" . $x . ", Value=" . $y; 
}

// Exercise 6
$colors = array("red", "green", "blue", "yellow"); 
sort($colors);

// Exercise 7
$colors = array("red", "green", "blue", "yellow"); 
rsort($colors); //sort array descending alphabetically

// Exercise 8
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age); // sort array according to values

?>



</html>
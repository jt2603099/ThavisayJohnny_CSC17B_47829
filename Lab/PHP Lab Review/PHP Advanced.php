<!DOCTYPE html>
<html>

<?php
// Exercise 1
include "footer.php";

// Exercise 2
echo readfile("webdict.txt");

// Exercise 3
$myfile = fopen("webdict.txt", "r");

while(!feof($myfile)) {
  echo fgetc($myfile);
}   

// Exercise 4
setcookie("username", "John", time() + (86400 * 30), "/");

// Exercise 5
$_SESSION["favcolor"] = "green";


// Exercise 6
echo $_SESSION["favcolor"];
?>

</html>
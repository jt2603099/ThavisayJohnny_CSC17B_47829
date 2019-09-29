<!DOCTYPE html>
<html>

<?php

// Exercise 1
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}

// Exercise 2
do {
    echo $i;
    $i++;
} while ($i < 6);

// Exercise 3
for ($i = 0; $i < 9; $i++) {
    echo $i;
}
// Exercise 4
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo $x;
}

?>

</html>
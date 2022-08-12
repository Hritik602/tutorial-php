<?php

// $str = "Hello welcome to my page ";
// $num = 5;
// $float = 6.8;

// echo "<h1>" . $str . "<h1>";
// echo "<h2>" . $num . "<h2>";
// echo "<h3>" . $float . "<h3>";

// $laptops = array("Laptop", "car", "BMW");
// echo var_dump($laptops[1]);


// define("Greeting", ["Welcome", "to my page"]);
// echo (Greeting[0]);
$var = 1;

if ($var > 7) {
    echo "It is greater than  $var";
} else {
    echo "It is smaller $var";
}
while ($var <= 10) {
    echo "Hello $var" . "<br>";
    $var++;
}
function name()
{
    $var = 1;
    for ($var; $var <= 10; $var++) {
        echo "heloo $var" . "<br>";
    }
}

name();

<?php

$handle = fopen ("php://stdin","r");

// Level 1



// Level 2
$str = fgets($handle);

if (strlen($str) > 2) {
    echo "Check :)";
}


// Level 3

$fizz = fgets($handle);
$buzz = fgets($handle);
$end = fgets($handle);



for($i=1;$i<=$end;$i++)
{
    if (!($i % $buzz) && !($i % $fizz)) {
        echo "FB ";
    } elseif (!($i % $buzz)) {
        echo "B ";
    } elseif (!($i % $fizz)) {
        echo "F ";
    } else {
        echo "$i ";
    }
}

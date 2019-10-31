<?php
echo "Give me the mark!\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

if ($mark == 5) {
    echo "YeeeeWhaaaa!!!!";
}
elseif ($mark == 4) {
    echo "I am good :)";
}
elseif ($mark == 3) {
     echo "OK :(";
}
elseif($mark == 2) {
 echo "I am better!!" 
}
else  echo "Good luck";

echo "\n"
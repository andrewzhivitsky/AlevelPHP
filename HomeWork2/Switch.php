<?php

echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);                     

switch($number) {
	case ($number > 100): 
	echo "Thanks MAN!";
	break;

	 case ($number > 10) && ($number < 100):
	 echo "OK :(";
	 break;

	 case ($number < 100):
	 echo  "WHAAAAT????";
	 break;
}
echo "\n";
<?php

echo "Choose Your number)\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number = 77){
	echo "YOU Win;)";
}
elseif (($number > 7) && ($number < 77)); {
	echo "So close bro)";
}
else echo "You can try it next time";
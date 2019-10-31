<?php
echo "4+4=?\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo($input == 8) ? "GOOD JOB!" : "Think about it(";

echo "\n";

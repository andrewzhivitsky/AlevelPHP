<?php
$a = array(
'first' =>  2,
'secound'=> 4,
'third' => 5);
 foreach($a as $k => $v);
 $v = array_sum($a);
 if ($v % 3 == 2){
 	echo "True" . PHP_EOL; 
 }
 if ($v%3 != 2){
 	echo   "False" . PHP_EOL;
 	 }

 
<?php

$number =97;
if($number > 0 & $number%2!=0) {
 foreach ((range (1 , $number)) as $value) {
  $tt = $number - $value;
  $first = str_repeat ( " " , $tt);
  print_r ($first);
  $sec =  str_repeat ( "* " , $value) . PHP_EOL;
  print_r ($sec);
 }
 foreach ((range ($number-1, 1)) as $value) {
  $tt = $number - $value;
  $first = str_repeat ( " " , $tt);
  print_r ($first);
  $sec =  str_repeat ( "* " , $value) . PHP_EOL;
  print_r ($sec);
 }
}
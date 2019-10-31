<?php

$supermarket = [soda, water, bread, cheese, meat];
//$rock = range('a', 'z');
foreach ($supermarket as $tmp) {
	$ttt = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
foreach ($ttt as $c) {
	$chr[$c] = isset($chr[$c]) ? $chr[$c] + 1 : 1;
}
}
print_r($chr);
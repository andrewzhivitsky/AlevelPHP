<?php

$first = ['fasdfsa', 'adsfafgs', 'dagfasgas', 'asacc'];
$sec = ['adsv2asvas', 'dfafdas', 'dsfasfa', 'afasscsa'];

function length($first, $sec)
{
	if (count($first) == count($sec)){
		foreach ($first as $value) {
			$x = iconv_strlen($value);
			$afirstscore[] = $x;
		}

		foreach ($sec as $value2) {
			$y = iconv_strlen($value2);
			$secscore[] = $y;
		}
		
		for ($i=0; $i < count($first); $i++) { 
			$z = abs($firstscore[$i]-$secscore[$i]);
			$result[$i] =$z;
		}
		return $result;
	}
	else echo("FALSE");
}
print_r(length($first, $sec));
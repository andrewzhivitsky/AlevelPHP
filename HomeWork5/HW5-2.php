<?php

 $n = range(1, 1000);

    function prime($n){
        $sum = 0;
        foreach($n as $k => $v) {
            $counter = 0; 
            for($j = 1; $j <= $v; $j++) { 
                if($v % $j == 0)
                    $counter++;

            }

            if($counter == 2) {
                echo $v .  " , " ;
                $sum += $v;
            }

        }
        echo "Sum: " . $sum . PHP_EOL;

    }

    prime($n);

<?php

function printDiamond($n){
    for ($i=1 ; $i <= $n; $i++) {
        $center = ($n + 1) / 2 ;
        for ($j=1; $j <= $n ; $j++) {
            if ($i > $center){
                echo ( ($center -1 + $j) < $i || ($i + $j) > ($center + $n) )? 1: '*';
            } else {
                echo ( ($i + $j) < ( $center + 1 ) || $j > ($center -1 + $i) )? 1: '*';
            }
        }
        echo "<br>";
    }
}

printDiamond(7);


?>
<?php 

function mat($a, $b){                    
    $g = $a + $b;
    if ($g % 2 == 0) {
     return $g;   
    } else {
        return $g / 2;
    }
} 
echo  mat(4,10); echo "</br>";
echo  mat (3,8);




?>
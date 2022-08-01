<?php

// problem 3 

$salaries = array(15000 ,1500.50,5859.90) ;

foreach ($salaries as &$s) 
{

 if(is_float($s))
 {
    $s = round($s) ; 
    $s = number_format($s) ;
 }


}

print_r($salaries) ; 
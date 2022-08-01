<?php

// problem 6

$number = 553434 ; 
$counter = 0 ; 
$divisor =10 ; 
do {
    $result =$number /$divisor ; 
    echo "<br>.$result";
    $divisor*=10 ; 
    $counter++ ; 
} while ($result > 1);
echo "<br>" ;
echo $counter ; 


?>
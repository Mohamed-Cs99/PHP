<?php
$nums  = range(10,20) ; 

unset($nums[3]); 


$nums = array_values($nums) ; 

print_r($nums) ;
echo "<br>" ;

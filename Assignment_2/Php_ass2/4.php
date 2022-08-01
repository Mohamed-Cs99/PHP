<?php

// problem 4  generate random password 

$length =10; 

$password ='' ; 

for ($i=0; $i <$length ; $i++) { 
  
 $r =rand(33,126) ; 
 $newChar = chr($r) ;

 $password.=$newChar  ; 
    
}
echo "<br>" ;
print($password) ;
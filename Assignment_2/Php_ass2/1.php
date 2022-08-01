<?php


$names =array("Ahmed","Youssef","Ebtsaaam","Ebrahim","mohammed") ; 

$max  = $names[0]; 

// for($i = 0 ;$i<count($names) ; $i++)
// {
//     if(strlen($names[$i])>strlen($max))
//     {
//         $max=$names[$i] ; 
//     }
// }

foreach ($names as $name)
{
    if(strlen($name)>strlen($max))
    {
        $max = $name ;
    }
}

echo $max."<br>";
echo "<br>" ;
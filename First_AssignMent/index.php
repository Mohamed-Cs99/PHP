<?php

$hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
$textStr=pack("H*", $hexMessage);
echo("$textStr"); 
echo ("<br>");
echo ("<br>");
/************************* */
$htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
echo strip_tags($htmlContent);
echo ("<br>");
echo ("<br>");
/**************** */
$username = "  Kareem Fouad ";
echo trim("$username");
echo ("<br>");
echo ("<br>");
$num = 15023198.91;
$fnum=number_format($num,2);
echo ($fnum);
echo ("<br>");
echo ("<br>");
/********************* */
$employeePositions = [
    'kareem fouad' => 'backend',
    'ahmed bahnasy' => 'frontend',
    'mohammed nabeel' => 'android',
];

$Employeek=array_keys($employeePositions);
$Employeev=array_values($employeePositions);
print_r($Employeek);
echo("<br>");
print_r($Employeev);
echo("<br>");
/****************************/
$nums = [4, 7, 1];
list($x,$y,$z)=$nums;
echo $x," ",$y," ",$z;
echo ("<br>");
/*************************** */
$userData = [
    'name' => 'kareem',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];

extract($userData );
echo $name ," ", $job," ", $language," ", $framework;
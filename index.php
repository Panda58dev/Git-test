<?php

$arr = array('0' => "a", '1' => "b", '2' => "c", '3' => "d");
var_dump($arr);
echo "</br> $arr[0], $arr[1], $arr[2] </br>";
echo "$arr[0]+$arr[1], $arr[2]+$arr[3]";
$num = array('0' => 2, '1' => 5, '2' => 3, '3' => 9);
$num_r1 = $num[0]*$num[1];
$num_r2 = $num[2]*$num[3];
$result = $num_r1+$num_r2;
echo "</br> $result </br>";
$money = array('Коля' => "1000$", 'Вася' => "500$", 'Петя' => "200$");
echo $money['Петя']."</br>".$money['Коля'];

?> 

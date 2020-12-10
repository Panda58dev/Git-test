<?php 

//тест массивов
$array[0] = NULL;
$array[1] = 'b'; 
echo $array[0]."</br>";

$Array = array('a' =>'1+1=2');
echo $Array['a']."</br>";
$array[0] = NULL;

echo "</br>";
// тест условных операторов 
if ($array[0] == 'a') {
    echo  "{ $array[0] } это ячейка массива";
} elseif ($array[0] == NULL) {
    echo "{ $array[0] } это ячейка массива с значение NULL</br>";
} else {
    echo "В $array нету ячейки [0] </br>";
}


//тест блок-схемы
$S = 0;
$i = 1;

while ($i <= 5) {
	$S = $i*$i+$S;
	$i ++;
}
echo $S;
?>
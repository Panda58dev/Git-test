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

//присваиваю случайные значения
$num1 = mt_rand(1, 1000);
$num2 = mt_rand(1, 1000);

//нахожу результат
$result = $num1 + $num2;
$result = $result / 2;

//вывод результата
echo "Среднее арифметическое $num1 и $num2: $result </br>";

$num1 = 1;
for($i = 0; $i < 1000; $i++) {
	$num = $num + $num1;
	$num1++;
}
$num = $num / 1000;
echo "$num</br>";

//use swintch
$string = "abcd";

switch ($string[0]) {
    case 'a':
        echo "да</br>";
        break;
    
    default:
        echo "нет</br>";
        break;
}

//определение високосного года
$year = 2004;

if ($year % 4 ) {
    echo "$year не високосный </br>";
} else {
    echo "$year високосный </br>";
}

//сумма цифр в чесле 
$num = "123124";
echo $num[0] + $num[1] + $num[2]."</br>";

$num1 = $num[0] + $num[1] + $num[2];
$num2 = $num[3] + $num[4] + $num[5];

switch ($num1) {
    case "$num2":
        echo "да </br>";
        break;
    
    default:
        echo "нет</br>";
        break;
}

  
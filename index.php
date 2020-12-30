<?php
echo "<title>TEST!</title>";
$arr = array('0' => "a", '1' => "b", '2' => "c", '3' => "d");
echo "<pre>"; var_dump($arr); echo "</pre>";
echo "</br> $arr[0], $arr[1], $arr[2] </br>";
echo "$arr[0]+$arr[1], $arr[2]+$arr[3]";
$num = array('0' => 2, '1' => 5, '2' => 3, '3' => 9);
$num_r1 = $num[0]*$num[1];
$num_r2 = $num[2]*$num[3];
$result = $num_r1+$num_r2;
echo "</br> $result </br>";
$money = array('Коля' => "1000$", 'Вася' => "500$", 'Петя' => "200$");
echo $money['Петя']."</br>".$money['Коля']."</br>";

//многомерный массив
$mult_arr = array(
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
);
echo "<pre>"; var_dump($mult_arr); echo "</pre></br>";
echo $mult_arr['cms'][0].", ".$mult_arr['cms'][2].", ".$mult_arr['colors']['green'].", ".$mult_arr['colors']['red']."</br>";

$lang = array(
    'en' => array('0' => 'monday') ,
    'ru' => array('0' => 'понедельник')
);

$lan = 'ru';
$day = '0';

echo $lang[$lan][$day]."</br>";

$p = 4;
$r = 0;
if (($p > 2 && $p < 11) || ($p >= 6 && $r < 14)) {
    echo "Верно";
} else {
    echo "Неверно";
}

//use switch/case
$num_switch = mt_rand(1, 4);

switch ($num_switch) {
    case 1:
        $result_sw = "Зима";
        break;

    case 2:
        $result_sw = "Лето";
        break;
    
    default:
        $result_sw = "Значение не верно";
        break;
}
echo "</br>$result_sw</br>";

//определение декады месяца
$days = mt_rand(1, 31);

if ($days < 10) {
    echo "Первая декада</br>";

} elseif ($days > 10 && $days < 20) {
    echo "Вторая декада</br>";

} elseif ($days > 20) {
    echo "Треться декада</br>";
}


//foreach

$array = array(
    '0' => 1,
    '1' => 2,
    '2' => 3,
    '3' => 4,
    '4' => 5
);

unset($result); //удаляю значение $result
foreach ($array as $key => $value) {
    $result = $result + pow($array[$key], 2); //сумма квадратов значений массива
}
echo "$result </br>";

//foreach - value and key
$arr = array(
    'green' => 'зелёный',
    'red' => 'красный',
    'blue' => 'синий',
);

foreach ($arr as $key => $value) {
    echo "key_$key -> $value </br>";
}


//while and for

$num = 1;
while ($num <= 100){
    echo $num;
    ++$num;
}
echo "</br>";

$num = 1;
$result = 0;
for ($chek=0; $chek < 33; $chek++) { 
    $result += $chek;
}
echo "$result </br>";



unset($key, $result, $arr);

$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        echo "$value </br>";
    } else {
        echo "Условие не соблюдено </br>";
    }
}


$arr = array(-1, 1, 0, 3,-5, 13, -13);
unset($result);
foreach ($arr as $value) {
    if ($value > 0) {
        $result = $result + $value;
    }
}
echo "$result </br>";


//week days
$days = array(
    'Monday' => 'пон', 
    'Tuesday' => 'вт', 
    'Wednesday' => 'ср', 
    'Thursday' => 'чт', 
    'Friday' => 'пт', 
    'Saturday' => 'суб', 
    'Sunday' => 'вос'
);

$day = date('l'); //дата сейчас

foreach ($days as $key => $week) {
    switch ($key) {
        case $day:
            echo "|<i style='color: blue;'>$week</i>|";
            break;
        
        default:
            echo "|$week|";
            break;
    }
} echo "</br>"; //переход на следующую строку

//заполнение массива
$test_arr = array(1);
for ($i=1; $i <= 100 ; $i++) { 
    $test_arr[$i] = $i;
}
echo "<pre>"; var_dump($test_arr); echo "</pre>";

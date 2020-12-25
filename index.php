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




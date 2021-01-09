<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

function sum_pow($low_limit, $high_limit){
    $result = 0;
    for ($i = $low_limit; $i <= $high_limit; $i++) { 
        $result += pow($i, 2);
    }
    return $result;
}

$sum = htmlentities(sum_pow($_POST['number1'], $_POST['number2']));

echo "Результат вычисления: ".$sum;
?>

<button><a href="site.php">Вернуться</a></button>
    
</body>
</html>
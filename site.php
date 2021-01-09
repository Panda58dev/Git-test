<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>site</title>
</head>
<body>
    <form method="GET">
        <h2>Введите границы для вычисления суммы квадратов (2 числа):</h2><br>
        min:<input type="text" size="5" name="number1">
        max:<input type="text" size="5" name="number2">
        <input type="submit" value="вычислить">
    </form>

    <?php 
    function sum_pow($low_limit, $high_limit){
        $result = 0;
        for ($i = $low_limit; $i <= $high_limit; $i++) { 
            $result += pow($i, 2);
        }
        return $result;
    }

    $sum = htmlentities(sum_pow($_GET['number1'], $_GET['number2']));

    echo "Введённые данные: начало ".$_GET['number1'].", конец ".$_GET['number2']."; результат вычисления: ".$sum;
    ?>

    <button><a href="site.php">Обновить страницу</a></button>
</body>
</html>
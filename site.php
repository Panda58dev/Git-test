<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>site</title>
</head>
<body>
    <form method="GET">
        <h2>Введите границы для вычисления суммы квадратов (2 числа):</h2><br>
        min: <input type="text" size="5" name="number1">
        max: <input type="text" size="5" name="number2">
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

    <button><a href="site.php">Обновить страницу</a></button><br><br>

    <form method="GET">
        <p>Введите текст</p>
        text: <input type="text" size="20" name="text">
        <p>Введите текст, позицию которого надо найти:</p>
        fragment: <input type="text" size="10" name="fragment">
        <input type="submit" value="найти">
    </form>
    <?php 
    $position = mb_strpos($_GET['text'], $_GET['fragment']);
    if ($position !== false) {
        $position+= 1;
        echo "<p>Позиция элемента '".$_GET['fragment']."' в тексте '".$_GET['text']."': ".$position."</p>";
    } else {
        echo "<p>Ошибка, ёмаё</p>";
    }    
    ?>

</body>
</html>
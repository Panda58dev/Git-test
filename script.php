<?php
system("title INFORMATION ABOUT YOU");
echo "========= INFORMATION ABOUT YOU =========\n";
echo "Enter new data (1) or view stored information (2)?\n [1/2] => ";
fscanf(STDIN, "%d\n", $number);
switch ($number) { //сравниваем введённые значения
    case 1:
        $fp = fopen("pass.php", "w");

        echo "Enter your name: \n => "; // имя пользователя
        $name = trim(fgets(STDIN));

        fwrite($fp, "<?php \$name_pass = '$name';\n"); //запись в переменную файла
        
        echo "Enter your height (number): \n => "; //рост пользователя
        $height = trim(fgets(STDIN));

        fwrite($fp, "\$height_pass = $height;\n"); //запись в переменную файла
        
        echo "Enter your weight (number): \n => ";//вес пользователя
        $weight = trim(fgets(STDIN));

        fwrite($fp, "\$weight_pass = $weight;\n");//запись в переменную файла
        fclose($fp);

        echo "restart the program";
        break;

    case 2:
        include 'pass.php';//подключаем файл с данными
        echo "############### YOUR DATA ###############\n";
        echo "
        Name: $name_pass\n
        Height: $height_pass\n
        Weight: $weight_pass\n \n";
        echo "############### Panda58dev ##############"; //вывод данных
        break;
    
    default:
        echo "invalid data entered!!!";// введены неверные данные
        break;
}
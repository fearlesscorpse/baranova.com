<?php
    //1 Задание
    try {
        $file = fopen('file.txt', 'r');
        if (!$file) {
                throw new Exception('не удалось открыть файл, его не существует<br>');
        }
    } catch (Exception $ex) {
        echo '1) Исключение: ' . $ex->getMessage();
    }
    //2 Задание
    try {
        $a = 100;
        $b = 0;
        if ($b == 0) {
            throw new Exception('деление на ноль');    
        }
        $result = $a / $b;
    } catch (Exception $ex) {
        echo '2) Исключение: ' . $ex->getMessage();
    }
    //3 Задание
?>

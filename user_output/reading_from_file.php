<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>PHP Form</title>

</head>

<body>

    <?php
    $handle = @fopen("/home/yarhovor/project/homework/user_output/users.txt", "r");
    //надо вказати повний шлях файла, тільки так находить.
        if ($handle) { while (($buffer = fgets($handle, 4096)) !== false) {
            echo "<table border='1' cellspacing='0'><td>".$buffer."</td></table>";
        } if (!feof($handle)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
        }
        fclose($handle);
    }
    ?>


</body>

</html>


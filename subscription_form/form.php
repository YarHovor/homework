<?php ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Форма подписки</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
<h1>Записуйся в козаки</h1>
<form method="post" action="action.php">
    <div class="row">
        <label for="name">Твоє ім'я</label>
        <input name="name" id="name" value="<?= !empty($_POST['name']) ? $_POST['name'] : '' ?>">
        <?= !empty($errors['name']) ? $errors['name'] : '' ?>
    </div>
    <div class="row">
        <label for="email">Та почтова адреса (email)</label>
        <input type="email" name="email" id="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>">
        <?= !empty($errors['email']) ? $errors['email'] : '' ?>
    </div>

    <button>Вписатися</button>
</form>
</body>

</html>


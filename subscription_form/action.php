<?php

// $_GET - Данные GET-запроса
// $_POST - Данные POST-запроса

$errors = [];

if (empty($_POST['email'])) {
	$errors['email'] = 'Вкажи свій email';
} else {
	$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

	if ($email === false) {
		$errors['email'] = 'Невірний email';
	}
}

if (empty($_POST['name'])) {
	$errors['name'] = "Вкажи своє ім'я";
}


if ($errors) {
	include 'form.php';
	exit();
}

$file = fopen('subscribers.txt', 'a');
$line = "Email: ".$_POST['email'] . "\t\t" ."Name: ". $_POST['name'] . "\n";
fputs($file, $line);
fclose($file);

header('Location: thanks.html');

<?php

$host = 'localhost';
$user = 'yarhovor';
$password = 'yarhovor';
$db_name = 'homework12';

$link = mysqli_connect($host,$user,$password,$db_name);

mysqli_query($link, "SET NAMES 'utf8'");


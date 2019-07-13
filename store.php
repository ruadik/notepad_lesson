<?php
// $_POST

$pdo=new PDO('mysql:host=192.168.10.10; dbname=notepad_crud; charset=utf8','homestead', 'secret');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST); //true || false

//отправки письма

//отправки СМС

//уведомления админа

//уведомления определенного пользователя



header("Location: /"); exit;




<?php
$id = $_GET['id'];

$pdo=new PDO('mysql:host=192.168.10.10; dbname=notepad_crud; charset=utf8','homestead', 'secret');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();


header('Location: /');
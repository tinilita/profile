<?php

$servername = "127.0.0.1";
$username = "user";
$password = "password";


$connect = new PDO("mysql:host=$servername;dbname=db", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";

$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

// Собираем данные для запроса
$data = array( 'name' => $name, 'phone' => $phone, 'mail' => $mail, 'pass' => $pass );
// Подготавливаем SQL-запрос
$query = $connect->prepare("INSERT INTO user (name, phone, mail, pass) values (:name, :phone, :mail, :pass)");
// Выполняем запрос с данными
$query->execute($data);
$result = true;

if ($result) {
    echo "Информация занесена в базу данных";
}




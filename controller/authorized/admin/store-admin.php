<?php 
$config = require "config.php";
$db = new Database($config['database']);

$name = $id['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$db->query('INSERT INTO admin (name,password,email) VALUES(:name,:password,:email)',[
    'name' => htmlspecialchars($name),
    'password' => htmlspecialchars(password_hash($password, PASSWORD_BCRYPT)),
    'email' => htmlspecialchars($email)
]);



header('location: /webapps/divineTech-store/admin');

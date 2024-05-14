<?php 
$config = require "config.php";
$db = new Database($config['database']);

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$db->query('INSERT INTO admin (name,password,email) VALUES(:name,:password,:email)',[
    'name' => $name,
    'password' => password_hash($password, PASSWORD_BCRYPT),
    'email' => $email
]);

header('location: /webapps/divineTech-store/admin');

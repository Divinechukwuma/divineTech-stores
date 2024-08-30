<?php 
$config = require "config.php";
$db = new Database($config['database']);

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$confirmPassword = $_POST['confirmPassword'];

$db->query('INSERT INTO admin (name,password,email,confirmPassword) VALUES(:name,:password,:email,:confirmPassword)',[
    'name' => htmlspecialchars($name),
    'password' => htmlspecialchars(password_hash($password, PASSWORD_BCRYPT)),
    'confirmPassword' => htmlspecialchars(password_hash($confirmPassword, PASSWORD_BCRYPT)),
    'email' => htmlspecialchars($email)
]);


require  'controller/authorized/admin/show-admin.php';

 die();

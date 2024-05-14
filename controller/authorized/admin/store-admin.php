<?php 
$config = require "config.php";
$db = new Database($config['database']);

$name = $_POST['name'];
$password = $_POST['password'];

$db->query('INSERT INTO admin (name,password) VALUES(:name,:password)',[
    'name' => $name,
    'password' => password_hash($password, PASSWORD_BCRYPT)
]);

header('location: /webapps/divineTech-store/admin');

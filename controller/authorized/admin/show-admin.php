<?php 

$config = require 'config.php';
$db = new Database($config['database']);

$sn = 1;

 $admins =  $db->query("SELECT * FROM admin WHERE id = :id, name = :name, email = :email",[
    'id' => $_GET['id'],
    'name' => $_GET['name'],
    'email' =>  $_GET['email']
])->findOrFail();

require view("authorized/admin.view.php");
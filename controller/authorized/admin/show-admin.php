<?php
$config = require 'config.php';
$db = new Database($config['database']);

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sn = 1;
// Query to fetch admin data based on provided id, name, and email
// $admins = $db->query("SELECT * FROM admin WHERE id = ? AND name = ? AND email = ?")->get(); // Assuming you want to fetch all matching rows


$user =  $db->query("SELECT * FROM admin WHERE id = :id, name = :name, email = :email", [
    'id' => $id,
    'name' => $name,
    'email' =>  $email
])->findOrFail();
dd($user);

// Assuming you want to display the serial number (sn)
$sn = 1;

// Include the view file
require view("authorized/admin.view.php");

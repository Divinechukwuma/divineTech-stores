<?php
base_path('core/session.php');
$config = require 'config.php';
$db = new Database($config['database']);

if (isset($_SESSION['name'])){
    dd( $_SESSION['name']);
}

$sn = 1;
// Query to fetch admin data based on provided id, name, and email
$admins = $db->query("SELECT * FROM admin WHERE id = ? AND name = ? AND email = ?")->get(); // Assuming you want to fetch all matching rows


 $admins =  $db->query("SELECT * FROM admin WHERE id = :id, name = :name, email = :email",[
    'id' => $_SESSION['id'],
    'name' => $_SESSION['name'],
    'email' =>  $_SESSION['email']
])->findOrFail();

// Assuming you want to display the serial number (sn)
$sn = 1;

// Include the view file
require view("authorized/admin.view.php");
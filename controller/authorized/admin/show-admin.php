<?php

$config = require 'config.php';
$db = new Database($config['database']);


// Query to fetch admin data based on provided id, name, and email
$admins = $db->query("SELECT * FROM admin WHERE id = :id, name = :name, email = :email",[
         'id' => $id,
         'name' => $name,
         'email'=> $email
]); // Assuming you want to fetch all matching rows

// Assuming you want to display the serial number (sn)
$sn = 1;

// Include the view file
require view("authorized/admin.view.php");
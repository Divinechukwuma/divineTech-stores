<?php

$config = require 'config.php';
$db = new Database($config['database']);

// dd($_SERVER);


// Query to fetch admin data based on provided id, name, and email
$admins = $db->query("SELECT * FROM admin WHERE  AdminName = :AdminName, AdminEmail = :AdminEmail, id = :id", [

    'AdminName' => $_GET['AdminName'],
    'AdminEmail' => $_GET['AdminEmail'],
    'id' => $_GET['id']

]);
$sn = 1;

// Include the view file
require view("authorized/admin.view.php");

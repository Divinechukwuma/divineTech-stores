<?php
// $config = require 'config.php';
// $db = new Database($config['database']);
// $sn = 1;

// // Fetch and validate GET parameters
// $id = isset($_GET['id']) ? $_GET['id'] : null;
// $name = isset($_GET['name']) ? $_GET['name']: null;
// $email = isset($_GET['email']) ? $_GET['email'] : null;

// // Validate parameters (optional, but recommended)
// // if (!$id || !$name || !$email) {
// //     die('Invalid parameters');
// // }

// try {
//     // Prepare and execute the query
//     $user = $db->query("SELECT * FROM admin WHERE id = :id AND name = :name AND email = :email", [
//         'id' => $id,
//         'name' => $name,
//         'email' => $email
//     ])->findOrFail();

//     // Debugging purpose: print the fetched user
//     // var_dump($user); // Replace dd($user) with var_dump($user) for better debugging

//  } catch (Exception $e) {
//     die('Admin not found');
// }

// // Include the view file
// require view("authorized/admin.view.php");


$config = require 'config.php';
$db = new Database($config['database']);

$sn = 1;

 $admins =  $db->query("SELECT * FROM admin WHERE id = :id, name = :name, email = :email",[
    'id' => $_GET['id'],
    'name' => $_GET['name'],
    'email' =>  $_GET['email']
])->findOrFail();

require view("authorized/admin.view.php");

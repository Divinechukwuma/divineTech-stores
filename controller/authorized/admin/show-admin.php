<?php

$config = require 'config.php';
$db = new Database($config['database']);

$sn = 1;
 $admins =  $db->query("SELECT id, name, email FROM admin")->findOrFail();

 dd($admins);
require view("authorized/admin.view.php");

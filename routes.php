<?php

$router->get('/webapps/divineTech-store/','controller/authorized/dashboard.php');
$router->get('/webapps/divineTech-store/admin','controller/authorized/admin.php');


$router->get('/webapps/divineTech-store/create-admin','controller/authorized/admin/create-admin.php');
$router->post('/webapps/divineTech-store/store-admin','controller/authorized/admin/store-admin.php');
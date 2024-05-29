<?php
// dd($_SERVER);
// Query to fetch admin data based on provided id, name, and email
// $admins = "SELECT * FROM admin WHERE  AdminName = :AdminName, AdminEmail = :AdminEmail, id = :id";
// $sn = 1;

$host = 'localhost';
$port = 3306;
$dbname = 'divinetechstores';
$username = "root";
$password = "";
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;port=$port";
$conn = new PDO($dsn, $username, $password);

$sql = "SELECT * FROM admin WHERE id = :id, AdminName= :AdminName, AdminEmail = :AdminEmail";

$stmt = $conn->prepare($sql);

$stmt->execute();

$posts = $stmt->fetchAll();

$sn = 1;

require view("authorized/admin.view.php");

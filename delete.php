<?php
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$id = $_GET['id'];
$connection = new mysqli($ip, $user, $password, $data_base);
$action = "delete from users where id='$id'";
$result = $connection->query($action);
Header("Location: users.php");

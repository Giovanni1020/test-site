<?php
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$id = $_GET['id'];
$connection = new mysqli($ip, $user, $password, $data_base);
$action = "update users set status='off' where id='$id'";
$result = $connection->query($action);
Header("Location: bin.php");

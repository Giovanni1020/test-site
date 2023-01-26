<?php
session_start();
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
$this_user = $_SESSION['login'];
$newdesc = $_POST['newdesc'];
$action = "UPDATE profile SET description='$newdesc' where user='$this_user'";
$result = $connection->query($action);
header("Location: pfp.php");

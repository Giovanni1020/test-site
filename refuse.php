<?php
session_start();
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
$this_user = $_SESSION['login'];
$friend = $_GET['friend'];
$action = "DELETE from friends where user='$this_user' and user_friend='$friend' and status='standby'";
$result = $connection->query($action);
$action2 = "DELETE from friends where user='$friend' and user_friend='$this_user' and status='standby'";
$result2 = $connection->query($action2);
header("Location: friends.php");

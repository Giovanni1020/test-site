<?php
$friend = $_GET['friend'];
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
session_start();
$this_user = $_SESSION['login'];
$message = $_POST['message'];
$action2 = "INSERT INTO chat (message,user_sending,user_sent) VALUES ('$message','$this_user','$friend')";
$result2 = $connection->query($action2);
header("Location: ps_chat.php?friend=$friend");

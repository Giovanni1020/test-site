<?php
$friend = $_GET['friend'];
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
session_start();
$this_user = $_SESSION['login'];
$action2 = "UPDATE chat SET status='off' where user_sending='$friend' and user_sent='$this_user' and status='on'";
$result2 = $connection->query($action2);
header("Location: ps_chat.php?friend=$friend");

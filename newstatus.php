<?php
session_start();
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
$this_user = $_SESSION['login'];
$newstatus = $_POST['newstatus'];
$action = "UPDATE profile set status='$newstatus' where user='$this_user'";
$result = $connection->query($action);
header("Location: pfp.php");

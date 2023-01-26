<?php
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
/* if ($connection->connect_error) {
    die("connection failed: ") . $connection->connect_error;
} else {
    echo "connected <br>";
} */
$image = $_FILES['pfp'];
$imagename = $_FILES['pfp']['name'];

$imagePath = "img/";
$dir = "C://xampp/htdocs/test-site/img/" . $imagename;
$img = $_FILES['pfp']['name'];
$name = $_POST['realname'];
$username = $_POST['username'];
$pass = md5($_POST['newpass']);
$phone = $_POST['phone'];
$email = $_POST['email'];
$action = "INSERT INTO users (realname, username, pass, phone, pfp, email) VALUES ('$name', '$username', '$pass', '$phone', '$imagename', '$email')";
$result = $connection->query($action);
$action2 = "INSERT INTO profile (pfp,user) values ('$imagename','$username')";
$result2 = $connection->query($action2);
header("Location: index.php");

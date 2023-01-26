<?php
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$id = $_GET['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pfp = $_FILES['pfp']['name'];
$dir = "C:\xampp\htdocs\test-site\img";
$connection = new mysqli($ip, $user, $password, $data_base);
$action = "update users set realname='$name', phone='$phone', username='$username', email='$email'
where id='$id'";
$result = $connection->query($action);
if (move_uploaded_file($_FILES['pfp']['tmp_name'], $dir)) {
    $action = "update users set pfp='$pfp' where id='$id'";
    $result = $connection->query($action);
}
Header("Location: users.php");

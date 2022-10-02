<?php
$password = $_POST['password'];
$login = $_POST['login'];
if($login=="admin" && $password=="admin"){
session_start();
session_name("secret");
$_SESSION['login'] = $login;
$_SESSION['validity'] = 1;
header("Location: index.php");
}else{
echo "invalid username or password, please try again";
}
?>
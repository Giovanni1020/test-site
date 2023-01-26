<?php
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
session_start();
$this_user = $_SESSION['login'];
$friend = $_POST['test_post'];
$action = "SELECT * From users where username='$friend'";
$result = $connection->query($action);
$rows = mysqli_num_rows($result);
if ($rows == 1) {
    $action = "INSERT into friends (user,user_friend,user_asking) values ('$this_user','$friend','$this_user')";
    $result = $connection->query($action);
    $action2 = "INSERT into friends (user,user_friend,user_asking) values ('$friend','$this_user','$this_user')";
    $result2 = $connection->query($action2);
    header("location: friends.php");
} else {
    echo "invalid username <br>";
    echo "<a href='friends.php'> Return</a>";
}

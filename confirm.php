<?php
$pass = md5($_POST['password']);
$login = $_POST['login'];
$test = $login;
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
$action = "SELECT * from users where username='$login' and pass='$pass'";
$result = $connection->query($action);

while ($line = mysqli_fetch_assoc($result)) {
    $id = $line['id'];
    $status = $line['status'];
    $realname = $line['realname'];
    $type = $line['type'];
    $phone = $line['phone'];
    $email = $line['email'];
    $pfp = $line['pfp'];
}

if ($result->num_rows >= 1) {
    if ($status == "on") {
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['validity'] = 1;
        $_SESSION['id'] = $id;
        $_SESSION['type'] = $type;
        $_SESSION['status'] = $status;
        $_SESSION['realname'] = $realname;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        $_SESSION['pfp'] = $pfp;
        Header("Location: index.php");
    } else {
        echo "Invalid username or password, please try again <br>";
        echo "<a href='index.php'> Return </a>";
    }
} else {
    echo "Invalid username or password, please try again <br>";
    echo "<a href='index.php'> Return </a>";
}

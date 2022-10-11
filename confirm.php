<?php
$found = 0;
$password = $_POST['password'];
$login = $_POST['login'];
$acc = "acc.txt";
$fp = file_get_contents($acc);
$vet = explode("*", $fp);

for ($i = 0; $i < sizeof($vet) - 1; $i++) {
    $users = explode("/", $vet[$i]);
    if ($login == $users[1] && $password == $users[2]) {
        $found = 1;
    }
}

if ($found == 1) {
    session_start();
    $_SESSION['login'] = $login;
    $_SESSION['validity'] = 1;
    header("Location: index.php");
} else {
    echo "Invalid username or password, please try again <br>";
    echo "<a href='index.php'> Return </a>";
}

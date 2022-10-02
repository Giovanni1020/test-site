<?php
session_start();
session_name('secret');
unset($_SESSION['login']);
unset($_SESSION['validity']);
session_destroy();
header("Location: index.php");
?>
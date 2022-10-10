<?php
$acc = "acc.txt";
$newacc = $_POST['realname'] . "/" . $_POST['username'] . "/" . $_POST['newpass'] . "/" . $_POST['phone'] . "/" . $_POST['email'] . "*";
$fp = fopen($acc, "a+");
fwrite($fp, $newacc);
fwrite($fp, "\r\n");
fclose($fp);
header("Location: index.php");

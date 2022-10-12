<?php
$img = $_FILES['pfp']['name'];
$acc = "acc.txt";
$image = $_POST['pfp'];
$imagename = $_FILES['pfp']['name'];
$imagetype = $_FILES['pfp']['type'];
$imageerror = $_FILES['pfp']['error'];
$imagetemp = $_FILES['pfp']['tmp_name'];
$imagePath = "img/";
if (is_uploaded_file($imagetemp)) {
    if (move_uploaded_file($imagetemp, $imagePath . $imagename)) {
        $newacc = $_POST['realname'] . "/" . $_POST['username'] . "/" . $_POST['newpass'] . "/" . $_POST['phone'] . "/" . $_POST['email'] . "/" . $img . "*";
        $fp = fopen($acc, "a+");
        fwrite($fp, $newacc);
        fwrite($fp, "\r\n");
        fclose($fp);
        header("Location: index.php");
    } else {
        echo "Failed to create a account";
    }
} else {
    echo "Failed to crete a account";
}

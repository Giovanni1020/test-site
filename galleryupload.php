<?php
$img = $_FILES['imgupload']['name'];
$imagename = $_FILES['imgupload']['name'];
$imagetype = $_FILES['imgupload']['type'];
$imageerror = $_FILES['imgupload']['error'];
$imagetemp = $_FILES['imgupload']['tmp_name'];
$imagePath = "img/";
$desc = $_POST['imgdesc'];
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
$user_id = $_GET['user_id'];
$action = "SELECT username FROM users where id='$user_id'";
$result = $connection->query($action);
$line = mysqli_fetch_assoc($result);
$usr = $line['username'];

if (is_uploaded_file($imagetemp)) {
    if (move_uploaded_file($imagetemp, $imagePath . $imagename)) {
        $ip = "localhost";
        $user = "root";
        $password = "";
        $data_base = "test-site";
        $connection = new mysqli($ip, $user, $password, $data_base);
        $action = "INSERT INTO gallery (img, description,user) VALUES ('$imagename', '$desc','$usr')";
        $result = $connection->query($action);
        header("Location: gallery.php");
    } else {
        echo "Failed to upload the image";
    }
} else {
    echo "Failed to upload the image";
}

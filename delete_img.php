<?php
$ip = "localhost";
$user = "root";
$password = "";
$data_base = "test-site";
$connection = new mysqli($ip, $user, $password, $data_base);
$img_id = $_GET['img_id'];
$action = "delete from gallery where id='$img_id'";
$result = $connection->query($action);
Header("location: gallery.php");

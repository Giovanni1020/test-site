<?php
$img = $_FILES['imgupload']['name'];
$gallery = "gallery.txt";
$image = $_POST['imgupload'];
$imagename = $_FILES['imgupload']['name'];
$imagetype = $_FILES['imgupload']['type'];
$imageerror = $_FILES['imgupload']['error'];
$imagetemp = $_FILES['imgupload']['tmp_name'];
$imagePath = "img/";

if (is_uploaded_file($imagetemp)) {
    if (move_uploaded_file($imagetemp, $imagePath . $imagename)) {
        $reset = $_POST['reset'];
        if (isset($reset)) {
            $gallerysave = $_POST['imgdesc'] . "/" . $img . "*";
            $fp = fopen($gallery, "w");
            fwrite($fp, $gallerysave);
            fwrite($fp, "\r\n");
            fclose($fp);
            header("Location: gallery.php");
        } else {
            $gallerysave = $_POST['imgdesc'] . "/" . $img . "*";
            $fp = fopen($gallery, "a+");
            fwrite($fp, $gallerysave);
            fwrite($fp, "\r\n");
            fclose($fp);
            header("Location: gallery.php");
        }
    } else {
        echo "Failed to upload the image";
    }
} else {
    echo "Failed to upload the image";
}

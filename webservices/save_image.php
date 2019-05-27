<?php
include 'dbConnect.php';
$info = pathinfo($_FILES['image'][name]);
$ext = $info['extension']; //
$newname = 'new_image.'.$ext;
$traget = 'images/'.$newname;
move_uploaded_file( $_FILES['image']['tmp_name'], $target);
?>
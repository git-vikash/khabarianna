<?php
$info = pathinfo($_FILES['image']['name']);
$ext = $info['extension'];
$newname = 'new_image.'.$ext;      //it seems that all photos will be saved with same name.
$target = 'images/'.$newname;
move_uploaded_file( $_FILES['image']['tmp_name'], $target);

?>
<?php

if (!isset($_GET['id'])) {
  echo ('Invalid request!');
  exit(0);
}
$id = intval($_GET['id']);

$image = $_FILES["image"];

if ($image == null) {
   echo ("Missing image!");
   exit(0);
}
else {
   echo "Saved image!";
   $filename = "image" . $id . ".jpg";
   $tmp_name = $_FILES["image"]["tmp_name"];
   move_uploaded_file($tmp_name, $filename);
}
?>
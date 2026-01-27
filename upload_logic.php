<?php
require "db.php";

$slot = $_POST["slot"];                 // bij: left_top
$tmp  = $_FILES["image"]["tmp_name"];   // geçici dosya

$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
$newName = $slot . "_" . time() . "." . $ext;

move_uploaded_file($tmp, "uploads/" . $newName);

$pdo->prepare("UPDATE screen_images SET filename=? WHERE slot=?")
    ->execute([$newName, $slot]);

header("Location: admin.php");
exit;

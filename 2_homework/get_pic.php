<?php

if ( isset($_FILES['image']) ) {
    $pic = $_FILES['image'];
    $pic_path = $pic['tmp_name'];
    $pic_name = $pic['name'];
    move_uploaded_file($pic_path, __DIR__ . '/pictures/' . $pic_name);
    header("Location:" . '/2_homework/index.php');
}



<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>Загрузить картинку</h1>
    <style media="all">
        .block {
            background: #ccc;
            padding: 5px;
            padding-right: 20px;
        }


    </style>
</head>
<body>

<form action="get_pic.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image"><br>
    <button type="submit">Сохранить</button>
</form><br><br><br>


<?php

$path = __DIR__ . '/pictures/';
$after_scan_dir = scandir($path);
foreach ($after_scan_dir as $item) {
    $fileType = mime_content_type($path . $item);

    if (strpos($fileType, 'image') !== false) {
        $img = 'pictures/' . $item;
        ?>

<div class="block">
        <img src="<?php echo $img; ?>"
</div>
        <?php

    }
}

?>
</body>
</html>

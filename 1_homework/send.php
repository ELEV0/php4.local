<?php include __DIR__ . '/function.php'; ?>


    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <h1>Последние заметки</h1>
    </head>
    <body>
    <?php
    $string = $_POST['message'];
    $string = $string . "\n";

    $res = fopen(__DIR__ . '/notes.txt', 'a');
    fwrite($res, $string);
    fclose($res);

    $array = read_file();
    foreach ( $array as $note) {
        echo $note;
        ?>
        <br>
        <?php
    }
    ?>

    <form action="index.php"><br>
        <button type="submit">Назад</button>
    </form>
    </body>
    </html>





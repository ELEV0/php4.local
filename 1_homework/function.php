<?php
function read_file() {
    $path = __DIR__ . '/notes.txt';
    $res = fopen($path, 'r');
    $array = [];
    while (false !== $str = fgets($res)) {
        $array[] = $str;
    }
    fclose($res);
    return $array;
}
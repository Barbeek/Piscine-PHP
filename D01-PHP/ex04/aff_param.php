#!/usr/bin/php
<?php
    $array = $argv;
    reset($array);
    $key = key($array);
    unset($array[$key]);
    foreach($array as $key)
        echo $key . "\n";
?>
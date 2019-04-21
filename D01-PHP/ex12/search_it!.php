#!/usr/bin/php
<?php
    $command = $argv[1];
    $i = 2;
    $tab = array();
    while ($i < $argc)
    {
        $value = explode(":", $argv[$i]);
        $tab[$value[0]] = isset($value[1]) ? $value[1] : "";
        $i++;
    }
    if (isset($tab[$command]))
        print($tab[$command]);
?>
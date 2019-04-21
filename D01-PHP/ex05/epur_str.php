#!/usr/bin/php
<?php
    if($argc == 2)
    {
        $line=explode(" ", $argv[1]);
        $line_sort=array_filter($line, 'strlen');
        $test=implode(' ', $line_sort);
        echo("$test\n");
    }
?>
#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $list = trim($argv[1]);
        $tab = explode(" ", $list);
        $line_sort=array_filter($tab, 'strlen');
        $test=implode(' ', $line_sort);
        $list = array();
        $list = explode(" ", $test);
        $first = array_shift($list);
        foreach($list as $word)
           echo $word .  " ";
        print($first);
        echo "\n";
    }
    else
        echo ("usage: ./rostring.php [parameter 1]");
?>
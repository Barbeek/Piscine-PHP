#!/usr/bin/php
<?php
function epur_str($str)
{
    $ret = trim(str_replace("  ", " ", $str));
    return ($ret);
}

function aff_param($argv)
{
    $array = $argv;
    reset($array);
    $key = key($array);
    unset($array[$key]);
    $final = array();
    foreach($array as $key)
    {
        $current = epur_str($key);
        $line = explode(" ", $current);
        $final = array_merge($final, $line);
    }
    sort($final);
      foreach ($final as $word)
    {
        if (!empty($word) || $word == "0")
           echo $word . "\n";
    }
}

aff_param($argv);
?>
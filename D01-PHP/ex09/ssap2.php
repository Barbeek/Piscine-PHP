#!/usr/bin/php
<?php
function epur_str($str)
{
    $ret = trim(str_replace("  ", " ", $str));
    return ($ret);
}

function type_alpha($str)
{
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++)
    {
        $cur = ord($str[$i]);
        if (!($cur > 64 && $cur < 91) && !($cur > 96 && $cur < 123))
            return (false);
    }
    return (true);
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
    foreach($final as $value)
    {
        if (is_numeric($value))
            $numeric[] = $value;
        else if (type_alpha($value))
            $alpha[] = $value;
        else 
            $symbol[] = $value;
    }
    if ($numeric)
        sort($numeric, SORT_STRING);
    if ($alpha)
        natcasesort($alpha);
    if ($symbol)
        sort($symbol);
    if ($numeric && $alpha)
      $final = array_merge($numeric, $alpha);
    if ($final && $symbol)
    $final = array_merge($final, $symbol);
    foreach ($final as $word)
    {
       if (!empty($word) || $word == "0")
        echo $word . "\n";
    }
}

if ($argc > 1)
    aff_param($argv);
else
    return ;
?>
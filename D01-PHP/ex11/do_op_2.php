#!/usr/bin/php
<?php
if ($argc != 2)
    echo "Incorrect Parameters\n";
else
{
    $op = explode(";", "+;-;*;/;%");
    $line = sscanf($argv[1], "%d %c %d %s");
    $i = -1;
    $j = 0;
    while($op[++$i])
    {
        if ($line[1] == $op[$i])
            $j++;
    }
    if ($j == 0)
    {
        echo "Syntax Error\n";
        return ;
    }
    if (isset($line[0]) && $line[1] && isset($line[2]) && !$line[3])
    {
        if (($line[1]) == '+')
        $res = $line[0] + $line[2];
        if (($line[1]) == '-')
        $res = $line[0] - $line[2];
        if (($line[1]) == '*')
        $res = $line[0] * $line[2];
        if (($line[1]) == '/' && $line[2] !== 0)
        $res = $line[0] / $line[2];
        if (($line[1]) == '%' && $line[2] !== 0)
        $res = $line[0] % $line[2];
        echo $res . "\n";
    }
    else
        echo "Syntax Error\n";
}
?>
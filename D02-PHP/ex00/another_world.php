#!/usr/bin/php
<?php
if ($argc > 1)
{
    $ret = trim(preg_replace('/\s+/', ' ', $argv[1]));
    print($ret) . "\n";
}
?>
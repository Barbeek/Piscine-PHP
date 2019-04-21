#!/usr/bin/php
<?php
function replace_title($tab){
    return(preg_replace("/$tab[3]/", strtoupper($tab[3]), $tab[0]));
}

function replace_img($tab){
    return(preg_replace("/$tab[3]/", strtolower($tab[3]), $tab[0]));
}

function replace_a($tab){
    return(preg_replace("/$tab[2]/", strtoupper($tab[2]), $tab[0]));   
}
if ($argc == 2)
{
    $file = file_get_contents($argv[1]);
    $tab = preg_replace_callback("/(<a href=.+>(.+)<\/a>)/", "replace_a", $file);
    $tab = preg_replace_callback("/(<a href=.+>)(.*)(<.*>)(<\/a>)/", "replace_img", $tab);
    $tab = preg_replace_callback("/(<a href.*)(title=(\".*\")>)(.*)(<\/a>)/", replace_title, $tab);
    print_r($tab);
}
?>
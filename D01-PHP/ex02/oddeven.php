#!/usr/bin/php
<?php
while (1)
{
    echo "Entrez un nombre: ";
    $input = rtrim(fgets(STDIN));
    if (feof(STDIN) == TRUE)
        exit();
    if (!is_numeric($input))
      echo "'$input' n'est pas un chiffre\n"; 
    else{
        echo "Le nombre est $input";
        if ($input&1)
        echo " est Impair\n";
        else
        echo " est Pair\n";
    }
}
?>
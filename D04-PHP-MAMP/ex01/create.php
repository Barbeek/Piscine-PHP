<?php
if ($_POST["submit"] != "OK")
{
    echo "ERROR\n";
    return ;
}
if (!file_exists("../private"))
    mkdir("../private");
if ((!$_POST["login"] || !$_POST["passwd"] || $_POST["login"] === "" || $_POST["passwd"] === ""))
{
    echo "ERROR\n";
    return ;
}  
if (($file = file_get_contents("../private/passwd")))
{
    $tab = unserialize($file);
    foreach($tab as $content)
    {
        if ($content["login"] == $_POST["login"])
        {
            echo "ERROR\n";
            return ;
        }
    }
}
$_POST["passwd"] = hash("whirlpool", $_POST["passwd"]);
$tab[] = array("login" => $_POST["login"], "passwd" => $_POST["passwd"]);
if (file_put_contents("../private/passwd", serialize($tab)))
        echo "OK\n";
?>
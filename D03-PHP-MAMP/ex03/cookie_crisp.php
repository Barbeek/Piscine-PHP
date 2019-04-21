<?php
if ($_GET["action"] && $_GET["name"])
{
    if ($_GET["action"] === "set")
    {
        if ($_GET["value"])
        {
            $value = $_GET["value"];
            setcookie($_GET["name"], $value, time()+3600);
        }
    }
    if ($_GET["action"] === "get" && $_GET["name"])
        echo $_COOKIE[$_GET["name"]];
    if ($_GET["action"] === "del")
        setcookie($_GET["name"], "", 0);
}
?>
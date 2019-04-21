<?php
function auth($login, $passwd)
{
    if ($file = file_get_contents("../private/passwd"))
    {
        $tab = unserialize($file);
        foreach($tab as $content)
        {
            if ($content["login"] == $login && $content["passwd"] == hash("whirlpool", $passwd))
                return (TRUE);
        }
        return (FALSE);
    }
}
?>
<?php
if ($_POST["submit"] == "OK")
{
    if ((!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || $_POST["newpw"] === "" || $_POST["login"] === "" || $_POST["oldpw"] === ""))
    {
        echo "ERROR\n";
        return ;
    } 
    if (($file = file_get_contents("../private/passwd")))
    {
        $tab = unserialize($file);
        foreach($tab as &$content)
        {
            if ($content["login"] == $_POST["login"])
            {
                if ($content["passwd"] == hash("whirlpool", $_POST["oldpw"])) 
                {
                    $content["passwd"] = hash("whirlpool", $_POST["newpw"]);
                    file_put_contents("../private/passwd", serialize($tab));
                    echo "OK\n";
                    header('Location: index.html');
                    return ;
                }
                else
                {
                    echo "ERROR\n";
                    return ;
                }
            }
        }   
    }
    echo "ERROR\n";
}
else
{
    echo "ERROR\n";
    return;
}
?>
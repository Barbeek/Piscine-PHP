<?php
    session_start();
    if ($_GET["submit"])
    {
        $_SESSION["submit"] = $_GET["submit"];
        $value = $_SESSION["submit"];
        if ($value != "OK")
            return ;
    }
    if ($_GET["login"] && $_GET["submit"])
        $_SESSION["login"] = $_GET["login"];
    if ($_GET["passwd"])
        $_SESSION["passwd"] = $_GET["passwd"];
    $login = $_SESSION["login"] ? $_SESSION["login"] : "";
    $passwd = $_SESSION["passwd"] ? $_SESSION["passwd"] : "";
?>
<html>
    <body>
    <form action="index.php" method="get">
    Identifiant: <input type="text" name="login" value="<?php echo $login ?>">
    <br />
    Mot de passe: <input type="password" name="passwd" value="<?php echo $passwd ?>">
    <input type="submit" name="submit" value="OK">
    </form>
    </body>
</html>
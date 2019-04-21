<?php
include 'auth.php';
session_start();
if (auth($_POST['login'], $_POST['passwd']) === TRUE)
{
    $_SESSION['loggued_on_user'] = $_POST['login'];?>
    <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
    <iframe name="speak" src="speak.php" width="100%" height="50ox"></iframe>
<?php
}
else
{
    $_SESSION['loggued_on_user'] = "";
    echo "ERROR\n";
}
?>
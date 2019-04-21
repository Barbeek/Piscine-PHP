<?php
$user = $_SERVER['PHP_AUTH_USER'];
$pwd = $_SERVER['PHP_AUTH_PW'];
if ($user != "zaz" || $pwd != "jaimelespetitsponeys")
{
    header('WWW-Authenticate: Basic realm="Members space"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>You are not authorized to view this resource</body></html>";
    exit ;
}
else if ($user == "zaz" && $pwd == "jaimelespetitsponeys")
{
    $data = base64_encode(file_get_contents("../img/42.png"));
    echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,$data'>\n</body></html>\n";
}
?>

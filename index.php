<?php
require_once ".config.php"
switch($_GET["method"]) {
case "getInfo":
echo("$infoRequest");
break;
case "":
echo("Method required");
break;
}
?>

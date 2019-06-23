<?php
require_once ".config.php"
switch($_GET["method"]) {
case "getInfo":
$json_infoRequest = json_encode("$infoRequest");
echo("$json_infoRequest");
break;
case "":
echo("Method required");
break;
}
?>

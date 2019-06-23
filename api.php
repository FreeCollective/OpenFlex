<?php
require_once(".config.php");
switch("$_GET['method']") {
case "1":
$operationFinish = TRUE;
$responce = array("success" => "$operationFinish", "message" => "FlexMusic is completed or what?");
$responce = base64_encode("$responce");
echo("$responce");
break;
case "":
$responce = array("success" => "$operationFinish", "message" => "Unknown action.");
$responce = base64_encode("$responce");
echo("$responce");
break;
}
?>

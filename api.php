<?php
include ".config.php";
switch ($_GET['method']) {
case "base":
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
fopen("log.txt", "a");
fwrite("log.txt", $_GET);
fclose("log.txt");
?>

<?php
include ".config.php";
function responce($responce) {
$responce = json_encode($responce);
$responce = base64_encode($responce);
echo("$responce");
}
$undecoded = urldecode($_GET['action']);
$undecoded = base64_decode($undecoded);
switch ($undecoded) {
case "GenerateAd":
$responce = array("success" => true, "message" => "Done.", "generated" => $flexad);
responce($responce);
break;
case "":
$responce = array("success" => false, "message" => "Unknown action.");
responce($responce);
break;
}
fopen("log.txt", "a");
fwrite("log.txt", $_GET);
fclose("log.txt");
?>

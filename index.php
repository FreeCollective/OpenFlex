<?php
require_once ".config.php"
switch($_GET["method"]) {
case "getInfo":
$json_infoRequest = json_encode("$infoRequest");
echo("$json_infoRequest");
break;
case "getAudio":
/* Maybe this doesn't work correctly
if(isset($_GET['audios'])) {
Maybe $_GET variables on isset will always send TRUE*/
curl("https://api.vk.com/method/audio.getById?access_token=$token&audios=$_GET['audios']&v=5.92");
break;
case "":
echo("Method required");
break;
}
?>

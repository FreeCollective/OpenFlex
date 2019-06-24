<?php
require_once ".config.php"
switch($_GET["method"]) {
case "getInfo":
$responce = json_encode("$infoRequest");
echo("$responce");
break;
case "getAudio":
/* Maybe this doesn't work correctly
if(isset($_GET['audios'])) {
Maybe $_GET variables on isset will always send TRUE*/
$request = curl("https://api.vk.com/method/audio.getById?access_token=$token&audios=$_GET['audios']&v=5.92");
echo $request;
break;
case "loadTrack":
$proxymsg = ("message" => "This doesn't work at this time");
//curl("https://vk.com/method.audio.get?audio=$_GET['track']&access_token=$token&v=5.92");
$responce = json_encode($proxymsg);
echo $responce;
case "":
echo("Method required");
break;
}
?>

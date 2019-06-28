<?php
/***
*	Copyright (c) 2018-2020, FreeCollective. All rigths reserved
*
*	This product is licensed under the GNU GPLv3.
*	Use, distribution, and modification of this source code is
*	restricted to non-commercial enhancements to products from
*	FreeCollective. All other use, distribution, or modification is
*	prohibited without written permission from FreeCollective.
*
***/
include ".config.php";
function curl($url) { 
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Connection: keep-alive',
        'User-Agent: VKAndroidApp/5.32-3620 (Android 8.1.0; SDK 27; armeabi-v7a; Nexus 5; ru; 1920x1080)'
));
  $response = curl_exec($ch); 
  curl_close($ch); 
  return $response; 
  }
function iTaysonBlya() {
$response = array("error" => "Invalid link (".$_GET['track'].")");
	return $response;
}
switch ($_GET["method"]) {
	case "getInfo":
		$responce = json_encode($infoRequest);
		echo("$responce");
		break;
	case "getAudio":
/* Maybe this doesn't work correctly
		if(isset($_GET['audios'])) {
Maybe $_GET variables on isset will always send TRUE*/
		if($_GET['audios'] != "") {
			$request = curl("https://api.vk.com/method/audio.getById?access_token=$token&audios=".$_GET['audios']."&v=5.92");
			$request = json_decode("$request", true);
			$response = array("response" => $request[response], "flexad" => $flexad);
		} else {
			$response = array("message" => "Set audios parameter", "flexad" => $flexad);
		}
	response($response);
	break;
	case "loadTrack": // Deprecated
		if($_GET['track'] != "") {
		$response = array("error" => "Deprecated.");
//} elseif(strpos($request, "404")) {
//$response = iTaysonBlya();
		} else {
		$response = iTaysonBlya();
			}
		response($response, false);
		break;
	default:
		echo("Method required");
		break;
	}
?>


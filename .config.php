<?php
function response($response, $base) {
$response = json_encode($response);
if(!$base) { //if $base == false, $response will be encoded by base64_encode
$response = base64_encode($response);
}
echo("$response");
}
//change serverurl value
$serverurl = "http://openflex.eclipseclan.xyz";
$donate_url = "https://qiwi.me/openflex";
$ads_url = "$serverurl/api.php";
$ads_image = "$serverurl/ad.png"; // banner size is 1080x200
$token = "5h1s1s2t0k3n"; //get token with audio right

//an main server-side vars
$operationFinish = FALSE;
$flexad = array('image_link' => "$ads_image",'target_url' => "$donate_url");

//this is main responce
$infoRequest = array("donate_url" => "$donate_url", "ads_url" => "$ads_url");
?>

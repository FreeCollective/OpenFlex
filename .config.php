<?php
function response($response, $base = TRUE) {
	$response = json_encode($response);
	if($base) { //if $base == true, $response will be encoded by base64_encode
		$response = base64_encode($response);
	}
	echo("$response");
}

// user values
$protocol = "http";
$serverurl = "$protocol://openflex.eclipseclan.xyz";
$donate_url = "https://qiwi.me/openflex";
$ads_url = "$serverurl/api.php";
$ads_image = "$serverurl/ad.png"; // banner size is 1080x200
$token = "5h1s1s2t0k3n"; //get token with audio right
$extensions = "useragent";
$paid = false;
$uaenabled = false;
$ua = array("ua" => "okhttp/3.14.2", "uamsg" => "Default HTTP connection cannot be used instead of client");

// extensions
include(".extensions.php");

// an main server-side vars
$flexad = array('image_link' => "$ads_image",'target_url' => "$donate_url");
$infoRequest = array("donate_url" => "$donate_url", "ads_url" => "$ads_url", "paid" => $paid);
?>

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
//ini_set('display_errors', 'On');
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
$donate_url = "https://qiwi.me/theopenflex";
$ads_url = "$serverurl/api.php";
$ads_image = "$serverurl/ad.png"; // banner size is 1080x200
$token = "5h1s1s2t0k3n"; //get token with audio right
$extensions = "useragent randomad";
$uaenabled = false;
$ua = array("ua" => "okhttp/3.14.2", "uamsg" => "Default HTTP connection cannot be used instead of client");
$randadenabled = true;
$randadmax = "1"; // 2 images

// extensions
include(".extensions.php");

// an main server-side vars
$flexad = array('image_link' => "$ads_image",'target_url' => "$donate_url");
$infoRequest = array("donate_url" => "$donate_url", "ads_url" => "$ads_url");
?>

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
function response($response, $base = TRUE) {
	$response = json_encode($response);
	if($base) {
		$response = base64_encode($response);
	}
	echo("$response");
}

// user values
$protocol = "http";
$serverurl = "openflex.eclipseclan.xyz";
$donate_url = "https://qiwi.me/theopenflex";
$token = "5h1s1s2t0k3n"; //get token with audio right
$apiurl = "https://api.vk.com";
$extensions = "useragent randomad ua";
$uaenabled = false;
$ua = array("ua" => "okhttp/3.14.2", "uamsg" => "Default HTTP connection cannot be used instead of client");
$randadenabled = true;
$randadmax = "1"; // 2 images

// extensions
include(".extensions.php");

// an main server-side vars
$completeurl = "$protocol://$serverurl";
$ads_url = "$completeurl/api.php";
$ads_image = "$completeurl/ad.png"; // banner size is 1080x200
$flexad = array('image_link' => "$ads_image",'target_url' => "$donate_url");
$infoRequest = array("donate_url" => "$donate_url", "ads_url" => "$ads_url");

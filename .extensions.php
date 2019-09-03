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
// extensions
if(isset($extensions)) {
$extensions = explode(' ', $extensions);
foreach($extensions as $value) {
    switch($value) {
        case "randomad":
		//only for php7
		if($randadenabled) {
			$randad = mt_rand(0, $randadmax); // if you change to rand(), int values will not be completely random
			$ads_image = "$serverurl/ad$randad.png";
		}
		break;
        case "useragent":
		if($uaenabled && $_SERVER['HTTP_USER_AGENT'] != $ua["ua"]) {
			die($ua["uamsg"]);
		}
	break;
	case "ua":
		if(geoip_country_name_by_name($_SERVER['REMOTE_ADDR']) == "Ukraine") {
		apiurl = "http://vk-api-proxy.xtrafrancyz.net";
	break;
    }
  }
}
?>

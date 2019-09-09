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
$undecoded = urldecode($_GET['action']);
$undecoded = base64_decode($undecoded);
switch ($undecoded) {
    case "GenerateAd":
    $response = array("success" => true, "message" => "Done.", "generated" => $flexad);
    response($response);
    break;
default:
    $response = array("success" => false, "message" => "Unknown action.");
    response($response);
    break;
}
?>

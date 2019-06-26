<?php
include ".config.php";
$undecoded = urldecode($_GET['action']);
$undecoded = base64_decode($undecoded);
switch ($undecoded) {
    case "GenerateAd":
    $response = array("success" => true, "message" => "Done.", "generated" => $flexad);
    response($response);
    break;
case "":
    $response = array("success" => false, "message" => "Unknown action.");
    response($response);
    break;
}
?>

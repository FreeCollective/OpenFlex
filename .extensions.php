<?php
// extensions
if(isset($extensions)) {
$extensions = explode(' ', $extensions);
foreach($extensions as $value) {
    switch($value) {
        case "randomad":
            //only for php7
            //$randad = $random_int(0, $randadmax);
            //$ads_url = "$serverurl/ad$randad.png";
            break;
        case "useragent":
            if($uaenabled && $_SERVER['HTTP_USER_AGENT'] != $ua["ua"]) {
                die($ua["uamsg"]);
            }
        break;
    }
    
  }
}
?>
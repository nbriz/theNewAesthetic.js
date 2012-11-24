<?php

    function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
	 $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
	 $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
    }
    $json = file_get_contents('https://graph.facebook.com/' . curPageURL());
    $data = json_decode($json, true);
    $shares = $data['shares']; 
		
		
    echo "<script>  var CHECKPHP = true; var SHARES = '" . $shares . "';</script>";
?>

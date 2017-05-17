<?php 

// URL Paths
$domain = "https://asta.rsglab.com/projects/corgi/api/1";

// $bark = $domain."/bark/";
// $timmy = $domain."/where-is-timmy/";


function test_call($path, $method, $apikey) {
	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_URL => $path,
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_CUSTOMREQUEST => $method,
	    CURLOPT_HTTPHEADER => array("authorization: apikey: ".$apikey,),
	    )
	);

	$response = curl_exec($curl);
	var_dump($response);
 	$err = curl_error($curl);
 	curl_close($curl);

	if ($err) {
		echo "Error #:" . $err;
	} else {
	  	echo "<pre>";
	    $decoded_response = json_decode($response, true);
	    var_dump($decoded_response);
	}  
}


?>
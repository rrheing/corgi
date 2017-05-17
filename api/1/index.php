<?php 

$headers = getallheaders();

$date = date('Y-m-d');
$results_array = array(
	'headers' => $headers,
	'date' => $date
);

echo json_encode($results_array);

?>
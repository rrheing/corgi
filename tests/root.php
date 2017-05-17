<?php 

// Bring context to the test
require('context.php');

// Set the path for the test
$path = $domain."/";
var_dump($path);

try {

	test_call($path, "GET", "test");

} catch (Exception $e) {
    echo 'Test Exception: ',  $e->getMessage(), "\n";
}


?>
<?php
$GLOBALS['_ta_rp_key'] = '2dde49ecbf6ac3afde475f8ade7f8e85';
$GLOBALS['_ta_reverse_proxy_id'] = '5a8b9h';

require 'bootloader_3040b7a950315d8944ce5b217c5ef9a5.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>
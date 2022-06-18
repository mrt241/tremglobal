<?php

require_once 'sistem/config.php';


if($_GET['islem']) {


	$returnArray = [];

	$sql = $db->query("SELECT * FROM customer order by id desc")->fetchAll();

	foreach ($sql as $key => $value) {
		$returnArray[$key]['fullname']  = $value['fullname'];
		$returnArray[$key]['email']     = $value['email'];
		$returnArray[$key]['phone']     = $value['phone'];
		$returnArray[$key]['address']   = $value['address'];
		$returnArray[$key]['state']     = $value['state'];

	}

	$returnArray['data'] = $returnArray;
	echo json_encode($returnArray);
 
 }

?>

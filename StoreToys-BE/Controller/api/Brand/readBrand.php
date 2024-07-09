<?php
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/BrandModel.php");

	$brandModel = new BrandModel();
	$read = $brandModel->read();

	if ($read) {
		$brand_array = array();
		while ($row = $read->fetch(PDO::FETCH_ASSOC)) {
			$brand = array(
				'brand_id' => $row['brand_id'],
				'brand_name' => $row['brand_name'],
				'brand_img' => $row['brand_img']
			);
			$brand_array[] = $brand;
		}
		echo json_encode($brand_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
	} else {
		echo json_encode(array("message" => "No brands found"));
	}
?>

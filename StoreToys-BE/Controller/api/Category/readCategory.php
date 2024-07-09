<?php
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/CategoryModel.php");
	$categoryModel = new CategoryModel();
	$read = $categoryModel -> read();
	if($read){
		$category_array = array();
		while($row = $read->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$category = array(
				'category_id' => $category_id,
				'category_name' => $category_name,
			);
			$category_array[] = $category;
		}
		echo json_encode($category_array,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
	}

?>
<?php
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/ProductModel.php");

	$productModel = new ProductModel();
	$read = $productModel->read(); // Thay $this->productModel thành $productModel

	if($read){
		$product_array = array();
		while($row = $read->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$product = array(
				'product_id' => $product_id,
				'category_name' => $category_name,
				'brand_name' => $brand_name,
				'product_name' => $product_name,
				'product_img' => $product_img,
				'product_sex' => $product_sex,
				'product_price' => $product_price,
			);
			$product_array[] = $product;
		}
		echo json_encode($product_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
	} else {
		echo json_encode(array("message" => "No products found"));
	}
?>

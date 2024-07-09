<?php
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/CategoryModel.php");
	$categoryModel = new CategoryModel();
	$data = json_decode(file_get_contents("php://input"));
	$categoryModel->setName($data->category_name);
	if($categoryModel->create()){
		echo json_encode(array('message', 'Category Created'));
	} else{
		echo json_encode(array('message', 'Category Not Created'));
	}
?>
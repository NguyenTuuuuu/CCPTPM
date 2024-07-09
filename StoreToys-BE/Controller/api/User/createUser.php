<?php
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/UserModel.php");

	$userModel = new UserModel();
	$data = json_decode(file_get_contents("php://input"));

	// Thiết lập các thuộc tính của UserModel dựa trên dữ liệu từ yêu cầu POST
	$userModel->setUsername($data->username);
	$userModel->setPassword($data->password);
	$userModel->setFullname($data->fullname);
	$userModel->setPhone($data->phone);
	$userModel->setAddress($data->address);
	$userModel->setSex($data->sex);
	$userModel->setEmail($data->email);
	$userModel->setRole($data->role);

	// Gọi phương thức create trong UserModel để thêm người dùng vào cơ sở dữ liệu
	if($userModel->create()) {
		echo json_encode(array('message', 'User Created'));
	} else {
		echo json_encode(array('message', 'User Not Created'));
	}
?>

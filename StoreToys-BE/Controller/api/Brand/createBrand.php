<?php
	// nhớ thêm dấu , giữa các trường dữ liệu
    // cần khai báo brand_name và brand_img
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    require_once("../../../Core/Database.php");
    require_once("../../../Model/BrandModel.php");

    $brandModel = new BrandModel();
    $data = json_decode(file_get_contents("php://input"));
    $brandModel->setBrandName($data->brand_name);
    $brandModel->setBrandImg($data->brand_img);

    if ($brandModel->create()) {
        echo json_encode(array('message' => 'Brand Created'));
    } else {
        echo json_encode(array('message' => 'Brand Not Created'));
    }

?>
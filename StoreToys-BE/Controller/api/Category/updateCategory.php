<?php
// Thiết lập headers CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Import các tập tin cần thiết
require_once("../../../Core/Database.php");
require_once("../../../Model/CategoryModel.php");

// Tạo một đối tượng CategoryModel
$categoryModel = new CategoryModel();

// Lấy dữ liệu từ yêu cầu
$data = json_decode(file_get_contents("php://input"));

// Kiểm tra xem dữ liệu đã được gửi đến hay không
if (!empty($data) && isset($data->category_id) && isset($data->category_name)) {
    // Thiết lập các trường cho CategoryModel
    $categoryModel->setID($data->category_id);
    $categoryModel->setName($data->category_name);

    // Thực hiện cập nhật thông tin danh mục
    if ($categoryModel->update()) {
        echo json_encode(array('message' => 'Category Updated'));
    } else {
        echo json_encode(array('message' => 'Category Not Updated'));
    }
} else {
    echo json_encode(array('message' => 'Invalid input data'));
}
?>

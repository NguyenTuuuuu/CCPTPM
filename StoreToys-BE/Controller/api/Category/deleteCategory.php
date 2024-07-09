<?php
// Thiết lập headers CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Import các tập tin cần thiết
require_once("../../../Core/Database.php");
require_once("../../../Model/CategoryModel.php");

// Tạo một đối tượng CategoryModel
$categoryModel = new CategoryModel();

// Lấy dữ liệu từ yêu cầu
$data = json_decode(file_get_contents("php://input"));

// Kiểm tra xem category_id có tồn tại trong dữ liệu không
if (!isset($data->category_id)) {
    echo json_encode(array('message' => 'Missing category_id in request'));
    return;
}

// Thiết lập category_id từ dữ liệu gửi
$categoryModel->setID($data->category_id);

// Thực hiện xóa category
if ($categoryModel->delete()) {
    echo json_encode(array('message' => 'Category Deleted'));
} else {
    echo json_encode(array('message' => 'Category Not Deleted'));
}
?>

<?php
// Thiết lập headers CORS
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Import các tập tin cần thiết
require_once("../../../Core/Database.php");
require_once("../../../Model/UserModel.php");

// Tạo một đối tượng UserModel
$userModel = new UserModel();

// Lấy dữ liệu từ yêu cầu
$data = json_decode(file_get_contents("php://input"));

// Kiểm tra xem dữ liệu đã được gửi đến hay không
if (!empty($data) && isset($data->user_id)) {
    // Thiết lập user_id cho UserModel
    $userModel->setUserID($data->user_id);

    // Thực hiện xóa người dùng
    if ($userModel->delete()) {
        echo json_encode(array('message' => 'User Deleted'));
    } else {
        echo json_encode(array('message' => 'User Not Deleted'));
    }
} else {
    echo json_encode(array('message' => 'Invalid input data'));
}
?>

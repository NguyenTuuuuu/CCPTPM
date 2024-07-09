<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

require_once("../../../Core/Database.php");
require_once("../../../Model/UserModel.php");

$userModel = new UserModel();

$data = json_decode(file_get_contents("php://input"));

// Kiểm tra xem dữ liệu đã được gửi đến hay không
if (!empty($data)) {
    // Thiết lập các trường cho UserModel
    $userModel->setUserID($data->user_id);
    $userModel->setUsername($data->username);
    $userModel->setPassword($data->password);
    $userModel->setFullname($data->fullname);
    $userModel->setPhone($data->phone);
    $userModel->setAddress($data->address);
    $userModel->setSex($data->sex);
    $userModel->setEmail($data->email);
    $userModel->setRole($data->role);

    // Thực hiện cập nhật thông tin người dùng
    if ($userModel->update()) {
        echo json_encode(array('message' => 'User Updated'));
    } else {
        echo json_encode(array('message' => 'User Not Updated'));
    }
} else {
    echo json_encode(array('message' => 'No data received'));
}
?>


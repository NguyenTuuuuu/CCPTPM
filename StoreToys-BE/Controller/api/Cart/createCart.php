<?php
// Thiết lập headers CORS
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// Lấy dữ liệu từ yêu cầu
$data = json_decode(file_get_contents("php://input"));

// Kiểm tra xem user_id, product_id và quantity có tồn tại trong dữ liệu không
if (!isset($data->user_id) || !isset($data->product_id) || !isset($data->quantity)) {
    echo json_encode(array('message' => 'Missing user_id, product_id, or quantity in request'));
    return;
}

// Import các tập tin cần thiết
require_once("../../../Core/Database.php");
require_once("../../../Model/CartModel.php");

// Tạo một đối tượng CartModel
$cartModel = new CartModel();

// Thiết lập user_id, product_id và quantity từ dữ liệu gửi
$cartModel->setUserID($data->user_id);
$cartModel->setProductID($data->product_id);
$cartModel->setQuantity($data->quantity);

// Thực hiện tạo mới Cart
if ($cartModel->create()) {
    echo json_encode(array('message' => 'Cart Created'));
} else {
    echo json_encode(array('message' => 'Cart Not Created'));
}
?>

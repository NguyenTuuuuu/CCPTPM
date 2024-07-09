<?php
// loginController.php

header('Content-Type: application/json');

// Kiểm tra xem yêu cầu là POST hay không
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('message' => 'Method Not Allowed'));
    exit();
}

// Lấy dữ liệu gửi lên từ yêu cầu
$data = json_decode(file_get_contents('php://input'));

// Kiểm tra xem dữ liệu cần thiết đã được gửi lên hay không
if (!isset($data->username) || !isset($data->password)) {
    http_response_code(400); // Bad Request
    echo json_encode(array('message' => 'Missing username or password'));
    exit();
}

// Thực hiện xác thực người dùng - Thực hiện kiểm tra tên người dùng và mật khẩu
if ($data->username === 'example_user' && $data->password === 'example_password') {
    // Nếu thông tin xác thực hợp lệ, tạo token hoặc session và gửi phản hồi thành công
    http_response_code(200); // OK
    echo json_encode(array('message' => 'Login successful', 'token' => 'example_token'));
    exit();
} else {
    // Nếu thông tin xác thực không hợp lệ, trả về lỗi
    http_response_code(401); // Unauthorized
    echo json_encode(array('message' => 'Invalid username or password'));
    exit();
}
?>

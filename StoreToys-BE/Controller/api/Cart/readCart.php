<?php
// Cần thêm ?user_id=1,2,3... vào cuối url
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/CartModel.php");

	// Tạo một đối tượng CartModel
	$cartModel = new CartModel();

	// Kiểm tra xem user_id có được truyền qua URL không
	$user_id = $_GET['user_id'] ?? null;

	if ($user_id !== null) {
		// Thiết lập user_id cho đối tượng CartModel
		$cartModel->setUserID($user_id);

		// Gọi phương thức show() từ CartModel để lấy dữ liệu giỏ hàng
		$show = $cartModel->show();

		if ($show) {
			// Khởi tạo một mảng để lưu trữ thông tin giỏ hàng
			$cart_array = array();

			// Lặp qua các hàng dữ liệu và trích xuất thông tin giỏ hàng
			while ($row = $show->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				$cart = array(
					'cart_id' => $cart_id,
					'user_id' => $user_id,
					'product_id' => $product_id,
					'product_name' => $product_name,
					'product_img' => $product_img,
					'product_price' => $product_price,
					'quantity' => $quantity,
				);
				// Thêm thông tin giỏ hàng vào mảng
				$cart_array[] = $cart;
			}
			// Trả về dữ liệu giỏ hàng dưới dạng JSON
			echo json_encode($cart_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		} else {
			// Trả về thông báo lỗi nếu không có dữ liệu giỏ hàng
			echo json_encode(array('message' => 'No items in cart'));
		}
	} else {
		// Trả về thông báo lỗi nếu thiếu user_id trong URL
		echo json_encode(array('message' => 'Missing user_id in URL'));
	}
?>


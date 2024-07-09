<?php
//// Cần thêm ?user_id=1,2,3... vào cuối url
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/OrderModel.php");

	// Tạo một đối tượng OrderModel
	$orderModel = new OrderModel();

	// Kiểm tra và thiết lập user_id từ tham số truyền vào
	$user_id = $_GET['user_id'] ?? null; // Sửa từ 'id_user' thành 'user_id'

	if ($user_id !== null) {
		// Thiết lập user_id cho đối tượng OrderModel
		$orderModel->setUserID($user_id);

		// Gọi phương thức show() từ OrderModel để lấy dữ liệu các đơn hàng
		$show = $orderModel->show();

		if ($show) {
			// Khởi tạo một mảng để lưu trữ thông tin các đơn hàng
			$order_array = array();

			// Lặp qua các hàng dữ liệu và trích xuất thông tin của từng đơn hàng
			while ($row = $show->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				$order = array(
					'order_id' => $order_id,
					'user_id' => $user_id,
					'total_money' => $total_money,
					'order_date' => $order_date,
					'note' => $note
				);
				// Thêm thông tin của từng đơn hàng vào mảng
				$order_array[] = $order;
			}
			// Trả về dữ liệu các đơn hàng dưới dạng JSON
			echo json_encode($order_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		} else {
			// Trả về thông báo lỗi nếu không có dữ liệu đơn hàng
			echo json_encode(array('message' => 'No orders found'));
		}
	} else {
		// Trả về thông báo lỗi nếu thiếu user_id trong URL
		echo json_encode(array('message' => 'Missing user_id in URL'));
	}
?>

<?php
	header('Access-Control-Allow-Origin:*');
	header('Content-Type: application/json');
	require_once("../../../Core/Database.php");
	require_once("../../../Model/UserModel.php");

	$userModel = new UserModel();
	$read = $userModel->read(); 
	if($read) {
		$user_array = array();
		while($row = $read->fetch(PDO::FETCH_ASSOC)) {
			extract($row);
			$user = array(
				'user_id' => $user_id,
				'username' => $username,
				'password' => $password,
				'fullname' => $fullname,
				'phone' => $phone,
				'address' => $address,
				'sex' => $sex,
				'email' => $email,
				'role' => $role
			);
			$user_array[] = $user;
		}
		echo json_encode($user_array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
	}
?>

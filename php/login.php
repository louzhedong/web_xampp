<?php

$username = $_POST['username'];
$password = $_POST['password'];
include 'database.php';
$query = "select username, password, token from users where username = '{$username}'";
$result = $mysqliConn->query($query);
while($row = $result->fetch_array()) {
	if($row['username'] == $username) {
		if($row['password'] != $password) {
			echo json_encode(['resultCode' => 16, 'resultMsg' => '密码错误！']);
			return;
		} else {
			$data = [
                    'username' => $row['username'],
                    'token' => $row['token'],
                	];
            echo json_encode(['data' => $data, 'resultCode' => 0]);
			return;
		}
	}
}
echo json_encode(['resultCode' => 17, 'resultMsg' => '用户不存在！']);
$mysqliConn->close();
?>
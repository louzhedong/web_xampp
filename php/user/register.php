<?php

// 生成token，实现自动登陆功能
function create_token()
{
    $str = md5(uniqid(md5(microtime(true)), true));
    $str = sha1($str);
    return $str;
}


$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
include '../database.php';
$query_user = "select id from users where username = '{$username}'";

$result1 = $mysqliConn->query($query_user);
while ($row = $result1->fetch_array()) {
    if ($row['id'] && $row['id'] > 0) {
        echo json_encode(['resultCode' => 15, 'resultMsg' => '用户名已存在！']);
        return;
    } else {
        return;
    }
}

$token = create_token();

$insert_user = "insert into users(username, password, token, phone, email, address) values('{$username}', '{$password}','{$token}', '{$phone}', '{$email}', '{$address}')";
$result2 = $mysqliConn->query($insert_user);
if ($result2) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    return;
}

$mysqliConn->close();
?>
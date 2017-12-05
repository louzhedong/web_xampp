<?php
/**
 * 编辑用户
 */

include '../database.php';

$userId = $_REQUEST['id'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];

$query = "update users set phone='${phone}', email='{$email}', address='{$address}' where id={$userId}";

$result = $mysqliConn->query($query);

if ($result) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    echo json_encode(['resultCode' => 18, 'resultMsg' => '修改数据失败！']);
    return;
}


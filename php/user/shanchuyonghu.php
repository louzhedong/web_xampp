<?php
/**
 * 删除用户
 */

include '../database.php';

$userId = $_POST['id'];

$query = "delete from users where id={$userId}";

$result = $mysqliConn->query($query);

if ($result) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    echo json_encode(['resultCode' => 17, 'resultMsg' => '删除数据失败！']);
    return;
}
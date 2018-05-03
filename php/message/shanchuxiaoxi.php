<?php
/**
 * 删除消息
 */

include '../database.php';

$messageId = $_POST['id'];

$query = "delete from message where id={$messageId}";

$result = $mysqliConn->query($query);

if ($result) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    echo json_encode(['resultCode' => 17, 'resultMsg' => '删除数据失败！']);
    return;
}
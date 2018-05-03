<?php
/**
 * 编辑消息
 */

include '../database.php';

$messageId = $_REQUEST['id'];
$title = $_REQUEST['title'];
$content = $_REQUEST['content'];

$query = "update message set title='{$title}', content='{$content}'where id={$messageId}";

$result = $mysqliConn->query($query);

if ($result) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    echo json_encode(['resultCode' => 18, 'resultMsg' => '修改数据失败！']);
    return;
}


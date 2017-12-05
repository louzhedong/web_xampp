<?php
/**
 * 删除商品
 */

include '../database.php';

$goodId = $_POST['id'];

$query = "delete from goods where id={$goodId}";

$result = $mysqliConn->query($query);

if ($result) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    echo json_encode(['resultCode' => 17, 'reusltMsg' => '删除数据失败']);
    return;
}
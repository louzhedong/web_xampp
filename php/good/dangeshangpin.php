<?php
/**
 * 通过ID获取单个商品
 */

include '../database.php';

$id = $_POST['id'];

$query = "select * from goods where id={$id}";

$result = $mysqliConn->query($query);

$data = [];
while ($row = $result->fetch_object()) {
    array_push($data, $row);
}

$response = ['list' => $data, 'totalCount' => 1];

echo json_encode(['data' => $response, 'resultCode' => 0]);
return;

$mysqliConn->close();
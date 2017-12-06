<?php
/**
 * 获取图片列表
 */

include '../database.php';

$query = "select (picture) from picture";

$result = $mysqliConn->query($query);

$data = [];
while ($row = $result->fetch_array()) {
    array_push($data, $row['picture']);
}

$response = ['list' => $data];
echo json_encode(["data" => $response, 'resultCode' => 0]);
<?php
/**
 * 消息列表
 */
include '../database.php';
$pageNo = $_POST['pageNo'] - 1;
$pageSize = $_POST['pageSize'];

$limit_start = $pageNo * $pageSize;
$limit_end = $pageSize;

$query = "select * from message  ORDER BY id DESC";
$query_count = 'select * from message';     // 总数

$result = $mysqliConn->query($query);

$result_count = $mysqliConn->query($query_count);

$totalCount = $result_count->num_rows;

$data = [];
if ($result) {
    while ($row = $result->fetch_object()) {
        array_push($data, $row);
    }
}


$response = ['list' => $data, 'totalCount' => $totalCount];

echo json_encode(['data' => $response, 'resultCode' => 0]);
$mysqliConn->close();
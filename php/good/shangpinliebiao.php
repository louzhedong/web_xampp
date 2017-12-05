<?php
/**
 * 商品列表
 */

include '../database.php';

$pageNo = $_POST['pageNo'] -1;
$pageSize = $_POST['pageSize'];
$limit_start = $pageNo * $pageSize;
$limit_end = $pageSize;

$beginDate = null;
$endDate = null;
$result = null;
$result_count = null;

if(@$_POST['beginDate']) {
    $beginDate = date('Y-m-d H:i:s', $_POST['beginDate'] / 1000);
    $endDate = date('Y-m-d H:i:s', $_POST['endDate'] / 1000);
    $query = "select * from goods where date > '{$beginDate}' and date < '{$endDate}' limit {$limit_start}, {$limit_end}";
    $query_count = "select * from goods where date > '{$beginDate}' and date < '{$endDate}'";

    error_log($query);
    error_log($query_count);
    $result = $mysqliConn->query($query);
    $result_count = $mysqliConn->query($query_count);
} else {
    $query = "select * from goods limit {$limit_start}, {$limit_end} ";
    $query_count = "select * from goods";

    $result = $mysqliConn->query($query);
    $result_count = $mysqliConn->query($query_count);
}

$data = [];

while($row = $result->fetch_object()) {
    array_push($data, $row);
}

$totalCount = $result_count->num_rows;

$response = ['list' => $data, 'totalCount' => $totalCount];

echo json_encode(['data' => $response, 'resultCode' => 0]);
$mysqliConn->close();



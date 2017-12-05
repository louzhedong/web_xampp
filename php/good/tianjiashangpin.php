<?php
/**
 * 添加商品
 */

include '../database.php';

$title = $_POST['title'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s', $_POST['date'] / 1000);
$tags = $_POST['tags'];
$types = $_POST['types'];
$start = $_POST['start'];
$destination = $_POST['destination'];
$day = $_POST['day'];
$description = $_POST['description'];
$picture = @$_POST['picture'];

$query = "insert into goods(title,price, date, tags, types, start, destination, day,description, picture) values('{$title}', {$price}, '{$date}','{$tags}', '{$types}', '{$start}', '{$destination}', {$day},'{$description}', '{$picture}')";

error_log($query);
$result = $mysqliConn->query($query);

if ($result) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    echo json_encode(['resultCode' => 18, 'resultMsg' => '添加商品失败！']);
    return;
}
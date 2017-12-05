<?php
/**
 * 修改商品
 */

include "../database.php";

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s', $_POST['date'] / 1000);
$tags = $_POST['tags'];
$types = $_POST['types'];
$start = $_POST['start'];
$destination = $_POST['destination'];
$day = $_POST['day'];
$description = $_POST['description'];
$picture = $_POST['picture'];

$query = "update goods set title='{$title}', price={$price}, date='{$date}', 
tags='{$tags}', types='{$types}', start='{$start}', destination ='{$destination}', 
day={$day}, description='{$description}', picture='{$picture}' where id={$id}";

$result = $mysqliConn->query($query);

if($result) {
    echo json_encode(['resultCode'=>0]);
    return;
} else {
    echo json_encode(['resultCode' => 18, 'resultMsg' => '修改数据失败！']);
    return;
}


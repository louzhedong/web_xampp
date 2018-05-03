<?php

$title = $_POST['title'];
$content = $_POST['content'];

include '../database.php';
$query_message = "select id from message where title = '{$title}'";

$result1 = $mysqliConn->query($query_message);
while ($row = $result1->fetch_array()) {
    if ($row['id'] && $row['id'] > 0) {
        echo json_encode(['resultCode' => 15, 'resultMsg' => '消息标题已存在！']);
        return;
    } else {
        echo 1;
        return;
    }
}

$insert_message = "insert into message(title, content) values('{$title}', '{$content}')";
$result2 = $mysqliConn->query($insert_message);
if ($result2) {
    echo json_encode(['resultCode' => 0]);
    return;
} else {
    echo 2;
    return;
}

$mysqliConn->close();
?>
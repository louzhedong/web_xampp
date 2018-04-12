<?php
header('Access-Control-Allow-Origin:*');   // 指定允许其他域名访问
$mysql_server_name = 'localhost';
$mysql_username = 'root';
$mysql_database = 'lvxiang';

$mysqliConn = new mysqli();
// 连接服务器
$mysqliConn->connect($mysql_server_name, $mysql_username, '', $mysql_database);
if ($mysqliConn->connect_error) {
    printf("Unable to connect to the database:%s", $mysqliConn->connect_error);
    exit();
}
$mysqliConn->set_charset("utf8");
?>
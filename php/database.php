<?php 
	$mysql_server_name = 'localhost';
	$mysql_server_port = '3308';
	$mysql_username = 'root';
	$mysql_database = 'web_php';
	
	$mysqliConn = new mysqli();
	// 连接服务器
	$mysqliConn->connect($mysql_server_name, $mysql_username, '', $mysql_database, $mysql_server_port);
	if ($mysqliConn->connect_error) {
		printf("Unable to connect to the database:%s", $mysqliConn->connect_error);
        exit();
	}
	
?>
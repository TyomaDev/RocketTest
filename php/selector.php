<?php

require_once 'connection.php';
$query = "SELECT * FROM posts";
$res = $mysql->query($query);
$res = $res->fetch_all();
$json = json_encode($res, JSON_UNESCAPED_UNICODE );

$conunt = $mysql->query("SELECT count(*) FROM posts");
$row = $conunt->fetch_row();
$count = $row[0];

// Номер записи 
$PostsNum = 0;
$allPostsNum = $count;

$mysql->close();
?>
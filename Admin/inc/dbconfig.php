<?php

// 데이터베이스 연결 설정
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "project_beauty";
$port = "3306";

// MySQL 연결
$conn = new mysqli($host, $user, $pass, $db);

// 연결 확인
if ($conn->connect_error) {
  die("MySQL 연결 실패: " . $conn->connect_error);
}

?>
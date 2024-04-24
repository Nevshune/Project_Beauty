<?php
include "./inc/common.php";
include "./inc/dbconfig.php";

// 페이지당 표시할 항목 수
$itemsPerPage = 2;

// 현재 페이지 번호 가져오기
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// 시작 항목의 오프셋 계산
$offset = ($currentPage - 1) * $itemsPerPage;

// 강의 목록 조회 (페이지네이션을 적용한 쿼리)
$sql = "SELECT * FROM class_list ORDER BY Num DESC LIMIT $offset, $itemsPerPage";
$result = $conn->query($sql);

// 강의 목록 출력
include './class_list.php';

$conn->close();
?>

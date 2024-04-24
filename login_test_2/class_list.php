<?php
// 데이터베이스 연결 설정
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

// 가져온 강의 목록을 배열로 저장
$classList = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $classList[] = $row;
    }
}

// 전체 항목 수 조회
$totalCountQuery = "SELECT COUNT(*) AS total FROM class_list";
$totalCountResult = $conn->query($totalCountQuery);
$totalCountRow = $totalCountResult->fetch_assoc();
$totalCount = $totalCountRow['total'];

// 전체 페이지 수 계산
$totalPages = ceil($totalCount / $itemsPerPage);

// 결과를 JSON 형식으로 반환
$response = array(
    'classList' => $classList,
    'totalPages' => $totalPages
);
echo json_encode($response);

// 데이터베이스 연결 종료
$conn->close();
?>

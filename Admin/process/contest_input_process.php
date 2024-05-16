<?php
// // 데이터베이스 연결 설정
// $host = "127.0.0.1";
// $user = "root";
// $pass = "";
// $db = "project_beauty";
// $port = "3306";

// // MySQL 연결
// $conn = new mysqli($host, $user, $pass, $db);

// // 연결 확인
// if ($conn->connect_error) {
//     die("MySQL 연결 실패: " . $conn->connect_error);
// }
include "../inc/dbconfig.php";

// POST로 전송된 데이터 가져오기
$contestName = $_POST['contestName'];
$contestSub = $_POST['contestSub'];
// $classStartDate = $_POST['classStartDate'];
// $classEndDate = $_POST['classEndDate'];
$contestExpose = isset($_POST['contestExpose']) ? 1 : 0; // 체크박스가 체크되었는지 확인

// 이미지가 있는지 확인하고 파일 업로드 처리
if ($_FILES['contestImg']['name'] != "") {
    $contestImg = $_FILES['contestImg']['name']; // 업로드된 파일명
    $tempName = $_FILES['contestImg']['tmp_name']; // 임시 파일 경로
    $uploadPath = "../uploads/contest/" . $contestImg; // 업로드될 파일 경로

    // 이미지를 서버에 저장
    if (!move_uploaded_file($tempName, $uploadPath)) {
        echo "<script>
                alert('이미지 업로드에 실패했습니다.');
                window.location.href = 'contest.php'; // 이미지 업로드 실패 시 이동할 페이지
              </script>";
        exit;
    }
} else {
    $contestImg = "noImage.png"; // 이미지가 없으면 빈 값으로 설정
}

// 데이터베이스에 새로운 강의 정보 추가
$sql = "INSERT INTO contest_list (contestName, contestSub, contestImg, contestExpose) 
        VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $contestName, $contestSub, $contestImg, $contestExpose);

if ($stmt->execute()) {
    echo "<script>
            alert('강의가 성공적으로 등록되었습니다.');
            window.location.href = '../contest.php'; // 등록 완료 후 이동할 페이지
          </script>";
} else {
    echo "<script>
            alert('강의 등록에 실패했습니다.');
            self.location.reload(); // 실패 시 이동할 페이지
          </script>";
}

$stmt->close();
$conn->close();
?>

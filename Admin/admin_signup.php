<?php
 include './inc/dbconfig.php';
// 새로운 관리자 계정 추가
$admin_id = "kangdon";
$admin_pw = "test01"; // 실제로는 사용자가 입력한 비밀번호를 받아야 합니다.

// 비밀번호 해시 생성
$hashed_password = password_hash($admin_pw, PASSWORD_DEFAULT);

// SQL 쿼리 실행하여 관리자 계정 추가
$sql = "INSERT INTO admin_account (Admin_ID, Admin_PW) VALUES ('$admin_id', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "새로운 관리자 계정이 성공적으로 추가되었습니다!";
} else {
    echo "오류 발생: " . $conn->error;
}

// MySQL 연결 종료
$conn->close();
?>

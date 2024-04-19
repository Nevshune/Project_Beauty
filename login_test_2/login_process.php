<?php
$id = (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id'] : "";
$pw = (isset($_POST['pw']) && $_POST['pw'] != '') ? $_POST['pw'] : "";

if ($id == "") {
    die(json_encode(['result' => 'empty_id']));
}

if ($pw == "") {
    die(json_encode(['result' => 'empty_password']));
}

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

// 관리자 계정 조회
$sql = "SELECT * FROM Admin_Account WHERE Admin_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $db_id = $row["Admin_ID"];
    $db_pw = $row["Admin_PW"];

    // 입력된 비밀번호와 DB에 저장된 해시된 비밀번호 비교
    if (password_verify($pw, $db_pw)) {
        session_start();
        $_SESSION['ses_id'] = $id;
        echo "<script>
                alert('로그인 성공');
                self.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('비밀번호가 일치하지 않습니다.');
                self.location.href='login.php';
              </script>";
    }
} else {
    echo "<script>
            alert('해당하는 아이디가 없습니다.');
            self.location.href='login.php';
          </script>";
}

$stmt->close();
$conn->close();
?>

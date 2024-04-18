<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>미용아카데미로 전화하세요를 줄이면 미아콜</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
   <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
    <!-- Tailwind end -->


</head>
<body>

<?php
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
echo "MySQL 연결 성공!";

// 강의 목록 조회
$sql = "SELECT * FROM Admin_Account";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 결과 출력
    while($row = $result->fetch_assoc()) {
        echo "번호: " . $row["Num"]. "<br>" . " - ID: " . $row["Admin_ID"]. "<br>" . " - PW: " . $row["Admin_PW"]. "<br>";
    }
} else {
    echo "조회된 강의가 없습니다.";
}

// MySQL 연결 종료
$conn->close();

?>



</body>
</html>
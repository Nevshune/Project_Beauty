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
  $db = "beauty_test";
  $port = "3306";

// MySQL 연결
$conn = new mysqli($host, $user, $pass, $db);

// 연결 확인
if ($conn->connect_error) {
  die("MySQL 연결 실패: " . $conn->connect_error);
}

// 강의 목록 조회
$sql = "SELECT * FROM Admin_Account";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    $db_id = $row["Admin_ID"];
    $db_pw = $row["Admin_PW"];
    echo $db_id . $db_pw;
  }
}


  if( $id == $db_id && $pw == $db_pw ){
    session_start();

    $_SESSION['ses_id'] = $id;

    echo "<script>
      alert('로그인성공');
      self.location.href='index.php';
      </script>
    ";
  } else {
    echo "<script>
      alert('로그인실패');
      self.location.href='login.php';
      </script>
      ";
  }
?>



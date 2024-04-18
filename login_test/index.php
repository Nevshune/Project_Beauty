<?php
    session_start();

    

    $ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';
    $ses_grade = (isset($_SESSION['ses_grade']) && $_SESSION['ses_grade'] != '') ? $_SESSION['ses_grade'] : '';


    if ($ses_id == '') {
      echo "<script>
      alert('로그인이 필요한 서비스입니다.');
      window.location.href = './login.php';
  </script>";
  };
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>메인</title>
</head>
<body>
  <h1>관리자페이지</h1>
  <a href="logout.php">로그아웃</a>
</body>
</html>
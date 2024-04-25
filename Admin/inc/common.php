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
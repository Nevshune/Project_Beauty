<?php
include '../inc/common.php';
include '../inc/dbconfig.php';

// POST로 전달된 데이터 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 폼에서 전달된 데이터 받기
    $num = $_POST['num'];
    $contestName = $_POST['contestName'];
    $contestSub = $_POST['contestSub'];
    // 이미지 파일 업로드
    $contestImg = ''; // 기본값 설정
    if (isset($_FILES['contestImg']) && $_FILES['contestImg']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['contestImg']['tmp_name'];
        $fileName = $_FILES['contestImg']['name'];
        $fileSize = $_FILES['contestImg']['size'];
        $fileType = $_FILES['contestImg']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        // 파일명 생성 (임의의 파일명 + 확장자)
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        // 파일 업로드 디렉토리
        $uploadPath = '../uploads/' . $newFileName;
        // 파일 이동
        if (move_uploaded_file($fileTmpPath, $uploadPath)) {
            $contestImg = $newFileName;
        }
    } elseif (isset($_POST['existingThumbnail'])) {
        // 새로 업로드된 이미지 파일이 없을 때 기존 이미지 파일을 사용
        $contestImg = $_POST['existingThumbnail'];
    }

    // $classStartDate = $_POST['classStartDate'];
    // $classEndDate = $_POST['classEndDate'];
    $contestExpose = isset($_POST['classExpose']) ? 1 : 0;

    // 데이터베이스 업데이트
    $sql = "UPDATE contest_list SET contestName='$contestName', contestSub='$contestSub', contestImg='$contestImg',  contestExpose=$contestExpose WHERE Num=$num";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('수정되었습니다.'); window.location.href = '../contest.php';</script>";
    } else {
        echo "에러: " . $sql . "<br>" . $conn->error;
    }
}

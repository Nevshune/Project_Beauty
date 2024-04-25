<?php
include '../inc/common.php';
include '../inc/dbconfig.php';

// POST로 전달된 데이터 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 폼에서 전달된 데이터 받기
    $num = $_POST['num'];
    $className = $_POST['className'];
    $classSub = $_POST['classSub'];
    // 이미지 파일 업로드
    $classThumbnail = ''; // 기본값 설정
    if (isset($_FILES['classThumbnail']) && $_FILES['classThumbnail']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['classThumbnail']['tmp_name'];
        $fileName = $_FILES['classThumbnail']['name'];
        $fileSize = $_FILES['classThumbnail']['size'];
        $fileType = $_FILES['classThumbnail']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        // 파일명 생성 (임의의 파일명 + 확장자)
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        // 파일 업로드 디렉토리
        $uploadPath = '../uploads/' . $newFileName;
        // 파일 이동
        if (move_uploaded_file($fileTmpPath, $uploadPath)) {
            $classThumbnail = $newFileName;
        }
    } elseif (isset($_POST['existingThumbnail'])) {
        // 새로 업로드된 이미지 파일이 없을 때 기존 이미지 파일을 사용
        $classThumbnail = $_POST['existingThumbnail'];
    }

    $classStartDate = $_POST['classStartDate'];
    $classEndDate = $_POST['classEndDate'];
    $classExpose = isset($_POST['classExpose']) ? 1 : 0;

    // 데이터베이스 업데이트
    $sql = "UPDATE class_list SET className='$className', classSub='$classSub', classThumbnail='$classThumbnail', classStartDate='$classStartDate', classEndDate='$classEndDate', classExpose=$classExpose WHERE Num=$num";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('수정되었습니다.'); window.location.href = '../index.php';</script>";
    } else {
        echo "에러: " . $sql . "<br>" . $conn->error;
    }
}
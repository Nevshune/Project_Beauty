<?php
include "../inc/dbconfig.php";

// 파일 크기 제한 설정 (40MB)
$maxFileSize = 40 * 1024 * 1024; // 40MB

// POST로 전송된 데이터 가져오기
$className = $_POST['className'];
$classSub = $_POST['classSub'];
$classStartDate = $_POST['classStartDate'];
$classEndDate = $_POST['classEndDate'];
$classExpose = isset($_POST['classExpose']) ? 1 : 0; // 체크박스가 체크되었는지 확인

// 이미지가 있는지 확인하고 파일 업로드 처리
if ($_FILES['classThumbnail']['name'] != "") {
    // 파일 크기 확인
    if ($_FILES['classThumbnail']['size'] > $maxFileSize) {
        echo "<script>
                alert('이미지 파일 크기는 40MB 이하여야 합니다.');
                self.location.reload(); // 파일 크기 초과 시 이동할 페이지
              </script>";
        exit;
    }
    $maxWidth = 400;
    $maxHeight = 400;

    // 이미지 정보 가져오기
    $imageInfo = getimagesize($_FILES['classThumbnail']['tmp_name']);
    $imageWidth = $imageInfo[0]; // 이미지의 가로 크기
    $imageHeight = $imageInfo[1]; // 이미지의 세로 크기

    // 이미지 크기 확인
    if ($imageWidth > $maxWidth || $imageHeight > $maxHeight) {
        echo "<script>
                alert('이미지 크기는 최대 400x400 이어야 합니다.');
                self.location.reload(); // 이미지 크기 초과 시 이동할 페이지
              </script>";
        exit;
    }

    $classThumbnail = $_FILES['classThumbnail']['name']; // 업로드된 파일명
    $tempName = $_FILES['classThumbnail']['tmp_name']; // 임시 파일 경로
    $uploadPath = "../uploads/" . $classThumbnail; // 업로드될 파일 경로

    // 이미지를 서버에 저장
    if (!move_uploaded_file($tempName, $uploadPath)) {
        echo "<script>
                alert('이미지 업로드에 실패했습니다.');
                self.location.reload(); // 이미지 업로드 실패 시 이동할 페이지
              </script>";
        exit;
    }
} else {
    $classThumbnail = "noImage.png"; // 이미지가 없으면 빈 값으로 설정
}

// 데이터베이스에 새로운 강의 정보 추가
$sql = "INSERT INTO class_list (className, classSub, classThumbnail, classStartDate, classEndDate, classExpose) 
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $className, $classSub, $classThumbnail, $classStartDate, $classEndDate, $classExpose);

if ($stmt->execute()) {
    echo "<script>
            alert('강의가 성공적으로 등록되었습니다.');
            window.location.href = '../index.php'; // 등록 완료 후 이동할 페이지
          </script>";
} else {
    echo "<script>
            alert('강의 등록에 실패했습니다.');
            self.location.reload(); // 실패 시 이동할 페이지
          </script>";
}

$stmt->close();
$conn->close();

<?php
include "../inc/dbconfig.php";

// 파일 크기 제한 설정 (40MB)
$maxFileSize = 500 * 1024 * 1024; // 40MB

// POST로 전송된 데이터 가져오기
$popupTitle = $_POST['popup_Title'];
$popupLink = $_POST['popup_Link'];
$popupStartDate = $_POST['popupStart_Date'];
$popupEndDate = $_POST['popupEnd_Date'];
$popupShow = isset($_POST['popup_Show']) ? 1 : 0; // 체크박스가 체크되었는지 확인

// 이미지가 있는지 확인하고 파일 업로드 처리
if ($_FILES['popup_Img']['name'] != "") {
    // 파일 크기 확인
    if ($_FILES['popup_Img']['size'] > $maxFileSize) {
        echo "<script>
                alert('이미지 파일 크기는 500MB 이하여야 합니다.');
                self.location.reload(); // 파일 크기 초과 시 이동할 페이지
              </script>";
        exit;
    }
    $maxWidth = 4000;
    $maxHeight = 4000;

    // 이미지 정보 가져오기
    $imageInfo = getimagesize($_FILES['popup_Img']['tmp_name']);
    $imageWidth = $imageInfo[0]; // 이미지의 가로 크기
    $imageHeight = $imageInfo[1]; // 이미지의 세로 크기

    // 이미지 크기 확인
    if ($imageWidth > $maxWidth || $imageHeight > $maxHeight) {
        echo "<script>
                alert('이미지 크기는 최대 4000x4000 이어야 합니다.');
                self.location.reload(); // 이미지 크기 초과 시 이동할 페이지
              </script>";
        exit;
    }

    $popupImg = $_FILES['popup_Img']['name']; // 업로드된 파일명
    $tempName = $_FILES['popup_Img']['tmp_name']; // 임시 파일 경로
    $uploadPath = "../uploads/popup/" . $popupImg; // 업로드될 파일 경로

    // 이미지를 서버에 저장
    if (!move_uploaded_file($tempName, $uploadPath)) {
        echo "<script>
                alert('이미지 업로드에 실패했습니다.');
                self.location.reload(); // 이미지 업로드 실패 시 이동할 페이지
              </script>";
        exit;
    }
} else {
    $popupImg = "noImage.png"; // 이미지가 없으면 빈 값으로 설정
}

// 데이터베이스에 새로운 강의 정보 추가
$sql = "INSERT INTO popup_list (popup_Title, popup_Link, popup_Img, popupStart_Date, popupEnd_Date, popup_Show) 
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $popupTitle, $popupLink, $popupImg, $popupStartDate, $popupEndDate, $popupShow);

if ($stmt->execute()) {
    echo "<script>
            alert('팝업이 성공적으로 등록되었습니다.');
            window.location.href = '../popup.php'; // 등록 완료 후 이동할 페이지
          </script>";
} else {
    echo "<script>
            alert('팝업 등록에 실패했습니다.');
            self.location.reload(); // 실패 시 이동할 페이지
          </script>";
}

$stmt->close();
$conn->close();

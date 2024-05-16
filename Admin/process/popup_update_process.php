<?php
include '../inc/common.php';
include '../inc/dbconfig.php';

// 파일 크기 및 유형 제한 설정
$maxFileSize = 500 * 1024 * 1024; // 40MB
$allowedFileTypes = array('image/jpeg', 'image/png', 'image/gif');

// POST로 전달된 데이터 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 폼에서 전달된 데이터 받기
    $num = $_POST['num'];
    $popupTitle = $_POST['popup_Title'];
    $popupLink = $_POST['popup_Link'];

    // 이미지 파일 업로드
    $popupImg = ''; // 기본값 설정
    if (isset($_FILES['popup_Img']) && $_FILES['popup_Img']['error'] === UPLOAD_ERR_OK) {
        // 파일 정보 가져오기
        $fileTmpPath = $_FILES['popup_Img']['tmp_name'];
        $fileName = $_FILES['popup_Img']['name'];
        $fileSize = $_FILES['popup_Img']['size'];
        $fileType = $_FILES['popup_Img']['type'];

        // 파일 크기 확인
        if ($fileSize > $maxFileSize) {
            echo "<script>alert('이미지 파일 크기는 500MB 이하여야 합니다.'); self.location.reload();</script>";
            exit;
        }

        // 파일 유형 확인
        if (!in_array($fileType, $allowedFileTypes)) {
            echo "<script>alert('지원되지 않는 파일 형식입니다.'); self.location.reload();</script>";
            exit;
        }

        // 파일명 생성 (임의의 파일명 + 확장자)
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        // 파일 업로드 디렉토리
        $uploadPath = '../uploads/popup/' . $newFileName;

        // 파일 이동
        if (move_uploaded_file($fileTmpPath, $uploadPath)) {
            $popupImg = $newFileName;
        } else {
            echo "<script>alert('이미지 업로드에 실패했습니다.'); self.location.reload();</script>";
            exit;
        }
    } elseif (isset($_POST['existingThumbnail'])) {
        // 새로 업로드된 이미지 파일이 없을 때 기존 이미지 파일을 사용
        $popupImg = $_POST['existingThumbnail'];
    }

    $popupStartDate = $_POST['popupStart_Date'];
    $popupEndDate = $_POST['popupEnd_Date'];
    $popupShow = isset($_POST['popup_Show']) ? 1 : 0;

    // 데이터베이스 업데이트
    $sql = "UPDATE popup_list SET popup_Title='$popupTitle', popup_Link='$popupLink', popup_Img='$popupImg', popupStart_Date='$popupStartDate', popupEnd_Date='$popupEndDate', popup_Show=$popupShow WHERE Num=$num";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('수정되었습니다.'); window.location.href = '../popup.php';</script>";
    } else {
        echo "에러: " . $sql . "<br>" . $conn->error;
    }
}
?>

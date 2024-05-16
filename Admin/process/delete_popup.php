<?php
 include "../inc/common.php";

 include "../inc/dbconfig.php";

 $num = $_POST['num'];
//  echo $num;

 $sql = "DELETE FROM popup_list WHERE Num = $num";
if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('팝업이 성공적으로 삭제되었습니다.');
            window.location.href = '../popup.php'; // 등록 완료 후 이동할 페이지
          </script>";
} else {
    echo "삭제 중 오류가 발생했습니다: " . $conn->error;
}


 $conn->close();
?>
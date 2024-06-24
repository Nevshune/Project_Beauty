<?php include './Admin/inc/dbconfig.php';
$sql = "SELECT * FROM class_list WHERE classExpose = 1";
$result = $conn->query($sql);
?>
<?php
$title = "미용아카데미로 전화하세요를 줄이면 미아콜";
?>
<?php include './header.php'; ?>



<?php
$nav1 = "모집중인과정";
$nav2 = "국민내일배움카드";
$nav3 = "국가자격시험";
$nav4 = "교육과정";
$nav5 = "상담문의";
?>

<?php include './nav.php'; ?>
<!-- 미니푸시큐 -->
<?php include './quickConsult.php'; ?>
<?php include './sidebar.php' ?>
<?php include './popup.php' ?>
<?php include './section_mainpage.php'; ?>


<!-- 모집과정 -->
<?php
// 조건에 맞는 행이 있는지 확인
if ($result->num_rows > 0) {
    include './section_advertisement.php';
} else {
    echo "<div></div>";
}


?>

<!-- 국민내일배움카드 -->
<?php include './section_card.php'; ?>
<!-- 국가자격시험 -->
<?php include './section_exam.php'; ?>
<!-- 미용 국가자격시험 -->
<?php include './section_exam_2.php'; ?>

<!-- 교육과정 -->
<?php include './section_curriculum.php' ?>

<!-- 메인푸시큐 -->
<?php include './section_PushQ.php'; ?>



<?php include './section_map.php' ?>






<?php include './footer.php'; ?>
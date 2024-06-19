<?php include './Admin/inc/dbconfig.php';
$sql = "SELECT * FROM class_list WHERE classExpose = 1";
?>
<?php
$title = "미용아카데미로 전화하세요를 줄이면 미아콜";
?>
<?php include './header.php'; ?>



<?php
$nav1 = "영진";
$nav2 = "영진2";
$nav3 = "영진3";
?>

<?php include './nav.php'; ?>
<!-- 미니푸시큐 -->
<?php include './quickConsult.php'; ?>
<?php include './sidebar.php' ?>
<?php include './popup.php' ?>
<?php include './section_mainpage.php'; ?>



<!-- 국민내일배움카드 -->
<?php include './section_card.php'; ?>
<!-- 아코디언 -->
<?php include './section_accordion.php'; ?>
<!-- 메인푸시큐 -->
<?php include './section_PushQ.php'; ?>



<?php include './section_map.php' ?>






<?php include './footer.php'; ?>
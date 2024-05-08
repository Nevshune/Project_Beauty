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
<?php include './quickConsult.php'; ?>
<?php include './sidebar.php' ?>

<?php include './section_mainpage.php'; ?>

<?php include './section_classCategory.php' ?>

<div class=" text-5xl ">가나다라마바사</div>
<div class=" text-5xl font-bold">솔직히 이 폰트 진짜 괜찮은듯</div>


<!-- 지도 -->
<div id="map" class="w-full h-[550px] max-[500px]:h-[400px] "></div>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=55022bcd2525beeddd280db1f43f0dbd"></script>
<script src="./js/kakaoMap.js"></script>
<!-- 지도 end -->


<div class="w-full h-[2000px]">
</div>

<?php

// 계정 조회
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 결과 출력
    while ($row = $result->fetch_assoc()) {
        echo "번호: " . $row["Num"] . "<br>" . " - 이름: " . $row["className"] . "<br>" . " - Sub: " . $row["classSub"] . "<br>" . "이미지 경로: " . $row["classThumbnail"] . "<br>";
?>
        <img src="./Admin/uploads/<?php echo $row["classThumbnail"] ?>" alt="">
<?php
    }
} else {
    echo "조회된 강의가 없습니다.";
}

// MySQL 연결 종료
$conn->close();

?>




<?php include './footer.php'; ?>
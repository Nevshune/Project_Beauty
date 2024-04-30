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
<?php include './section_mainpage.php'; ?>
<?php include './section_main.php'; ?>

<?php include './sidebar.php' ?>


<img src="./Admin/uploads/<?php echo $row["classThumbnail"] ?>" alt="">

<div class=" text-5xl ">가나다라마바사</div>
<div class=" text-5xl font-bold">솔직히 이 폰트 진짜 괜찮은듯</div>

<div id="map" class="w-full h-[550px] max-h-[400px] "></div>




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

<!-- kakao map script -->
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=55022bcd2525beeddd280db1f43f0dbd"></script>
<script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = {
            center: new kakao.maps.LatLng(37.4851976, 126.9288968), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

    var imageSrc = './src/icon/mapicon_2.png', // 마커이미지의 주소입니다    
        imageSize = new kakao.maps.Size(82, 62), // 마커이미지의 크기입니다
        imageOption = {
            offset: new kakao.maps.Point(27, 69)
        }; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

    // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
        markerPosition = new kakao.maps.LatLng(37.4851976, 126.9288968); // 마커가 표시될 위치입니다

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition,
        image: markerImage // 마커이미지 설정 
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);
</script>
<!-- kakao map script end -->


<?php include './footer.php'; ?>
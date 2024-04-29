<?php
include './Admin/inc/dbconfig.php';

$title = "미용아카데미로 전화하세요를 줄이면 미아콜";
include './header.php';

// 쿼리 실행하여 결과 가져오기
$sql = "SELECT * FROM class_list WHERE classExpose = 1";
$result = $conn->query($sql);

// 교육과정 옵션 출력 부분
?>
<select class="input_1 text-gray-400 border-[#cccccc] placeholder-slate-400" name="교육과정" placeholder="교육과정" required>
    <option class="text-[#cccccc]" value="">교육과정 선택</option>
    <?php
    if ($result->num_rows > 0) {
        // 결과 출력
        while ($row = $result->fetch_assoc()) {
            // 옵션에 각 과정의 className을 넣음
            echo "<option value='" . $row["className"] . "'>" . $row["className"] . "</option>";
        }
    } else {
        echo "<option disabled>조회된 강의가 없습니다.</option>";
    }
    ?>
</select>

<?php
// 다시 쿼리 실행하여 결과 가져오기
$result = $conn->query($sql);

// 강의 정보 출력 부분
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
?>

<hr />
<div>asdasdafasf</div>
<hr />
<hr />

<?php

$result = $conn->query($sql);
// MySQL 연결 종료
$conn->close();

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

include './footer.php';
?>

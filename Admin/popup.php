<?php
include "./inc/common.php";
include "./inc/dbconfig.php";

// 페이지당 표시할 항목 수
$itemsPerPage = 5;

// 현재 페이지 번호 가져오기
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

// 시작 항목의 오프셋 계산
$offset = ($currentPage - 1) * $itemsPerPage;

// 강의 목록 조회 (페이지네이션을 적용한 쿼리)
$sql = "SELECT * FROM popup_list ORDER BY Num DESC LIMIT $offset, $itemsPerPage";
$result = $conn->query($sql);
?>

<?php include './header.php'; ?>
<?php include './nav.php'; ?>
<div class="w-full h-[80px]"></div>

<div class="w-full h-full flex flex-col items-center justify-center px-20">
    <div class="text-[48px] font-bold text-[#333333] py-12">팝업 관리</div>

    <div class="w-full flex justify-end py-2">
        <div class="h-12 flex justify-center items-center">
            <a href="./popup_write.php" class="rounded-md bg-blue-500 p-2 px-3 font-bolder text-lg text-white font-bold">팝업 등록</a>
        </div>
    </div>

    <div class="w-full h-full flex bg-cyan-800 text-white">
        <div class="w-[15%] h-12 flex justify-center items-center border-r-2 border-gray-100 font-bold">
            <div>제목</div>
        </div>

        <div class="w-[45%] h-12 flex justify-center items-center border-r-2 border-gray-100 font-bold">
            <div>링크 주소</div>
        </div>

        <div class="w-[20%] h-12 flex justify-center items-center border-r-2 border-gray-100 font-bold">
            <div>이미지</div>
        </div>

        <div class="w-[10%] h-12 flex justify-center items-center border-r-2 border-gray-100 font-bold">
            <div>팝업 기간</div>
        </div>

        <div class="w-[5%] h-12 flex justify-center items-center font-bold border-r-2 border-gray-100">
            <div>표시</div>
        </div>

        <div class="w-[5%] h-12 flex justify-center items-center font-bold">
            <div>수정</div>
        </div>
    </div>

    <!-- 반복될 부분 -->
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="w-full border-2 border-t-0 flex items-center">
                <div class="w-[15%] h-[90%] flex justify-center items-center border-r-[1px] border-gray-200">
                    <div><?php echo $row['popup_Title']; ?></div>
                </div>

                <div class="w-[45%] h-[90%] flex justify-center items-center border-r-[1px] border-gray-200">
                    <div class=" "><?php echo $row['popup_Link']; ?></div>
                </div>

                <div class="w-[20%] h-[90%] flex justify-center items-center border-r-[1px] border-gray-200 overflow-hidden ">
                    <img class="h-[200px] w-[200px] object-cover" src="./uploads/popup/<?php echo $row['popup_Img'] ?>"
                         alt="">
                </div>

                <div class="w-[10%] h-[90%] flex justify-center items-center border-r-[1px] border-gray-200">
                    <div class="flex flex-col justify-center items-center">
                        <div><?php echo $row['popupStart_Date']; ?></div>
                        <div>~</div>
                        <div><?php echo $row['popupEnd_Date']; ?></div>
                    </div>
                </div>

                <div class="w-[5%] h-[90%] flex justify-center items-center border-r-[1px] border-gray-200">
                    <input type="checkbox" <?php echo ($row['popup_Show'] == 1) ? 'checked' : ''; ?> disabled>
                </div>

                <div class="w-[5%] flex flex-col justify-center items-center gap-2">
                    <a href="./popup_reply.php?num=<?php echo $row['Num']; ?>"
                       class="rounded-md bg-blue-500 p-2 px-3 font-bolder text-white">수정</a>
                    <form id="deleteForm_<?php echo $row['Num']; ?>" action="./process/delete_popup.php" method="post"
                          onsubmit="return confirmDelete(<?php echo $row['Num']; ?>)">
                        <button type="submit" class="rounded-md bg-red-500 p-2 px-3 font-bolder text-white"
                                name="num" value="<?php echo $row['Num']; ?>">삭제
                        </button>
                    </form>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<div class='w-full h-32 border-2 flex items-center justify-center'>데이터가 없습니다.</div>";
    }
    ?>
    <!-- 반복종료 -->

</div>

<!-- 페이지네이션 링크 추가 -->
<div class="flex justify-center items-center mt-8 mb-16 text-2xl">
    <?php
    // 전체 항목 수 조회
    $totalCountQuery = "SELECT COUNT(*) AS total FROM popup_list";
    $totalCountResult = $conn->query($totalCountQuery);
    $totalCountRow = $totalCountResult->fetch_assoc();
    $totalCount = $totalCountRow['total'];

    // 전체 페이지 수 계산
    $totalPages = ceil($totalCount / $itemsPerPage);

    // 이전 페이지 링크
    if ($currentPage > 1) {
        echo "<a href='./popup.php?page=" . ($currentPage - 1) . "' class='mr-4'> &lt; </a>";
    }

    // 페이지 번호 링크
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $currentPage) {
            echo "<span class='mx-2 font-bold'>$i</span>";
        } else {
            echo "<a href='./popup.php?page=$i' class='mx-2'>$i</a>";
        }
    }

    // 다음 페이지 링크
    if ($currentPage < $totalPages) {
        echo "<a href='./popup.php?page=" . ($currentPage + 1) . "' class='ml-4'> &gt; </a>";
    }
    ?>
</div>

<!-- 필요한 스크립트 파일들을 여기에 포함시키세요 -->
<script>
    function confirmDelete(num) {
        var result = confirm("정말로 이 팝업을 삭제하시겠습니까?");
        if (result) {
            return true;
        } else {
            event.preventDefault();
            return false;
        }
    }
</script>

</body>

</html>

<?php
$conn->close();
?>

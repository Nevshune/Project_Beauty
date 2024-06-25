<?php
include './inc/common.php';
include './inc/dbconfig.php';

// 수정할 강의의 번호를 가져옴
$num = $_GET['num'];

// 선택된 강의의 정보를 가져옴
$sql = "SELECT * FROM class_list WHERE Num = $num";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// 강의 정보 가져오기에 실패하면 에러 메시지 출력
if (!$row) {
  echo "<script>alert('해당 강의를 찾을 수 없습니다.'); history.back();</script>";
}
?>

<?php include './header.php'; ?>
<?php include './nav.php'; ?>

  <div class="w-full h-[80px]"></div>

  <div class="w-full h-full flex flex-col items-center justify-center px-20">
    <div class="text-[32px] font-bold text-[#333333] py-8">강의 수정</div>

    <form action="./process/class_update_process.php" method="POST" enctype="multipart/form-data" class="w-full">
      <input type="hidden" name="num" value="<?php echo $row['Num']; ?>">
      <div class="w-full h-24 flex items-center">
        <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">교육명</div>
        <input type="text" name="className" class="w-[50%]" value="<?php echo $row['className']; ?>" required>
      </div>
      <div class="w-full h-60 flex items-center">
        <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">교육시간</div>
        <textarea name="classSub" class="w-[75%] h-[90%]" required><?php echo $row['classSub']; ?></textarea>
      </div>
      <div class="w-full h-full flex items-center border-b-2 border-white">
        <div class="w-[20%] h-[300px] flex justify-center items-center bg-gray-200 mr-4">이미지</div>
        <input type="hidden" name="existingThumbnail" value="<?php echo $row['classThumbnail']; ?>">

        <!-- 선택된 이미지를 보여주는 부분 -->
        <div class="w-50% h-[300px] mr-4">
          <img id="preview-image" class="h-full" src="./uploads/class/<?php echo $row['classThumbnail']; ?>" alt="선택된 이미지">
        </div>

        <!-- 파일 선택 버튼 -->
        <div class="w-50%">
          <input type="file" name="classThumbnail" class="w-[100%]" title="파일 변경" onchange="previewFile()">
          <div class="text-gray-500 text-sm"> <span class="text-orange-500">*</span> 크기 40mb 이하 / 사이즈 400 x 400 (px)</div>
        </div>
      </div>



      <div class="w-full h-24 flex items-center">
        <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">교육 기간</div>
        <div class="flex items-center justify-center">
          <div class="px-2">시작일</div>
          <input type="date" name="classStartDate" class="px-2" value="<?php echo $row['classStartDate']; ?>" required>

          <div class="pl-8 pr-2">종료일</div>
          <input type="date" name="classEndDate" class="px-2" value="<?php echo $row['classEndDate']; ?>" required>
        </div>
      </div>
      <div class="w-full h-24 flex items-center">
        <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">메인페이지 표시</div>
        <div class="flex items-center">
          <input id="checkbox" type="checkbox" <?php echo ($row['classExpose'] == 1) ? 'checked' : ''; ?> name="classExpose" class="mr-2">
          <label id="label1" for="checkbox" class="mr-2 text-blue-500 font-bold">(메인페이지에 보임)</label>
          <label id="label2" for="checkbox" class="hidden text-gray-400">(메인페이지에 안보임)</label>
        </div>
      </div>
      <div class="w-full flex justify-center items-center gap-4 mt-8 mb-20">
        <button type="submit" class="rounded-md bg-blue-500 p-2 px-10 font-bolder text-white">수정</button>
        <a href="#" onclick="confirmNavigation()" class="rounded-md bg-gray-600 p-2 px-5 font-bolder text-white">돌아가기</a>
      </div>
    </form>
  </div>

  <script>
    const checkbox = document.getElementById('checkbox');
    const label1 = document.getElementById('label1');
    const label2 = document.getElementById('label2');

    checkbox.addEventListener('change', function() {
      if (this.checked) {
        label1.classList.remove('hidden');
        label2.classList.add('hidden');
      } else {
        label1.classList.add('hidden');
        label2.classList.remove('hidden');
      }
    });
  </script>

  <script>
    // 이미지 파일을 미리보기하는 함수
    function previewFile() {
      const preview = document.getElementById('preview-image');
      const file = document.querySelector('input[type=file]').files[0];
      const reader = new FileReader();

      reader.onloadend = function() {
        preview.src = reader.result;
      }

      if (file) {
        reader.readAsDataURL(file);
      } else {
        preview.src = "./uploads/class/<?php echo $row['classThumbnail']; ?>";
      }
    }
  </script>

<script>
  // 돌아가기 버튼 클릭 시 컨펌 창 표시
  function confirmNavigation() {
    if (confirm("저장되지 않은 정보는 소실됩니다. 정말 페이지를 떠나시겠습니까?")) {
      window.location.href = "./index.php"; // 돌아가기
    }
  }
</script>

</body>

</html>
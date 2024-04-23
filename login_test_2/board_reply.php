<?php
include "./inc/common.php";
include "./inc/dbconfig.php";

// GET 변수로 전달받은 Num 값으로 데이터베이스에서 정보 가져오기
if (isset($_POST['Num'])) {
    $classNum = $_POST['Num'];
} else {
    $classNum = 0; // 기본값 설정
}
$sql = "SELECT * FROM class_list WHERE Num = $classNum";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
  <!-- Tailwind end -->
  <title>강의 수정</title>
</head>
<body>
  <div class="w-full h-full flex flex-col items-center justify-center px-20">
    <div class="text-[48px] font-bold text-[#333333] py-12">강의 수정</div>

    <form action="./process/update_class.php" method="post" enctype="multipart/form-data" class="w-full">
      <input type="hidden" name="Num" value="<?php echo $row['Num']; ?>">
      <div class="w-full flex flex-col gap-4">
        <div class="flex gap-4">
          <div class="w-1/2">
            <label for="className" class="block text-sm font-medium text-gray-700">강의명</label>
            <input type="text" id="className" name="className" value="<?php echo $row['className']; ?>" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
          <div class="w-1/2">
            <label for="classStartDate" class="block text-sm font-medium text-gray-700">시작일</label>
            <input type="date" id="classStartDate" name="classStartDate" value="<?php echo $row['classStartDate']; ?>" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>
        <div class="flex gap-4">
          <div class="w-1/2">
            <label for="classSub" class="block text-sm font-medium text-gray-700">내용</label>
            <textarea id="classSub" name="classSub" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"><?php echo $row['classSub']; ?></textarea>
          </div>
          <div class="w-1/2">
            <label for="classEndDate" class="block text-sm font-medium text-gray-700">종료일</label>
            <input type="date" id="classEndDate" name="classEndDate" value="<?php echo $row['classEndDate']; ?>" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>
        <div class="flex gap-4">
          <div class="w-1/2">
            <label for="classThumbnail" class="block text-sm font-medium text-gray-700">썸네일</label>
            <input type="file" id="classThumbnail" name="classThumbnail" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <img src="./uploads/<?php echo $row['classThumbnail']; ?>" alt="Thumbnail" class="w-32 h-32 object-cover mt-2">
          </div>
          <div class="w-1/2 flex items-end">
            <div class="flex items-center">
              <input id="classExpose" name="classExpose" type="checkbox" <?php echo ($row['classExpose'] == 1) ? 'checked' : ''; ?> class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
              <label for="classExpose" class="ml-2 block text-sm text-gray-900">
                표시
              </label>
            </div>
          </div>
        </div>
        <div class="flex justify-end">
          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            수정 완료
          </button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>

<?php
$conn->close();
?>
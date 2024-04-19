<?php
session_start();



$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] : '';
$ses_grade = (isset($_SESSION['ses_grade']) && $_SESSION['ses_grade'] != '') ? $_SESSION['ses_grade'] : '';


if ($ses_id == '') {
    echo "<script>
      alert('로그인이 필요한 서비스입니다.');
      window.location.href = './login.php';
  </script>";
};
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

    <title>메인</title>
</head>

<body class=" relative">
    <nav class="w-screen h-[80px] bg-blue-400  px-8 fixed top-0 left-0">
        <div class="w-full h-full flex justify-between items-center">
            <h1 class="text-3xl text-white font-bold cursor-default">Admin</h1>
            <a href="logout.php" class="text-white font-bold bg-blue-600 rounded-md p-2">Logout</a>
        </div>
    </nav>

    <div class="w-full h-[80px]"></div>


    <div class="w-full h-full flex flex-col items-center justify-center px-20">
        <div class="text-[32px] font-bold text-[#333333] py-8">강의 등록</div>

        <form action="class_input_process.php" method="POST" enctype="multipart/form-data" class="w-full">
            <div class="w-full h-24 flex items-center">
                <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">강의명</div>
                <input type="text" name="className" class="w-[50%]" required>
            </div>
            <div class="w-full h-60 flex items-center">
                <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">내용</div>
                <textarea name="classSub" class="w-[75%] h-[90%]" required></textarea>
            </div>
            <div class="w-full h-24 flex items-center">
                <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">이미지</div>
                <div class="w-50%">
                    <input type="file" name="classThumbnail" class="w-[100%]">
                    <div class="text-gray-500 text-sm"> <span class="text-orange-500">*</span> 크기 40mb 이하 / 사이즈 400 x 400 (px)</div>
                </div>
            </div>
            <div class="w-full h-24 flex items-center">
                <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">강의 기간</div>
                <div class="flex items-center justify-center">
                    <div class="px-2">시작일</div>
                    <input type="date" name="classStartDate" class="px-2" required>

                    <div class="pl-8 pr-2">종료일</div>
                    <input type="date" name="classEndDate" class="px-2" required>
                </div>
            </div>
            <div class="w-full h-24 flex items-center">
                <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">메인페이지 표시</div>
                <div class="flex items-center">
                    <input id="checkbox" type="checkbox" checked name="classExpose" class="mr-2">
                    <label id="label1" for="checkbox" class="mr-2 text-blue-500 font-bold">(메인페이지에 보임)</label>
                    <label id="label2" for="checkbox" class="hidden text-gray-400">(메인페이지에 안보임)</label>
                </div>
            </div>
            <div class="w-full flex justify-center items-center">
                <button type="submit" class="rounded-md bg-blue-500 p-2 px-8 font-bolder text-white">등록</button>
            </div>
        </form>
    </div>



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

</body>

</html>
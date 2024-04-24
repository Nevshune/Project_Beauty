<?php
include './inc/common.php';
include './inc/dbconfig.php'
?>







<?php include './header.php'; ?>
<?php include './nav.php'; ?>

<div class="w-full h-[80px]"></div>


<div class="w-full h-full flex flex-col items-center justify-center px-20">
    <div class="text-[32px] font-bold text-[#333333] py-8">대회 등록</div>

    <form action="./process/contest_input_process.php" method="POST" enctype="multipart/form-data" class="w-full">
        <div class="w-full h-24 flex items-center">
            <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">대회명</div>
            <input type="text" name="contestName" class="w-[50%]" required>
        </div>
        <div class="w-full h-60 flex items-center">
            <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">내용</div>
            <textarea name="contestSub" class="w-[75%] h-[90%]" required></textarea>
        </div>

        <div class="w-full h-full flex items-center border-b-2 border-white">
            <div class="w-[20%] h-[300px] flex justify-center items-center bg-gray-200 mr-4">이미지</div>
            <div class="w-[50%] flex items-center gap-4 justify-between">
                <!-- 미리 보여질 이미지 태그 -->
                <div>
                    <input type="file" name="contestImg" class="w-[100%]">
                    <div class="text-gray-500 text-sm"> <span class="text-orange-500">*</span> 크기 40mb 이하 / 사이즈 400 x 400 (px)</div>
                </div>
                <img class="preview-image h-[280px] max-w-[400px] border-[1px] border-gray-300" src="./uploads/noImage.png" alt="미리 보기">
            </div>
        </div>



        <!-- <div class="w-full h-24 flex items-center">
            <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">강의 기간</div>
            <div class="flex items-center justify-center">
                <div class="px-2">시작일</div>
                <input type="date" name="classStartDate" class="px-2" required>

                <div class="pl-8 pr-2">종료일</div>
                <input type="date" name="classEndDate" class="px-2" required>
            </div>
        </div> -->
        <div class="w-full h-24 flex items-center">
            <div class="w-[20%] h-full flex justify-center items-center bg-gray-200 mr-4 border-b-2 border-white">메인페이지 표시</div>
            <div class="flex items-center">
                <input id="checkbox" type="checkbox" checked name="contestExpose" class="mr-2">
                <label id="label1" for="checkbox" class="mr-2 text-blue-500 font-bold">(메인페이지에 보임)</label>
                <label id="label2" for="checkbox" class="hidden text-gray-400">(메인페이지에 안보임)</label>
            </div>
        </div>
        <div class="w-full flex justify-center items-center gap-4 mt-4 mb-20">
            <button type="submit" class="rounded-md bg-blue-500 p-2 px-10 font-bolder text-white">등록</button>
            <a href="#" onclick="confirmNavigation()" class="rounded-md bg-gray-600 p-2 px-5 font-bolder text-white">돌아가기</a>

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

<script>
    // 이미지 파일을 선택하면 미리 보여주는 함수
    function previewImage() {
        const preview = document.querySelector('.preview-image'); // 미리 보여질 이미지 태그
        const fileInput = document.querySelector('input[name="contestImg"]'); // 이미지 파일 input 태그

        fileInput.addEventListener('change', function() {
            const file = this.files[0]; // 선택된 파일
            const reader = new FileReader(); // 파일 리더 객체

            reader.onload = function() {
                preview.src = reader.result; // 이미지 파일을 미리 보여주는 역할
            }

            if (file) {
                reader.readAsDataURL(file); // 파일을 읽어 data URL 형식으로 변환하여 리더 객체에 저장
            }
        });
    }

    // 페이지 로드 시 미리 보여주는 함수 호출
    window.onload = function() {
        previewImage();
    };
</script>

<script>
    // 돌아가기 버튼 클릭 시 컨펌 창 표시
    function confirmNavigation() {
        if (confirm("저장되지 않은 정보는 소실됩니다. 정말 페이지를 떠나시겠습니까?")) {
            window.location.href = "./contest.php"; // 돌아가기
        }
    }
</script>


</body>

</html>
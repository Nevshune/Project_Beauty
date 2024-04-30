<script src="./js/pushQ.js"></script>

<form class="w-full  bg-white fixed bottom-0 left-0 flex justify-center shadow-[0_-2px_3px_0px_rgba(0,0,0,0.05)]">
    <div class="w-full max-w-[1440px] h-full flex justify-between items-center gap-8 p-4">
        <div class="text-3xl">
            <h1 class="text-3xl">상담전화</h1>
            <p class="text-[#5879E2] font-bold">010-3139-5269</p>
        </div>
        <div class="flex items-center gap-3">
            <div class="flex items-center gap-2">
                <!-- <div>이름 : </div> -->
                <input class="input_1 border-[#cccccc] placeholder-slate-400" name="이름" rows="4" cols="50" placeholder="성함" required></input>
            </div>
            <div class="flex items-center gap-2">
                <!-- <div>나이 : </div> -->
                <input class="input_1 border-[#cccccc] placeholder-slate-400" name="연락처" rows="4" cols="50" placeholder="연락처" required></input>
            </div>
            <div class="flex items-center gap-2">
                <!-- <div>전화번호 : </div> -->
                <select class="input_1 text-gray-400 border-[#cccccc] placeholder-slate-400" name="교육과정" placeholder="교육과정" required>
                    <option class="text-[#cccccc]" value="">교육과정 선택</option>
                    <?php
                    // class_list 테이블에서 classExpose가 1인 데이터 조회                    
                    $result = $conn->query($sql);

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
            </div>
            <div class="flex items-center">
                <input type="checkbox">
                <p>개인정보 수집에 동의합니다.</p>
            </div>
            <button class="p-2  bg-gradient-to-r from-[#8273F6] to-[#1651E8] rounded-full px-6 py-3 font-bold text-2xl text-white" type="button" onclick="sendPushRequest()">빠른상담</button> <!-- type="button" 추가 -->
        </div>

        <a href="#" class=" duration-75 flex-col items-center"><i class="fa-solid fa-chevron-up text-3xl leading-none text-[#777777]"></i>
            <p class="text-lg leading-none text-[#5879E2]">TOP</p>
        </a>

    </div>
</form>
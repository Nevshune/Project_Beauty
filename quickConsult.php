<?php $sql = "SELECT * FROM class_list WHERE classExpose = 1"; ?>

<script src="./js/pushQ.js"></script>

<form class="w-full z-[200]  bg-white fixed bottom-0 left-0 flex justify-center shadow-[0_-2px_3px_0px_rgba(0,0,0,0.05)]">
    <div class="w-full max-w-[1440px] h-full  flex justify-between items-center gap-8 p-4">
        <div class="text-3xl  max-[1240px]:hidden ">
            <h1 class="text-3xl text-nowrap">상담전화</h1>
            <p class="text-[#5879E2] font-bold text-nowrap">010-3139-5269</p>
        </div>
        <div class="flex justify-between items-center max-[700px]:flex-col  max-[1120px]:justify-between w-full gap-3 max-[700px]:gap-2">
            <div class="flex gap-2  max-[1120px]:w-[90%] max-[700px]:w-full">
                <div class="flex items-center gap-2 max-[700px]:w-[25%]">
                    <!-- <div>이름 : </div> -->
                    <input class="input_1 border-[#cccccc] placeholder-slate-400 max-[1120px]:w-full max-[400px]:text-xs " name="이름" rows="4" cols="50" placeholder="성함" required></input>
                </div>
                <div class="flex items-center gap-2 max-[700px]:w-[39%]">
                    <!-- <div>나이 : </div> -->
                    <input class="input_1 border-[#cccccc] placeholder-slate-400 max-[1120px]:w-full max-[400px]:text-xs" name="연락처" rows="4" cols="50" placeholder="연락처" required></input>
                </div>
                <div class="flex items-center gap-2 max-[700px]:w-[36%]">
                    <!-- <div>전화번호 : </div> -->
                    <select class="input_1 text-gray-400 border-[#cccccc] placeholder-slate-400 max-[1120px]:w-full max-[400px]:text-xs " name="교육과정" placeholder="교육과정" required>
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
                            echo "<option value='조회된강의가 없음' >조회된 강의가 없습니다.</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class=" max-[700px]:w-full flex max-[1430px]:flex-col max-[700px]:flex-row max-[400px]:flex-col justify-center max-[700px]:justify-between items-center   gap-2 max-[400px]:gap-0">
                <div class="flex items-center text-nowrap">
                    <input type="checkbox" id="chk">
                    <label for="chk" class="ps-1">개인정보 수집에 동의합니다.</label>
                </div>
                <button class="p-2  bg-gradient-to-r bg-[#7F00AC] rounded-full px-6 py-3 font-bold text-2xl max-[700px]:text-base max-[700px]:py-1 text-white " type="button" onclick="sendPushRequest()">빠른상담</button> <!-- type="button" 추가 -->
            </div>
        </div>
        <a href="#" class="max-[700px]:hidden duration-75 flex-col items-center  "><i class="fa-solid fa-chevron-up ps-[5px] text-3xl leading-none text-[#777777]"></i>
            <p class="text-lg leading-none text-[#5879E2]">TOP</p>
        </a>

    </div>
    <a href="#" class="min-[700px]:hidden max-[400px]:hidden absolute right-8 bottom-[125px]  w-[45px] h-[45px] duration-75 flex-col items-center 
    justify-stretch rounded-full bg-gradient-to-r from-[#8273F6] to-[#1651E8] text-center leading-none"><i class=" fa-solid fa-chevron-up text-xs pt-2 leading-none text-white"></i>
        <p class="text-sm leading-none text-white">TOP</p>
    </a>
</form>
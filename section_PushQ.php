<?php $sql = "SELECT * FROM class_list WHERE classExpose = 1"; ?>
<script src="./js/mainpushQ.js"></script>

<div class="w-full  pt-32 pb-32" id="pushq">
  <div class="w-[91%] max-w-[1440px] m-auto text-center">
    <h1 class="font-extrabold text-7xl text-[#000848] m-auto pb-16 max-[740px]:text-5xl max-[500px]:text-4xl max-[370px]:text-3xl">상담 문의</h1>
    <form class="w-[80%] m-auto max-[500px]:w-[91%]" action="">
      <div class="flex justify-between gap-2 mt-4 max-[500px]:flex-col">
        <div class="w-[48%] text-start max-[500px]:w-full">
          <div>이름 : </div>
          <input class="input_2 w-full border-[#D9D9D9] placeholder-slate-400 max-[1120px]:w-full placeholder:text-sm" name="이름" rows="4" cols="50" placeholder="이름" required></input>
        </div>
        <div class="w-[48%] text-start max-[500px]:w-full">
          <div>휴대전화 : </div>
          <input class="input_2 w-full border-[#D9D9D9] placeholder-slate-400 max-[1120px]:w-full placeholder:text-sm" name="휴대전화" rows="4" cols="50" placeholder="휴대전화" required></input>
        </div>
      </div>
      <div class="flex justify-between gap-2 max-[740px]:flex-col mt-4">
        <div class="w-[48%] text-start max-[740px]:w-full">
          <div>이메일 : </div>
          <div class="flex items-center">
            <input class="input_2 w-[45%] max-[740px]:w-[47%] border-[#D9D9D9] placeholder-slate-400 max-[1120px]:w-full placeholder:text-sm" name="이메일" rows="4" cols="50" placeholder="이메일" required>
            <span class="px-3">@</span>
            </input>
            <select class=" w-[48%] text-gray-400 border-[#D9D9D9] placeholder-slate-400 first:rounded-none  placeholder:text-sm" name="도메인" required>
              <option class="text-[#cccccc] " value="">직접입력</option>
              <option class="text-[#cccccc] " value="naver.com">naver.com</option>
              <option class="text-[#cccccc]" value="gmail.com">gmail.com</option>
              <option class="text-[#cccccc]" value="daum.net">daum.net</option>
            </select>
          </div>
        </div>
        <div class="w-[48%] text-start gap-2 max-[740px]:w-full">
          <div>희망과정 : </div>
          <select class="input_2 w-full text-gray-400 border-[#D9D9D9] placeholder-slate-400 max-[1120px]:w-full  placeholder:text-sm" name="희망과정" placeholder="교육과정" required>
            <option class="text-[#cccccc] text-sm placeholder:text-sm " value="">교육과정 선택</option>
            <?php
            // class_list 테이블에서 classExpose가 1인 데이터 조회                    
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // 결과 출력
              while ($row = $result->fetch_assoc()) {
                // 옵션에 각 과정의 className을 넣음
                echo "<option  value='" . $row["className"] . "'>" . $row["className"] . "</option>";
              }
            } else {
              echo "<option disabled>조회된 강의가 없습니다.</option>";
            }
            ?>
          </select>
        </div>
      </div>



      

      <div class="mt-4">
        <div class="w-full text-start">
          <div>상담내용</div>
          <div class="w-full">
            <textarea class="input_2 h-full min-h-[150px] w-full resize-none border-[#D9D9D9] placeholder-slate-400 max-[1120px]:w-full" name="상담내용"></textarea>
          </div>
        </div>
      </div>

      <div class="mt-4">
        <div class="w-full text-start">
          <div>개인정보취급방침</div>
          <div class="w-full">
            <textarea class=" h-full min-h-[150px] w-full resize-none border-[#D9D9D9] placeholder-slate-400 max-[1120px]:w-full " name="상담내용" readonly>
개인정보의 수집목적 및 이용개인정보를 수집하는 목적은 한국미용직업 평생교육원만의 정보와 맞춤회된 서비스를 제공하기 위하여 필요한 최소한의 정보만 수집하고 있습니다.
한국미용직업 평생교육원에 등록하신 모든 회원과 방문객의 개인정보는 기본 수집 목적 이외에 다른 용도로 이용하거나 회원님의 동의 없이 제3자에게 제공할 수 없으며 회원정보와 관련한 회원이 피해를 입을 경우 이에 대한 모든 책임은 한국미용직업 평생교육원에서 집니다.
개인정보수집 또는 이용에 대한 동의 철회시 한국미용직업 평생교육원은(는) 개인정보를 수집하지 않으며 개인정보는 철회와 동시에 삭제됩니다.
수집하는 개인정보 항목 및 수집방법한국미용직업 평생교육원은(는) 이용자의 정보 수집시 서비스 제공에 필요한 최소한의 정보만을 수집하며 민감한 개인정보의 수집을 엄격히 제한하고 있습니다.

* 필수사항 : 이름* 필수사항 : 이메일주소, 홈페이지주소, 전화번호(휴대폰), 주소
개인정보의 보유 및 이용기간
한국미용직업 평생교육원은(는) 방문객께서 한국미용직업 평생교육원이(가) 제공하는 서비스를 받는 동안 개인정보를 계속 보유하며 맞춤화된 서비스 제공을 위해 이용하게 됩니다. 다만 방문객께서 탈퇴를 원하시거나 한국미용직업 평생교육원 약관에 의거 방문객자격 상실의 경우에는 등록된 방문객의 정보는 완전히 삭제되며 어떠한 용도로도 열람 또는 이용할 수 없도록 처리됩니다.
            </textarea>
          </div>
        </div>
      </div>

      <div class="flex items-center text-nowrap">
        <input class="border-[#D9D9D9]" type="checkbox" id="consentCheckbox">
        <label for="consentCheckbox" class="ps-2">개인정보 수집에 동의합니다.</label>
      </div>
      <button class="mt-3 p-2  bg-gradient-to-r bg-[#7F00AC] rounded-full px-6 py-3 font-bold text-2xl text-white" type="button" onclick="mainsendPushRequest()">상담신청</button> <!-- type="button" 추가 -->
    </form>
  </div>
</div>
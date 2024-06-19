<style>
    .accordion-content {
        transition: max-height 0.2s ease-out;
    } 
</style>

<div id="ToggleMenu" class="w-full   duration-150 font-AppleSDGothicNeo">
  <div class=" relative w-full h-full flex flex-col justify-start items-center">
    <div class="w-full mt-32 h-auto p-8">
      <div class="flex flex-col space-y-6">
        <div class="accordion-item  border-gray-200 text-[#00709B] text-2xl">
          <button class="accordion-header w-full text-left py-3 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none font-semibold  ">
            환경오염
          </button>
          <div class="accordion-content max-h-0 overflow-hidden flex flex-col text-[0.9em] text-[#777777]">
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -미세플라스틱이란
            </a>
            <a href="./weatherchange.php" class="p-2 px-6 hover:bg-gray-200">
              -기후변화 시나리오
            </a>
            <a href="./pollution_audiovisual.php" class="p-2 px-6 hover:bg-gray-200">
              -시청각자료(동영상)
            </a>
          </div>
        </div>
        <div class="accordion-item  border-gray-200 text-[#00709B] text-2xl">
          <button class="accordion-header w-full text-left py-3 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none font-semibold  ">
            분리배출
          </button>
          <div class="accordion-content max-h-0 overflow-hidden flex flex-col text-[0.9em] text-[#777777]">
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -종이/종이팩
            </a>
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -페트/플라스틱/비닐/스티로폼
            </a>
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -캔류/고철류/유리
            </a>
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -음식물쓰레기
            </a>
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -기타
            </a>
          </div>
        </div>

        <div class="accordion-item  border-gray-200 text-[#00709B] text-2xl">
          <button class="accordion-header w-full text-left py-3 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none font-semibold  ">
            블루스카이활동
          </button>
          <div class="accordion-content max-h-0 overflow-hidden flex flex-col text-[0.9em] text-[#777777]">
            <a href="./blueskyActive.php?category=자원봉사활동" class="p-2 px-6 hover:bg-gray-200">
              -자원봉사 활동
            </a>
            <a href="./blueskyActive.php?category=환경계몽교육활동" class="p-2 px-6 hover:bg-gray-200">
              -환경계몽교육 활동
            </a>
            <a href="./blueskyActive.php?category=환경보호캠페인" class="p-2 px-6 hover:bg-gray-200">
              -환경보호 캠페인
            </a>
            <a href="./blueskyActive.php?category=MOU체결" class="p-2 px-6 hover:bg-gray-200">
              -협력단체
            </a>
          </div>
        </div>

        <div class="accordion-item  border-gray-200 text-[#00709B] text-2xl">
          <button class="accordion-header w-full text-left py-3 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none font-semibold  ">
            단체소개
          </button>
          <div class="accordion-content max-h-0 overflow-hidden flex flex-col text-[0.9em] text-[#777777]">
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -설립목적
            </a>
            <!-- <a href="#" class="p-2 px-6 hover:bg-gray-200">
                            -연혁
                        </a> -->
            <!-- <a href="#" class="p-2 px-6 hover:bg-gray-200">
                            -기부실적 및 현황
                        </a> -->
            <a href="./notice.php" class="p-2 px-6 hover:bg-gray-200">
              -공지사항
            </a>
            <a href="#" class="p-2 px-6 hover:bg-gray-200">
              -오시는 길
            </a>
          </div>
        </div>

        <div class="accordion-item  border-gray-200 text-[#00709B] text-2xl">
          <button class="accordion-header w-full text-left py-3 px-4 bg-gray-100 hover:bg-gray-200 focus:outline-none font-semibold  ">
            <a href="./donation.php">후 원</a>
          </button>
          <div class="accordion-content max-h-0 overflow-hidden flex flex-col text-[0.9em] text-[#777777]">
            <!-- <a href="./education.php" class="p-2 px-6 hover:bg-gray-200">
                            -교육신청
                        </a> -->
            <!-- <a href="./donation.php" class="p-2 px-6 hover:bg-gray-200">
                            -후원신청
                        </a> -->
          </div>
        </div>




      </div>
    </div>
  </div>
</div>

<script>
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            content.style.maxHeight = content.style.maxHeight ? null : content.scrollHeight + 'px';
            document.querySelectorAll('.accordion-content').forEach(otherContent => {
                if (otherContent !== content) {
                    otherContent.style.maxHeight = null;
                }
            });
        });
    });
</script>
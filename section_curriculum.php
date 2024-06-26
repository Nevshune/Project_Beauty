<section class="w-full flex flex-col justify-center items-center  py-24 bg-[#eeeeee]" id="curriculum">
    <div class="w-full max-w-[1280px] flex flex-col justify-center px-4 items-center space-y-8">
        <div class="font-extrabold text-7xl max-md:text-5xl">
            교육과정
        </div>
        <div class="flex flex-col text-3xl max-md:text-2xl max-[500px]:text-xl justify-center items-center text-[#7F00AC] font-AppleSDGothicNeo leading-10 break-keep ">
            <p><span class="max-[950px]:block text-center">얼굴 및 신체의 피부를 아릅답게</span> <span class="max-md:block text-center">유지 · 보호 · 개선 관리하기 위하여</span></p>
            <p><span class="max-[950px]:block text-center">각 부위와 유형에 적절한 관리법과</span> <span class="max-md:block text-center">기기 및 제품을 사용하여 피부미용을 수행</span></p>
        </div>
    </div>

    <div class="w-full max-w-[1080px] flex flex-col justify-center items-center pt-14 ">

        <!-- 교육과정 국비-->
        <div class="max-[767.5px]:hidden w-full px-4"><?php include './section_curriculum_G.php' ?></div>
        <div class="min-[767.5px]:hidden w-full px-2"><?php include './section_curriculum_G_mobile.php' ?></div>

        <div class="w-full py-20 px-4 max-md:px-8">
            <div class="w-full rounded-xl bg-[#FFD15D] flex p-6 max-md:p-2 ">
                <div class="text-[80px] max-[500px]:[48px]  w-28 flex justify-center items-center font-extrabold">!</div>
                <div class="w-full flex leading-tight flex-col justify-center break-keep text-xl max-[500px]:text-lg font-light">
                    <p class="font-medium ">국민내일배움카드를 수령후 수강신청과 선발을 통해 해당기간 출석률80% 이상 출석해야 수료가 가능합니다. </p>
                        <p class="max-md:hidden text-[0.9em]">단, 국비 지원을 통한 교육 신청 후 미수료 또는 수강포기 시 재료비청구, 내일배움카드 지원금이 차감되거나 내일배움카드 사용에 있어 패널티가 발생될 수 있는점 참고하시기 바랍니다. (훈련생 유형이 다르므로 자세한 사항은 해당 고용센터에 확인하시길 바랍니다.)</p>                    
                </div>
            </div>

            <div class="pb-3 mt-16">
                <div class="text-4xl max-[500px]:text-2xl text-[#575757] font-extrabold px-3">국비지원훈련과정 수강신청방법</div>
            </div>

            <div class="flex items-center text-xl max-[500px]:text-lg px-2">
                <span class="text-[0.9rem] text-[#F9804C]">■</span>&nbsp;HRD-net으로 이동후 검색·신청
            </div>
            <a href="https://www.hrd.go.kr/hrdp/ti/ptiao/PTIAO0300L.do" target="_blank" class="w-full">
                <div class="flex gap-0 space-x-0 relative min-h-32 mt-3 mb-8">

                    <img src="./src/img/Nebeka.png" alt="" class="w-full max-[650px]:hidden">
                    <div class="w-[320px] absolute top-[50%] left-[50%] py-12 rounded-lg bg-[#dcebff] max-[650px]:bg-white backdrop-blur-[8px] text-xl flex justify-center items-end transform translate-x-[-50%] translate-y-[-50%] text-[#333333] font-bold">
                        <img src="./src/logo/header_logo.png" alt="" class="max-w-40">
                        <div class=" flex-nowrap pl-2">신청하러 가기 <i class="fa-solid fa-arrow-pointer"></i></div>
                    </div>
                    
                </div>
            </a>
        </div>
        <!-- 교육과정 단기 -->
        <div class="max-[767.5px]:hidden w-full px-4"><?php include './section_curriculum_S.php' ?></div>
        <div class="min-[767.5px]:hidden w-full px-2"><?php include './section_curriculum_S_mobile.php' ?></div>

    </div>


</section>
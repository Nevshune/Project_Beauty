<section class="w-full flex flex-col justify-center items-center  py-24 bg-[#eeeeee]">
    <div class="w-full max-w-[1280px] flex flex-col justify-center px-4 items-center space-y-8">
        <div class="font-black text-4xl">
            교육과정
        </div>
        <div class="flex flex-col items-center text-[#7F00AC] font-AppleSDGothicNeo">
            <p>얼굴 및 신체의 피부를 아릅답게 유지 · 보호 · 개선 관리하기 위하여</p>
            <p>각 부위와 유형에 적절한 관리법과 기기 및 제품을 사용하여 피부미용을 수행</p>
        </div>
    </div>

    <div class="w-full max-w-[1080px] flex flex-col justify-center items-center py-28">

        <!-- 교육과정 국비-->
        <div class="px-4"></div><?php include './section_curriculum_G.php' ?>
        <!-- 교육과정 단기 -->
        <div class="max-[767.5px]:hidden w-full px-4"><?php include './section_curriculum_S.php' ?></div>
        <div class="min-[767.5px]:hidden w-full"><?php include './section_curriculum_S_mobile.php' ?></div>

    </div>


</section>


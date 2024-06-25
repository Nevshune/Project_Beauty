<div class="w-full text-3xl max-[500px]:text-2xl font-medium mb-4 flex items-center">
    <p class="bg-[#F08300] inline-block font-black ">&nbsp;</p>
    <p class="pt-2">&nbsp;단기속성</p>
</div>

<style>
    .accordion-content {
        transition: max-height 0.2s ease-out;
        overflow: hidden;
    }

</style>

<div id="ToggleMenu" class="w-full duration-150 font-AppleSDGothicNeo">
    <div class="relative w-full flex flex-col justify-start items-center">
        <div class="w-full mt-2 h-auto">
            <div class="flex flex-col px-5 space-y-8">

                <div class="accordion-item ">
                    <button class="accordion-header  relative w-full bg-[url('./src/img/curriculum/curroculum_S_1.png')] bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden ">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">피부국가자격증과정</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col overflow-hidden">
                        <div class="px-4 py-6">
                            <?php include './classList/피부국가자격증과정.php' ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item p-0 m-0">
                    <button class="accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_S_2.jpg')] bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">페이스실무살롱테크닉</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col text-[0.9em] text-[#777777]">
                        <div class="px-4 py-6">
                            <?php include './classList/페이스실무살롱테크닉.php' ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item p-0 m-0">
                    <button class="accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_S_3.jpg')] bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">얼굴윤곽축소테크닉</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col text-[0.9em] text-[#777777]">
                        <div class="px-4 py-6">
                            <?php include './classList/얼굴윤곽축소테크닉.php' ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_S_4.jpg')] bg-cover bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">전신살롱테크닉</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col text-[0.9em] text-[#777777]">
                        <div class="px-4 py-6">
                            <?php include './classList/전신살롱테크닉.php' ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_S_5.jpg')] bg-cover bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">아로마풋케어</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col text-[0.9em] text-[#777777]">
                        <div class="px-4 py-6">
                            <?php include './classList/아로마풋케어.php' ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_S_6.jpg')] bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">왁싱스페셜과정</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col text-[0.9em] text-[#777777]">
                        <div class="px-4 py-6">
                            <?php include './classList/왁싱스페셜과정.php' ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_S_7.jpg')] bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden" >
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">스킨아트과정</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col text-[0.9em] text-[#777777]">
                        <div class="px-4 py-6">
                            <?php include './classList/스킨아트과정.php' ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_S_8.jpg')] bg-cover bg-[top_center] h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl">창업컨설팅과정</div>
                    </button>
                    <div class="accordion-content max-h-0 flex flex-col text-[0.9em] text-[#777777]">
                        <div class="px-4 py-6">
                            <?php include './classList/창업컨설팅과정.php' ?>
                        </div>
                    </div>
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
            const isOpening = !content.style.maxHeight;

            // If the clicked menu is opening, set its max-height to its scroll height
            if (isOpening) {
                content.style.maxHeight = content.scrollHeight + 'px';
                header.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                // If the clicked menu is closing, set its max-height to null
                content.style.maxHeight = null;
            }
        });
    });
</script>

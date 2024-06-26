<div class="w-full text-3xl max-[500px]:text-2xl font-medium mb-4 flex items-center px-5">
    <p class="bg-[#F08300] inline-block font-black ">&nbsp;</p>
    <p class="pt-2">&nbsp;국비과정</p>
</div>

<style>
    .new-accordion-content {
        transition: max-height 0.2s ease-out;
        overflow: hidden;
    }
</style>

<div id="NewToggleMenu" class="w-full duration-150 font-AppleSDGothicNeo">
    <div class="relative w-full flex flex-col justify-start items-center">
        <div class="w-full mt-2 h-auto">
            <div class="flex flex-col px-5 space-y-8">

                <div class="new-accordion-item">
                    <button class="new-accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_G_1.jpg')] bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white ">
                            <div class="text-lg">미용사(피부)국가자격증취득과정</div>
                            <div class="text-2xl font-bold">단기속성(실기)</div>
                        </div>
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-2xl"></div>
                    </button>
                    <div class="new-accordion-content max-h-0 flex flex-col overflow-hidden">
                        <div class="px-4 py-6">
                            <?php include './classList/국비과정실기.php' ?>
                        </div>
                    </div>
                </div>

                <div class="new-accordion-item p-0 m-0">
                    <button class="new-accordion-header relative w-full bg-[url('./src/img/curriculum/curroculum_G_2.jpg')] bg-center h-52 py-3 focus:outline-none rounded-lg overflow-hidden">
                        <div class="absolute bottom-0 w-full bg-black/80 text-center py-2 text-white text-lg">
                            <div class="text-lg">미용사(피부)국가자격증취득과정</div>
                            <div class="text-2xl font-bold">단기속성(필기+실기)</div>
                        </div>
                    </button>
                    <div class="new-accordion-content max-h-0 flex flex-col text-[0.9em]">
                        <div class="px-4 py-6">
                            <?php include './classList/국비과정필기실기.php' ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.new-accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const content = header.nextElementSibling;
            const isOpening = !content.style.maxHeight;

            // If the clicked menu is opening, set its max-height to its scroll height
            if (isOpening) {
                content.style.maxHeight = content.scrollHeight + 'px';
                header.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            } else {
                // If the clicked menu is closing, set its max-height to null
                content.style.maxHeight = null;
            }
        });
    });
</script>
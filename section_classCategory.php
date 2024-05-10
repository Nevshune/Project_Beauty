<div class="w-full bg-blue-100 flex flex-col items-center justify-center py-[24px]">
    <div>
        <h2 class="text-4xl max-[960px]:text-3xl max-[500px]:text-2xl font-bold py-4">차별화된 전문프로그램</h2>
    </div>
    <div id="toggleContainer" class="w-[960px] max-w-[1024px] h-[600px] max-[600px]:h-[860px] max-[960px]:h-[750px] grid grid-cols-4 grid-rows-2 gap-[10px] 
                max-[960px]:w-[600px] max-[960px]:grid-cols-3 max-[960px]:grid-rows-3
                max-[600px]:max-w-[350px] max-[600px]:grid-cols-2 max-[600px]:grid-rows-4">
        <div onclick="toggleHeight('item1' , 'item_b_1')" class="toggleItem group items-center border-2 overflow-hidden border-gray-800 relative bg-[url('./src/sample/img_sample_(2).png')] bg-cover">
            <div id="item1" class="absolute w-[100%] h-[100%] top-0 min-[960px]:group-hover:opacity-[0%] transition-all duration-200  overflow-hidden">
                <div class=" absolute bottom-0 w-full h-12 bg-black text-white flex items-center justify-center">
                    미용 뷰티
                </div>
            </div>
            <div id="item_b_1" class="w-[100%] h-[100%] absolute opacity-[0%] min-[960px]:group-hover:opacity-[80%] bg-white/50 flex flex-col items-center justify-center transition-all duration-200">
                <div>안녕</div>
                <div>이것저것</div>
                <div>알려줄</div>
                <div>수업이야</div>
            </div>
        </div>
        <div onclick="toggleHeight('item2')" class="toggleItem group items-center border-2 overflow-hidden border-gray-800 relative">
            <div id="item2" class="absolute w-[100%] h-[100%] top-0 min-[960px]:group-hover:top-[-100%] transition-all duration-200 bg-blue-500 overflow-hidden">
                <img class=" w-full h-full object-cover" src="./src/sample/img_sample_(2).png" alt="">
            </div>
            <div class="w-[100%] h-[100%] bg-red-500">2</div>
        </div>
        <div onclick="toggleHeight('item3')" class="toggleItem group items-center border-2 overflow-hidden border-gray-800 relative">
            <div id="item3" class="absolute w-[100%] h-[100%] top-0 min-[960px]:group-hover:top-[-100%] transition-all duration-200 bg-blue-500 overflow-hidden">
                <img class=" w-full h-full object-cover" src="./src/sample/img_sample_(3).png" alt="">
            </div>
            <div class="w-[100%] h-[100%] bg-red-500">2</div>
        </div>
        <div onclick="toggleHeight('item4')" class="toggleItem group items-center border-2 overflow-hidden border-gray-800 relative">
            <div id="item4" class="absolute w-[100%] h-[100%] top-0 min-[960px]:group-hover:top-[-100%] transition-all duration-200 bg-blue-500 overflow-hidden">
                <img class=" w-full h-full object-cover" src="./src/sample/img_sample_(4).png" alt="">
            </div>
            <div class="w-[100%] h-[100%] bg-red-500">2</div>
        </div>
        <div onclick="toggleHeight('item5')" class="toggleItem group items-center border-2 overflow-hidden border-gray-800 relative">
            <div id="item5" class="absolute w-[100%] h-[100%] top-0 min-[960px]:group-hover:top-[-100%] transition-all duration-200 bg-blue-500 overflow-hidden">
                <img class=" w-full h-full object-cover" src="./src/sample/img_sample_(5).png" alt="">
            </div>
            <div class="w-[100%] h-[100%] bg-red-500">2</div>
        </div>
        <div onclick="toggleHeight('item6')" class="toggleItem group items-center border-2 overflow-hidden border-gray-800 relative">
            <div id="item6" class="absolute w-[100%] h-[100%] top-0 min-[960px]:group-hover:top-[-100%] transition-all duration-200 bg-blue-500 overflow-hidden">
                <img class=" w-full h-full object-cover" src="./src/sample/img_sample_(6).png" alt="">
            </div>
            <div class="w-[100%] h-[100%] bg-red-500">2</div>
        </div>
        <div onclick="toggleHeight('item7')" class="toggleItem group col-span-2 items-center border-2 overflow-hidden border-gray-800 relative max-[960px]:col-span-3 max-[600px]:col-span-2">
            <div id="item7" class="absolute w-[100%] h-[100%] top-0 min-[960px]:group-hover:top-[-100%] transition-all duration-200 bg-blue-500 overflow-hidden">
                <img class=" w-full h-full object-cover" src="./src/sample/img_sample_(7).png" alt="">
            </div>
            <div class="w-[100%] h-[100%] bg-red-500">2</div>
        </div>
    </div>
</div>

<script>
    function toggleHeight(elementId , element_b_Id) {
        var element = document.getElementById(elementId);
        var element_b = document.getElementById(element_b_Id) 
        // element.classList.toggle('top-[-100%]');
        element_b.classList.toggle('opacity-[0%]');
        element_b.classList.toggle('opacity-[80%]');
    }
</script>

<!-- <script>
    function toggleHeight(elementId) {
        var element = document.getElementById(elementId);
        var currentHeight = element.style.height;
        if (currentHeight === '100%' || currentHeight === '') {
            element.style.height = '0%';
        } else {
            element.style.height = '100%';
        }
    }
</script> -->
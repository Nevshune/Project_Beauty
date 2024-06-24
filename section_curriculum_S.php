<div class="w-full text-3xl max-[500px]:text-2xl font-medium mb-4 flex items-center">
    <p class="bg-[#F08300] inline-block font-black ">&nbsp;</p>
    <p class="pt-2">&nbsp;단기속성</p>
</div>

<div class="w-full">
    <div id="grid_container" class="flex flex-col group h-[412px] transition-all duration-500">
        <div id="grid_row_1" class="grid-row h-[50%] flex transition-all duration-500">
            <div id="grid_col_1" class="relative grid-col bg-[url('./src/sample/img_sample_(1).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="피부국가자격증과정.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">피부</span><span class="block">국가자격증</span><span class="block">과정</span>
                    </div>
                </div>
            </div>
            <div id="grid_col_2" class="relative grid-col bg-[url('./src/sample/img_sample_(2).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="페이스실무살롱테크닉.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">페이스실무</span><span class="block">살롱테크닉</span>
                    </div>
                </div>
            </div>
            <div id="grid_col_3" class="relative grid-col bg-[url('./src/sample/img_sample_(3).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="얼굴윤곽축소테크닉.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">얼굴윤곽</span><span class="block">축소테크닉</span>
                    </div>
                </div>
            </div>
            <div id="grid_col_4" class="relative grid-col bg-[url('./src/sample/img_sample_(4).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="전신살롱테크닉.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">전신</span><span class="block">살롱테크닉</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="grid_row_2" class="grid-row h-[50%] flex transition-all duration-500">
            <div id="grid_col_5" class="relative grid-col bg-[url('./src/sample/img_sample_(5).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="아로마풋케어.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">아로마</span><span class="block">풋케어</span>
                    </div>
                </div>
            </div>
            <div id="grid_col_6" class="relative grid-col bg-[url('./src/sample/img_sample_(6).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="왁싱스페셜과정.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">왁싱</span><span class="block">스페셜과정</span>
                    </div>
                </div>
            </div>
            <div id="grid_col_7" class="relative grid-col bg-[url('./src/sample/img_sample_(7).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="스킨아트과정.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">스킨아트</span><span class="block">과정</span>
                    </div>
                </div>
            </div>
            <div id="grid_col_8" class="relative grid-col bg-[url('./src/sample/img_sample_(8).png')] bg-cover bg-center w-[25%] transition-all duration-500" data-content="창업컨설팅과정.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/50 flex items-center justify-center transition-all duration-500">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-500">
                        <span class="block">창업컨설팅</span><span class="block">과정</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="class_contents" class="w-full max-w-[1080px] flex flex-col px-4 pt-8">
    <!-- PHP 파일의 내용을 이 div에 로드 -->
     <?php include './classList/페이스실무살롱테크닉.php' ?>
</div>

<style>
    .active-row {
        height: 200% !important;
    }

    .active-col {
        width: 120% !important;
    }

    .grid-col:hover:not(.active-col) {
        width: 120% !important;
    }

    .grid-row:hover:not(.active-row) {
        height: 200% !important;
    }

    .grid-col .hidden-text {
        height: 0;
        overflow: hidden;
        transition: height 0.5s;
    }

    .grid-col:hover .hidden-text,
    .active-col .hidden-text {
        height: auto;
    }

    .grid-col .absolute {
        transition: height 0.5s;
    }

    .grid-col .h-full {
        height: 100%;
    }
</style>

<script>
    document.querySelectorAll('.grid-col').forEach(col => {
        const handleHover = (c) => {
            if (!c.classList.contains('active-col') && c !== col) {
                c.querySelector('.absolute').classList.add('h-full');
            } else {
                c.querySelector('.absolute').classList.remove('h-full');
            }
        };

        const updateHFullForNonActiveCols = () => {
            if (!document.querySelector('.active-col')) {
                document.querySelectorAll('.grid-col').forEach(c => {
                    c.querySelector('.absolute').classList.remove('h-full');
                });
            } else {
                document.querySelectorAll('.grid-col').forEach(c => {
                    if (!c.classList.contains('active-col')) {
                        c.querySelector('.absolute').classList.add('h-full');
                    } else {
                        c.querySelector('.absolute').classList.remove('h-full');
                    }
                });
            }
        };

        col.addEventListener('click', () => {
            // 현재 활성화된 요소의 active 상태 제거
            document.querySelectorAll('.active-row').forEach(row => row.classList.remove('active-row'));
            document.querySelectorAll('.active-col').forEach(col => col.classList.remove('active-col'));

            // 클릭한 요소의 부모 요소(grid_row)의 높이를 늘리고, 해당 요소의 너비를 늘림
            col.classList.add('active-col');
            col.parentElement.classList.add('active-row');

            // 다른 grid-col 요소의 .absolute div에 h-full 추가
            updateHFullForNonActiveCols();

            // 클릭한 요소에 해당하는 PHP 파일을 로드
            const contentUrl = col.getAttribute('data-content');
            fetch(`./classList/${contentUrl}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('class_contents').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        });

        col.addEventListener('mouseover', () => {
            // 다른 grid-col 요소의 .absolute div에 h-full 추가
            document.querySelectorAll('.grid-col').forEach(c => handleHover(c));
        });

        col.addEventListener('mouseout', () => {
            // hover로 인해 h-full이 제거되었을 때 다시 추가
            updateHFullForNonActiveCols();
        });
    });

    // 문서 로드 시 active 상태가 있는지 확인하고, 없다면 h-full 제거
    document.addEventListener('DOMContentLoaded', () => {
        updateHFullForNonActiveCols();
    });
</script>

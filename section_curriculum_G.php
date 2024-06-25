<div class="w-full text-3xl max-[500px]:text-2xl font-medium mb-4 flex items-center">
    <p class="bg-[#F08300] inline-block font-black ">&nbsp;</p>
    <p class="pt-2">&nbsp;국비과정</p>
</div>

<!-- 새로운 2x1 레이아웃 코드 -->
<div class="w-full mt-8">
    <div id="new_grid_container" class="flex flex-col group h-[312px] transition-all duration-[800ms]">
        <div id="new_grid_row" class="new-grid-row h-full flex transition-all duration-[800ms]">
            <div id="new_grid_col_1" class="relative new-grid-col bg-[url('./src/img/curriculum/curroculum_G_1.jpg')] bg-cover bg-center w-[50%] transition-all duration-[800ms]" data-content="국비과정실기.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/70 flex items-center justify-center transition-all duration-[800ms]">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-[800ms]">
                        <div class="w-full flex flex-wrap justify-center items-center text-lg"><span class="block">미용사(피부)</span><span class="block">국가자격증취득과정</span></div>
                        <div class="w-full flex flex-wrap justify-center items-center text-2xl font-bold"><span class="block">단기속성(실기)</div>
                    </div>
                </div>
            </div>
            <div id="new_grid_col_2" class="relative new-grid-col bg-[url('./src/img/curriculum/curroculum_G_2.jpg')] bg-cover bg-center w-[50%] transition-all duration-[800ms]" data-content="국비과정필기실기.php">
                <div class="absolute w-full py-2 bottom-0 bg-black/70 flex items-center justify-center transition-all duration-[800ms]">
                    <div class="w-full text-white flex flex-wrap justify-center items-center transition-all duration-[800ms]">
                        <div class="w-full flex flex-wrap justify-center items-center text-lg"><span class="block">미용사(피부)</span><span class="block">국가자격증취득과정</span></div>
                        <div class="w-full flex flex-wrap justify-center items-center text-2xl font-bold"><span class="block">단기속성(필기+실기)</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="new_class_contents" class="w-full max-w-[1080px] flex flex-col px-4 pt-8">
    <!-- PHP 파일의 내용을 이 div에 로드 -->
</div>

<style>
    .new-active-row {
        height: 100% !important;
    }

    .new-active-col {
        width: 150% !important;
    }

    .new-grid-col:hover:not(.new-active-col) {
        width: 150% !important;
    }

    .new-grid-row:hover:not(.new-active-row) {
        height: 100% !important;
    }

    .new-grid-col .hidden-text {
        height: 0;
        overflow: hidden;
        transition: height 0.5s;
    }

    .new-grid-col:hover .hidden-text,
    .new-active-col .hidden-text {
        height: auto;
    }

    .new-grid-col .absolute {
        transition: height 0.5s;
    }

    .new-grid-col .h-full {
        height: 100%;
    }
</style>

<script>
    document.querySelectorAll('.new-grid-col').forEach(col => {
        const handleHover = (c) => {
            if (!c.classList.contains('new-active-col') && c !== col) {
                c.querySelector('.absolute').classList.add('h-full');
            } else {
                c.querySelector('.absolute').classList.remove('h-full');
            }
        };

        const updateHFullForNonActiveCols = () => {
            if (!document.querySelector('.new-active-col')) {
                document.querySelectorAll('.new-grid-col').forEach(c => {
                    c.querySelector('.absolute').classList.remove('h-full');
                });
            } else {
                document.querySelectorAll('.new-grid-col').forEach(c => {
                    if (!c.classList.contains('new-active-col')) {
                        c.querySelector('.absolute').classList.add('h-full');
                    } else {
                        c.querySelector('.absolute').classList.remove('h-full');
                    }
                });
            }
        };

        col.addEventListener('click', () => {
            // 현재 활성화된 요소의 active 상태 제거
            document.querySelectorAll('.new-active-row').forEach(row => row.classList.remove('new-active-row'));
            document.querySelectorAll('.new-active-col').forEach(col => col.classList.remove('new-active-col'));

            // 클릭한 요소의 부모 요소(grid_row)의 높이를 늘리고, 해당 요소의 너비를 늘림
            col.classList.add('new-active-col');
            col.parentElement.classList.add('new-active-row');

            // 다른 grid-col 요소의 .absolute div에 h-full 추가
            updateHFullForNonActiveCols();

            // 클릭한 요소에 해당하는 PHP 파일을 로드
            const contentUrl = col.getAttribute('data-content');
            fetch(`./classList/${contentUrl}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('new_class_contents').innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        });

        col.addEventListener('mouseover', () => {
            // 다른 grid-col 요소의 .absolute div에 h-full 추가
            document.querySelectorAll('.new-grid-col').forEach(c => handleHover(c));
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
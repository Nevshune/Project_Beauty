<nav class="w-full fixed bg-white shadow-md flex justify-center z-[200] transition-all duration-500">
    <div class="w-full max-w-[1440px] min-[500px]:pb-4 h-full flex max-[900px]:flex-col justify-between items-center px-8 pt-4">
        <div class=""><img src="./src/logo/JS_Logo-text_color.svg" alt="" class="h-[58px]"></div>
        <div class="flex flex-row item overflow-hidden flex-wrap justify-center  items-center space-x-14 max-[500px]:h-20 max-[500px]:space-x-4 max-[500px]:gap-2 max-[500px]:pb-2 max-[950px]:space-x-7  search_space transition-all duration-500 mt-4 text-lg font-bold">
            <a href="#advertisement"><?php echo $nav1; ?></a>
            <a href="#card"><?php echo $nav2; ?></a>
            <a href="#exam"><?php echo $nav3; ?></a>
            <a href="#curriculum"><?php echo $nav4; ?></a>
            <a href="#pushq"><?php echo $nav5; ?></a>            
        </div>
    </div>
</nav>

<script>
    let lastScrollTop = 0;

    window.addEventListener("scroll", function() {
        const searchSpace = document.querySelector(".search_space");
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            // 스크롤을 내릴 때
            // searchSpace.classList.add("hidden");
            searchSpace.classList.remove("max-[500px]:h-20");
            searchSpace.classList.add("max-[500px]:h-0");
            searchSpace.classList.add("max-[500px]:opacity-0");
            searchSpace.classList.remove("max-[500px]:opacity-100");
        } else {
            // 스크롤을 올릴 때
            // searchSpace.classList.remove("hidden");
            searchSpace.classList.remove("max-[500px]:h-0");
            searchSpace.classList.add("max-[500px]:h-20");
            searchSpace.classList.add("max-[500px]:opacity-100");
            searchSpace.classList.remove("max-[500px]:opacity-0");
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // 스크롤이 음수로 가는 것을 방지
    });
</script>
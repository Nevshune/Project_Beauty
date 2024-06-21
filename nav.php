<nav class="w-full fixed bg-white shadow-md flex justify-center z-[200] transition-all duration-500">
    <div class="w-full max-w-[1440px] min-[500px]:pb-6 h-full flex max-[900px]:flex-col justify-between items-center px-8 pt-8">
        <div class="text-3xl">LOGO</div>
        <div class="flex flex-row item overflow-hidden  items-center gap-14 max-[900px]:gap-7  search_space transition-all duration-500 mt-4 text-lg font-bold">
            <a href="#"><?php echo $nav1; ?></a>
            <a href="#card"><?php echo $nav2; ?></a>
            <a href="#"><?php echo $nav3; ?></a>
            <a href="#"><?php echo $nav4; ?></a>
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
            searchSpace.classList.remove("max-[500px]:h-10");
            searchSpace.classList.add("max-[500px]:h-0");
            searchSpace.classList.add("max-[500px]:opacity-0");
            searchSpace.classList.remove("max-[500px]:opacity-100");
        } else {
            // 스크롤을 올릴 때
            // searchSpace.classList.remove("hidden");
            searchSpace.classList.remove("max-[500px]:h-0");
            searchSpace.classList.add("max-[500px]:h-10");
            searchSpace.classList.add("max-[500px]:opacity-100");
            searchSpace.classList.remove("max-[500px]:opacity-0");
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // 스크롤이 음수로 가는 것을 방지
    });
</script>
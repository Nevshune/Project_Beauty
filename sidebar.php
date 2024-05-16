<aside id="sidebar" class="z-[10] fixed top-0 right-8 h-screen flex flex-col justify-center items-end space-y-4 opacity-0 invisible transition-all duration-1000 max-[500px]:hidden">
    <a href="#" class="z-[100] w-[48px] hover:w-[200px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-between overflow-hidden duration-500">
        <img src="./src/icon/user_icon.jpg" alt="" class="w-[48px]">
        <div class="w-[152px] flex justify-center">
            <div class="px-2  text-nowrap">HOME</div>
        </div>
    </a>
    <a href="#" class="z-[100] w-[48px] hover:w-[200px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-start overflow-hidden duration-500">
        <img src="./src/icon/user_icon.jpg" alt="" class="w-[48px]">
        <div class="w-[152px] flex justify-center">
            <div class="px-2  text-nowrap">자격증</div>
        </div>
    </a>
    <a href="#" class="z-[100] w-[48px] hover:w-[200px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-between overflow-hidden duration-500">
        <img src="./src/icon/user_icon.jpg" alt="" class="w-[48px]">
        <div class="w-[152px] flex justify-center">
            <div class="px-2  text-nowrap">자격증</div>
        </div>
    </a>
    <a href="#" class="z-[100] w-[48px] hover:w-[200px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-between overflow-hidden duration-500">
        <img src="./src/icon/user_icon.jpg" alt="" class="w-[48px]">
        <div class="w-[152px] flex justify-center">
            <div class="px-2  text-nowrap">자격증</div>
        </div>
    </a>
</aside>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        let sidebar = document.getElementById('sidebar');
        let isShown = false;

        window.addEventListener('scroll', function() {
            if (!isShown && window.pageYOffset > 200) {
                sidebar.classList.remove('invisible');
                sidebar.classList.remove('opacity-0');
                isShown = true;
            } else if (isShown && window.pageYOffset <= 200) {
                sidebar.classList.add('invisible');
                sidebar.classList.add('opacity-0');
                isShown = false;
            }
        });

        if (window.pageYOffset > 200) {
            sidebar.classList.remove('invisible');
            sidebar.classList.remove('opacity-0');
            isShown = true;
        } else {
            sidebar.classList.add('invisible');
            sidebar.classList.add('opacity-0');
            isShown = false;
        }
    });
</script>
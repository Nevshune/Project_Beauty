<aside id="sidebar" class="fixed z-20 top-0 right-0 w-[80px] h-screen flex flex-col justify-center items-center space-y-4 opacity-0 invisible transition-all duration-1000">
    <a href="#" class="w-[48px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-center">1</a>
    <a href="#" class="w-[48px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-center">2</a>
    <a href="#" class="w-[48px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-center">3</a>
    <a href="#" class="w-[48px] h-[48px] rounded-full border-2 border-gray-300 bg-gray-100 flex items-center justify-center">4</a>
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

<section id="main_top" class="w-full h-screen pt-[90px] max-[900px]:pt-[134px] max-[628px]:pt-[160px] max-[700px]:pb-[140px] pb-[100px] ">
    <!-- Slider main container -->
    <swiper-container class="mySwiper w-full h-full " pagination="true" loop="true" autoplay-delay="52000">

        <swiper-slide class="h-full w-full flex flex-col justify-center items-center text-3xl relative bg-[url('./src/img/Top-BG/BG002.jpg')] px-4 bg-cover  bg-center space-y-24">
            <div class=" absolute top-4 left-4 w-56 ">
                <img src="./src/logo/JS_Logo-text_white.svg" alt="" class="">
            </div>

            <div class=" absolute top-[10px]  right-[15%] max-[500px]:hidden   ">
                <div class="w-full max-w-[1440px] text-xl text-white flex flex-col items-end">
                    <p>피부만을 위한 전문 대표원장의 지도로</p>
                    <p>최상의 교육을 통해</p>
                    <p>최단기간 <span class="text-[1.1em] font-bold">피부국가자격증 취득</span>부터</p>
                    <p>업계최고 <span class="text-[1.1em] font-bold">피부전문가를 양성</span>하는</p>
                    <p><span class="text-[1.1em] font-bold">취업, 창업에 특화된 피부전문교육 기관</span></p>
                </div>
            </div>
        </swiper-slide>

        <swiper-slide class="h-full w-full flex flex-col justify-center items-center text-3xl relative bg-[url('./src/img/Top-BG/BG001.jpg')] px-4 bg-cover  bg-center space-y-24">
            <div class="w-full max-w-[800px] bg-white/30 backdrop-blur-[12px] border-white/50 shadow-sm rounded-3xl">
                <img src="./src/logo/JS_Logo-mainfull.svg" alt="" class="w-full py-12 px-20 max-[700px]:px-5 max-[700px]:py-8 shadow-md">
            </div>
            <div class="w-full max-w-[1440px] text-xl text-white flex flex-col items-end px-[5%] max-md:hidden">
                <p>피부만을 위한 전문 대표원장의 지도로</p>
                <p>최상의 교육을 통해</p>
                <p>최단기간 <span class="text-[1.1em] font-bold">피부국가자격증 취득</span>부터</p>
                <p>업계최고 <span class="text-[1.1em] font-bold">피부전문가를 양성</span>하는</p>
                <p><span class="text-[1.1em] font-bold">취업, 창업에 특화된 피부전문교육 기관</span></p>
            </div>
        </swiper-slide>



        <swiper-slide class="h-full w-full flex flex-col justify-center items-center text-3xl relative bg-[url('./src/img/Top-BG/Top_bg.jpg')] px-4 bg-cover bg-[center] max-[580px]:bg-[center_left_-48px]">
            <div class=" absolute top-0 left-0 w-full bg-black h-[15%] flex items-center justify-center py-2 max-[500px]:pt-5">
                <img src="./src/logo/JS_Logo-text_white.svg" alt="" class="h-full ">
            </div>
            <div class=" absolute bottom-0 left-0 w-full  bg-black h-[15%] flex items-center justify-center pt-4 pb-5 text-white text-5xl max-[700px]:text-4xl  max-[500px]:text-3xl font-extrabold">
                국제뷰티 EXPO 기능대회
            </div>
        </swiper-slide>



    </swiper-container>

    <style>

    </style>

    <script>
        const swiperEl = document.querySelector('swiper-container');

        const params = {
            injectStyles: [`
        .swiper-pagination-bullet {
          width: 40px;
          height: 6px;
          text-align: center;
          line-height: 20px;
          font-size: 12px;
          color: #555;
          opacity: 1;
          background: rgba(0, 0, 0, 0.2);
          border-radius: 0;
          transition: background-color 0.75; /* 배경 색상 변화 애니메이션 */
        }

        .swiper-pagination-bullet-active {
          color: #fff;
          background: #ffffff;
        }

        .swiper-button-prev,
        .swiper-button-next {
            font-size: 5rem ;
        background-color: #fff;
        opacity: 0.5;
        padding: 0px 8px;
        border-radius: 500px;
        color: #000000
    }
    
        .swiper-button-next svg, 
        .swiper-button-prev svg {
            height : 20px;
            opacity: 1;
    }

        .swiper-button-prev:after,
        .swiper-button-next:after {
        font-size: 0.5rem !important;
        font-weight: 600 !important;
    }
      `],
        };

        Object.assign(swiperEl, params);

        // swiperEl.initialize();
    </script>
</section>
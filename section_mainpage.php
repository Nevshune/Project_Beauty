<section id="main_top" class="w-full h-screen bg-blue-200 ">
    <!-- Slider main container -->
    <swiper-container class="mySwiper w-full h-full " pagination="true" navigation="true" loop="true" autoplay-delay="3000">

        <swiper-slide class="h-full w-full flex justify-center items-center text-3xl relative bg-[url('./src/img/main_banner_1.png')] bg-cover bg-center">
            <div class="w-[800px] backdrop-blur-sm border-[1px] border-white/20 shadow-sm rounded-xl max-[700px]:px-4">
                <img src="./src/img/main_text.svg" alt="" class="w-full py-12 px-20 max-[500px]:px-5 shadow-md">
            </div>
        </swiper-slide>

        <swiper-slide class="h-full w-full flex justify-center items-center text-3xl relative bg-[url('./src/img/main_banner_2.png')] bg-cover bg-start">
            <div class="w-full max-w-[980px] flex flex-col items-center justify-center p-4 max-[700px]:space-y-8">
                <img src="./src/img/mainbanner_2_title.svg" alt="" class="pr-12 max-[700px]:pr-0">
                <div class="w-full flex max-[700px]:flex-col justify-center items-center pl-12 max-[700px]:pl-0">
                    <div class=" space-y-8 max-[700px]:px-12 flex flex-col items-center">
                        <img src="./src/img/mainbanner_2_text.svg" alt="">
                        <img src="./src/img/mainbanner_2_call_btn.svg" alt="">
                    </div>
                    <div>
                        <img src="./src/img/mainbanner_2_card_ob.png" alt="" class="max-[700px]:hidden">
                    </div>
                </div>
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
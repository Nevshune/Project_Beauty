<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>

  <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="4"
    space-between="30" centered-slides="true" loop="true">
    <swiper-slide>
    <div class="flex-col gap-5 max-[1150px]:flex-col justify-center items-center">
                 <div class="max-w-[300px] flex justify-center items-center ">
                    <img class="object-cover h-full " src="./src/img/curriculum/curroculum_S_1.png" alt="">
                 </div>
                 <div class="flex-col">
                    <div class="font-bold py-2">페이스실무살롱테크닉</div>
                    <div class="flex gap-2 max-[1300px]:flex-col max-[1300px]:gap-1">
                        <div>교육기간 : </div>
                        <div class="font-bold"><span class="text-blue-500">2024.04.29</span> ~ <span class="text-red-500">2024.08.23</span></div>
                    </div>
                    <div class="">
                        <div>교육시간 요일 : </div>
                        <div class="font-bold">8회 과정 (1회 수업 - 3시간)</div>
                    </div>
                 </div>
              </div>
    </swiper-slide>
   
  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>

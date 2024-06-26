<!-- 지도 -->

<div class="w-full  flex  flex-col justify-center items-center py-36 max-[400px]:py-8 bg-[#FAFAFA] text-[#333333]" style="font-family: 'Noto Sans KR'; font-weight: 500;">

    <div class="text-[#333333] mb-14 flex flex-col justify-center items-center space-y-3 " style="font-family: 'Noto Sans KR'; font-weight: 500;">
        <div class="text-[35px]"><span class="text-[#C53528]">CONTACT</span> US</div>
        <div class="text-[17px]">찾아오시는 길을 자세히 알려드립니다.</div>
    </div>
    <div class="w-full max-w-[1440px] px-10">
        <div id="map" class="w-full h-[550px] max-[500px]:h-[400px] "></div>
        <div class="w-full flex justify-between pt-2">

            <div class="break-keep">
                <span class="mr-6 max-[675px]:flex">
                    <span class="mr-3 font-bold w-[36px] ">주소</span><span class=" w-full font-light">인천광역시 남동구 주안로 235번길 2, 2,3층(간석동)</span>
                </span>
                <span class="mr-6 max-[675px]:flex">
                    <span class="mr-3 font-bold">전화</span><span class=" font-light">010-5171-2322</span>
                </span>
            </div>

            <div class="font-[NanumSquareRound] max-[800px]:hidden text-xl">kakao<strong class="text-[1.1em] font-extrabold">map</strong></div>

        </div>
    </div>


    <a href="https://kko.to/PucY7Q6Z2Q" target="_blank" class="py-4 max-[675px]:py-2 px-6 max-[675px]:px-3 mt-3 rounded-lg bg-blue-500 text-white text-xl max-[675px]:lg">
        <div class="detail"><i class="fa-solid fa-diamond-turn-right"></i>&nbsp;&nbsp;&nbsp;길찾기</div>
    </a>
</div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=55022bcd2525beeddd280db1f43f0dbd"></script>
<script src="./js/kakaoMap.js"></script>
<!-- 지도 end -->
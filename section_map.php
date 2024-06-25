<!-- 지도 -->

<div class="w-full  flex  flex-col justify-center items-center py-36 max-[400px]:py-8 bg-[#FAFAFA] text-[#333333]" style="font-family: 'Noto Sans KR'; font-weight: 500;">

    <div class="text-[#333333] mb-14 flex flex-col justify-center items-center space-y-3 " style="font-family: 'Noto Sans KR'; font-weight: 500;">
        <div class="text-[35px]"><span class="text-[#C53528]">CONTACT</span> US</div>
        <div class="text-[17px]">찾아오시는 길을 자세히 알려드립니다.</div>
    </div>
    <div class="w-full max-w-[1440px] px-10">
        <div id="map" class="w-full h-[550px] max-[500px]:h-[400px] "></div>
        <div class="w-full flex justify-between p-1">
            <a href="https://kko.to/PucY7Q6Z2Q" target="_blank" class="">
                <div class="detail">길찾기</div>
            </a>
            <div class="font-[NanumSquareRound] text-xl">kakao<strong class="text-[1.1em] font-extrabold">map</strong></div>
        </div>
    </div>

    <div class="w-full max-w-[1440px] py-8 px-16 max-[500px]:px-10 space-y-2">
        <div class=" inline-block mr-6"><span class="mr-3 font-bold">주소</span><span class=" font-light">인천광역시 남동구 주안로 235번길 2, 2,3(간석동)</span></div>
        <div class=" inline-block mr-6"><span class="mr-3 font-bold">전화</span><span class=" font-light">010-5171-2322</span></div>
    </div>
</div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=55022bcd2525beeddd280db1f43f0dbd"></script>
<script src="./js/kakaoMap.js"></script>
<!-- 지도 end -->
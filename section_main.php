<script src="./js/pushQ.js"></script>

<form class="w-full h-[100px] bg-gray-400 fixed bottom-0 left-0 flex justify-center">
    <div class="w-full max-w-[1440px] h-full flex justify-between items-center gap-8 p-4">
        <div class="text-3xl">asd</div>
        <div class="flex">
            <div class="flex items-center gap-2">
                <div>이름 : </div>
                <input class="input_1" name="이름" rows="4" cols="50"></input>
            </div>
            <div class="flex items-center gap-2">
                <div>나이 : </div>
                <input class="input_1" name="나이" rows="4" cols="50"></input>
            </div>
            <div class="flex items-center gap-2">
                <div>전화번호 : </div>
                <input class="input_1" name="전화번호" rows="4" cols="50"></input>
            </div>
            <button class="p-2 border-2 bg-blue-500 rounded-md" type="button" onclick="sendPushRequest()">Push 메시지 보내기</button> <!-- type="button" 추가 -->
        </div>

        <a href="#" class=" duration-75">asdasd</a>

    </div>
</form>
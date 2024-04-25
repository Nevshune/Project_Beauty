<section id="main">
    <form >        
        <div class="flex justify-between">
            <div class="flex items-center">
                <div>이름 : </div>
                <input class="input_1" name="이름" rows="4" cols="50" required></input> <!-- 이름 입력란 -->
            </div>
            <div class="flex items-center">
                <div>연락처 : </div>
                <input class="input_1" name="연락처" rows="4" cols="50" required></input> <!-- 나이 입력란 -->
            </div>
            <div class="flex items-center">
                <div>교육과정 : </div>
                <input class="input_1" name="교육과정" rows="4" cols="50" required></input> <!-- 나이 입력란 -->
            </div>
            <!-- 원하는 만큼 입력란을 추가할 수 있습니다. -->
    
            <button type="submit" onclick="sendPushRequest()">Push 메시지 보내기</button>
        </div>
    </form>
</section>
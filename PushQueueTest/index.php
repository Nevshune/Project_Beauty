<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script>
        function sendPushRequest() {
            var inputs = {}; // 입력된 내용을 담을 객체 생성

            // 각 입력란의 값을 수집하여 객체에 추가
            var inputsElements = document.querySelectorAll(".input_1");
            inputsElements.forEach(function(element) {
                var inputName = element.getAttribute("name"); // 각 입력란의 이름 속성 가져오기
                inputs[inputName] = element.value; // 이름 속성을 객체의 키로 사용하여 값 추가
            });

            // 서버로 전송할 JSON 문자열 생성
            var jsonBody = JSON.stringify(inputs);

            // AJAX 요청을 통해 JSON 문자열을 서버로 전송
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./process/pushQueue.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // 성공적으로 요청을 보낸 후 할 일을 작성합니다.
                        console.log(xhr.responseText); // 응답 확인
                    } else {
                        // 요청에 실패한 경우 처리할 내용을 작성합니다.
                        console.error('요청 실패');
                    }
                }
            };
            xhr.send("body=" + encodeURIComponent(jsonBody)); // body 내용을 전송
        }
    </script>
</head>

<body>
    <form>
        <div>
            <div>이름 : </div>
            <input class="input_1" name="이름" rows="4" cols="50"></ㅑ> <!-- 이름 입력란 -->
        </div>
        <div>
            <div>나이 : </div>
            <input class="input_1" name="나이" rows="4" cols="50"></input> <!-- 나이 입력란 -->
        </div>
        <div>
            <div>전화번호 : </div>
            <input class="input_1" name="전화번호" rows="4" cols="50"></input> <!-- 나이 입력란 -->
        </div>
        <!-- 원하는 만큼 입력란을 추가할 수 있습니다. -->

        <button onclick="sendPushRequest()">Push 메시지 보내기</button>
        </form>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script>
        function sendPushRequest() {
            // 입력된 값 확인
            var inputsElements = document.querySelectorAll(".input_1");
            var inputs = {};
            var isEmpty = false;

            inputsElements.forEach(function(element) {
                var inputName = element.getAttribute("name");
                var inputValue = element.value.trim(); // 공백 제거

                if (!inputValue) { // 값이 비어있는 경우
                    if (!isEmpty) { // 빈 값에 대한 요청 팝업이 하나만 뜨도록 함
                        alert(inputName + "을(를) 입력하세요.");
                        isEmpty = true;
                    }
                    return;
                }

                inputs[inputName] = inputValue;
            });

            if (isEmpty) {
                return; // 값이 비어있으면 전송 중지
            }

            var jsonBody = JSON.stringify(inputs);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./process/pushQueue.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        alert("Push 메시지가 성공적으로 전송되었습니다.");
                        window.location.href = "main.php"; // 성공했을 때 main.php로 이동
                    } else {
                        alert("Push 메시지 전송에 실패했습니다.");
                        location.reload(); // 실패했을 때 페이지 새로고침
                    }
                }
            };
            xhr.send("body=" + encodeURIComponent(jsonBody));
        }
    </script>
</head>

<body>
    <form>
        <div>
            <div>이름 : </div>
            <input class="input_1" name="이름" rows="4" cols="50"></input>
        </div>
        <div>
            <div>나이 : </div>
            <input class="input_1" name="나이" rows="4" cols="50"></input>
        </div>
        <div>
            <div>전화번호 : </div>
            <input class="input_1" name="전화번호" rows="4" cols="50"></input>
        </div>

        <button type="button" onclick="sendPushRequest()">Push 메시지 보내기</button> <!-- type="button" 추가 -->
    </form>
</body>

</html>

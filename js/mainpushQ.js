
function mainsendPushRequest() {
  
  // 입력된 값 확인
  var inputsElements = document.querySelectorAll(".input_2");
  var inputs = {};
  var isEmpty = false;

  inputsElements.forEach(function (element) {
    var inputName = element.getAttribute("name");
    var inputValue = element.value.trim(); // 공백 제거

    if (!inputValue) { // 값이 비어있는 경우
      if (!isEmpty) { // 빈 값에 대한 요청 팝업이 하나만 뜨도록 함
        // alert(inputName + "을(를) 입력하세요.");
        element.focus();
        isEmpty = true;
      }
      return;
    }

    inputs[inputName] = inputValue;
  });

  if (isEmpty) {
    return; // 값이 비어있으면 전송 중지
  }

   // 개인정보 동의 확인
   var consentCheckbox = document.getElementById('consentCheckbox');
   if (!consentCheckbox.checked) {
     alert("개인정보 수집에 동의해야 합니다.");
     return;
   }

    // 이메일 주소와 도메인 합치기
  var emailInput = document.querySelector('input[name="이메일"]');
  var domainSelect = document.querySelector('select[name="도메인"]');
  if(domainSelect.value == ''){
    var email = emailInput.value.trim()
    inputs["이메일"] = email;
  }else{
  var email = emailInput.value.trim() + "@" + domainSelect.value.trim();

  // inputs 객체에 이메일 값 추가
  inputs["이메일"] = email;
  }

  var jsonBody = JSON.stringify(inputs);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./process/pushQueue.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert("Push 메시지가 성공적으로 전송되었습니다.");
        window.location.href = "index.php"; // 성공했을 때 main.php로 이동
      } else {
        alert("Push 메시지 전송에 실패했습니다.");
        location.reload(); // 실패했을 때 페이지 새로고침
      }
    }
  };
  xhr.send("body=" + encodeURIComponent(jsonBody));
}
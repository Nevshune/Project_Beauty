<?php include './header.php' ?>
<script src="./js/login.js"></script>
<section class="w-screen h-screen flex flex-col justify-center items-center">
  <div class=" flex flex-col justify-center items-center p-12 pb-16 border-[2px] rounded-xl border-blue-200 shadow-lg">
    <h1 class=" text-5xl font-bold m-4 mb-12">관리자 로그인</h1>
    <form method="post" name="login_form" action="./process/login_process.php" class="flex flex-col space-y-4 justify-center items-center">
      <div class=" w-[300px] flex justify-between items-center">
        <label for="">아이디</label>
        <input type="text" name="id" id="id" placeholder="아이디" class=" rounded-md ring-blue-400 border-blue-300">
      </div>
      <div class=" w-[300px] flex justify-between items-center">
        <label for="">비밀번호</label>
        <input type="password" name="pw" id="pw" placeholder="비밀번호" class=" rounded-md ring-blue-400 border-blue-300">
      </div>
    </form>
    <button id="btn_login" class="w-[200px] h-[40px] mt-8 text-white bg-blue-600 shadow-sm rounded-lg border-0 border-blue-500 hover:bg-blue-500 hover:border-[2px] transition-all duration-100">로그인</button>
  </div>
</section>
</body>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // 비밀번호 입력 필드를 찾습니다.
    var passwordInput = document.getElementById("pw");

    // 비밀번호 입력 필드에서 키보드 이벤트를 감지합니다.
    passwordInput.addEventListener("keyup", function(event) {
        // 키 코드가 13이면(엔터 키가 눌렸을 때)
        if (event.keyCode === 13) {
            // 로그인 버튼을 클릭합니다.
            document.getElementById("btn_login").click();
        }
    });
});
</script>

</html>
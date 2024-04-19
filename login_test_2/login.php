<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그테스트</title>
  <script src="./js/login.js"></script>
</head>
<body>
  <h1>로그인</h1>
  <form method="post" name="login_form" action="./process/login_process.php">
    <label for="">아이디</label>
    <input type="text" name="id" id="id" placeholder="아이디">
    <label for="">비밀번호</label>
    <input type="text" name="pw" id="pw" placeholder="비번">
    <button id="btn_login">로그인</button>
  </form>
</body>
</html>
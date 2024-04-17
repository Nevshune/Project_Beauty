<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['body'])) {
    // POST 요청으로 전달된 body 내용을 JSON으로 디코딩합니다.
    $inputs = json_decode($_POST['body'], true);

    // 입력값들을 메시지의 일부로 조합합니다.
    $body_content = '';
    foreach ($inputs as $key => $value) {
        $body_content .= $key . ': ' . $value . "\n";
    }

    // cURL을 사용하여 메시지를 보냅니다.
    $ch = curl_init();
    $url = 'http://push.doday.net/api/push';
    $data = array(
        'uuid' => 'a69e033ff97eb7d6',
        'secret_key' => 'hOacbTxluU',
        'code' => 'KdPushQueue',
        'body' => $body_content
    );

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    $result = curl_exec($ch);
    curl_close($ch);

    echo $result; // 서버로부터 받은 응답 출력
} else {
    echo "잘못된 요청입니다.";
}
?>
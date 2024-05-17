<?php
$sql = "SELECT * FROM popup_list WHERE popup_Show = 1";
?>

<div id="popup-container" class="fixed z-[1000] m-28 flex space-x-2">
    <?php
    // 현재 날짜 가져오기
    $currentDate = date('Y-m-d');

    // 계정 조회
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 결과 출력
        $index = 0;
        while ($row = $result->fetch_assoc()) {
            $index++;
            // 팝업 시작일과 종료일 가져오기
            $popupStartDay = $row["popupStart_Date"];
            $popupEndDay = $row["popupEnd_Date"];

            // echo '[',  $popupStartDay, ',', $currentDate, ',', $popupEndDay, ']';

            // 현재 날짜가 팝업 기간에 포함되는지 확인
            if ($currentDate >= $popupStartDay && $currentDate <= $popupEndDay) {
    ?>
                <div id="popup-<?php echo $index; ?>" class="border-2 border-white/50 bg-white/50 mb-4 hidden">
                    <div class="flex justify-between bg-white/50 pt-2 pb-1 px-2">
                        <div class="cursor-pointer " onclick="hidePopupFor24Hours(<?php echo $index; ?>)">24시간동안 보지않기</div>
                        <div class="cursor-pointer " onclick="closePopup(<?php echo $index; ?>)">닫기</div>
                    </div>
                    <?php if (!empty($row["popup_Link"])) { ?>
                        <a target="_blank" href="<?php echo $row["popup_Link"] ?>">
                            <img src="./Admin/uploads/popup/<?php echo $row["popup_Img"] ?>" alt="">
                        </a>
                    <?php } else { ?>
                        <img src="./Admin/uploads/popup/<?php echo $row["popup_Img"] ?>" alt="">
                    <?php } ?>
                    <hr />

                </div>
    <?php
                continue;
            } else {
                continue;
            }
            continue;
        }
    }
    ?>
</div>

<script>
    // 쿠키를 설정하는 함수
    function setCookie(name, value, expiryDays) {
        var expires = "";
        if (expiryDays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiryDays * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // 쿠키를 가져오는 함수
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // 특정 팝업을 닫는 함수
    function closePopup(index) {
        document.getElementById('popup-' + index).style.display = 'none';
    }

    // 특정 팝업을 24시간 동안 보지 않도록 쿠키를 설정하는 함수
    function hidePopupFor24Hours(index) {
        setCookie("popup_closed_" + index, "true", 1); // 1일 동안 저장
        closePopup(index);
    }

    function showPopup() {
        var popupCount = <?php echo $result->num_rows; ?>;

        for (var Pindex = 1; Pindex <= popupCount; Pindex++) {
            var popupCookie = getCookie("popup_closed_" + Pindex);

            // 쿠키가 없으면 팝업을 보여줌
            if (!popupCookie) {
                var popupElement = document.getElementById('popup-' + Pindex);
                if (popupElement) {
                    popupElement.style.display = 'block';
                }
            }
        }
    }

    // 페이지 로드 시 모든 팝업을 체크하는 함수
    // function showPopup() {
    //     var Pindex = 1;
    //     while (document.getElementById('popup-' + Pindex)) {
    //         var popupCookie = getCookie("popup_closed_" + Pindex);

    //         // 쿠키가 없으면 팝업을 보여줌
    //         if (!popupCookie) {
    //             document.getElementById('popup-' + Pindex).style.display = 'block';
    //         }
    //         Pindex++;
    //     }
    // }

    // 페이지 로드 시 팝업 체크
    window.onload = showPopup;
</script>
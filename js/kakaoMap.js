
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = {
            center: new kakao.maps.LatLng(37.4851976, 126.9288968), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다



    var imageSrc = './src/icon/mapicon_2.png', // 마커이미지의 주소입니다    
        imageSize = new kakao.maps.Size(82, 62), // 마커이미지의 크기입니다
        imageOption = {
            offset: new kakao.maps.Point(27, 69)
        }; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

    // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
        markerPosition = new kakao.maps.LatLng(37.4851976, 126.9288968); // 마커가 표시될 위치입니다

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition,
        image: markerImage // 마커이미지 설정 
    });

    // 축소·확대기능
    var zoomControl = new kakao.maps.ZoomControl();
    map.addControl(zoomControl, kakao.maps.ControlPosition.LEFT);

    (function setZoomable() {
        // 마우스 휠로 지도 확대,축소 가능여부를 설정합니다
        map.setZoomable(false);
    }())

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);
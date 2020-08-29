<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="map.css" />
    <title>지도</title>
</head>
<body>
    <?php
        include_once('header.php');
    ?>
<div id="map" style="width:100%;height:89%;"></div>
<script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=62f395b0e08fed1f0241c9d88f73d999"></script>
<script>
// 마커를 담을 배열입니다
var markers = [];
//
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(37.5642135 , 127.0016985), // 지도의 중심좌표
        level: 5 // 지도의 확대 레벨 
    }; 
var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
// HTML5의 geolocation으로 사용할 수 있는지 확인합니다 
if (navigator.geolocation) {
    // GeoLocation을 이용해서 접속 위치를 얻어옵니다
    navigator.geolocation.getCurrentPosition(function(position) {
        var lat = position.coords.latitude, // 위도
            lon = position.coords.longitude; // 경도
        
        var locPosition = new kakao.maps.LatLng(lat, lon), // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
            //message='<div class="current_location">현재위치</div>';
            message=document.createElement('div');
            message.className="current";
            message.innerHTML="현위치";
        displayMarker(locPosition, message);
    });
    
} else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
    
    var locPosition = new kakao.maps.LatLng(37.5642135 , 127.0016985),    
        message = 'geolocation을 사용할수 없어요..'
        
    displayMarker(locPosition, message);
}
function displayMarker(locPosition, message){
    console.log(locPosition, message);
    var imageSrc = 'img/blue_marker.png', // 마커이미지의 주소입니다    
    imageSize = new kakao.maps.Size(50, 50), // 마커이미지의 크기입니다
    imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

    // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption);
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: locPosition, // 마커의 위치
        image:markerImage,
        map:map
    });
    marker.setMap(map);  
    var customOverlay = new kakao.maps.CustomOverlay({
        position: locPosition,
        content: message   
    });

    // 커스텀 오버레이를 지도에 표시합니다
    customOverlay.setMap(map);

    // 지도 중심좌표를 접속위치로 변경합니다
    map.setCenter(locPosition);      
}

//

</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    var html=new Array();
    $(document).ready(function(){
        $.getJSON('경기도공공도서관현황.json', function(data){
            $.each(data, function(i, item){ //i는 위치값, item은 객체 
                var json=new Object();
                json.name=item.LIBRRY_NM;
                json.time=item.RECSROOM_OPEN_TM_INFO;
                json.latlng=new kakao.maps.LatLng(item.REFINE_WGS84_LAT, item.REFINE_WGS84_LOGT);
                html.push(json);
            });
            for (var i = 0; i < html.length; i ++) {
                displayCustom(i);
            }
            function displayCustom(i){
                var imageSrc = 'img/black_marker.png', // 마커이미지의 주소입니다    
                imageSize = new kakao.maps.Size(25, 25), // 마커이미지의 크기입니다
                imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

                // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
                var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption);
                // 마커를 생성합니다
                var marker = new kakao.maps.Marker({
                    position: html[i].latlng, // 마커의 위치
                    image:markerImage,
                    map:map
                });
                marker.setMap(map);  
                var overlay = new kakao.maps.CustomOverlay({
                    yAnchor:3,
                    position:marker.getPosition()
                });
                var content=document.createElement('div');
                content.className="wrap";
                
                var info=document.createElement('div');
                info.className="info";
                content.appendChild(info);

                var title=document.createElement('div');
                title.className="titlename";
                title.innerHTML=html[i].name;
                info.appendChild(title);

                var closeBtn = document.createElement('button');
                closeBtn.className="close";
                closeBtn.innerHTML = '닫기';
                closeBtn.onclick = function () {
                    overlay.setMap(null);
                };
                title.appendChild(closeBtn);

                var body=document.createElement('div');
                body.className="body";
                info.appendChild(body);

                var desc=document.createElement('div');
                desc.className="desc";
                body.appendChild(desc);

                var time=document.createElement('div');
                time.className="time";
                time.innerHTML=html[i].time;

                desc.appendChild(time);
                
                overlay.setContent(content);

                kakao.maps.event.addListener(marker, 'click', function() {
                    overlay.setMap(map);
                });
                
                // 커스텀 오버레이를 닫기 위해 호출되는 함수입니다 
                function closeOverlay() {
                    overlay.setMap(null);     
                }
            }
        });
    });
</script>
</body>
</html>

	<meta charset="utf-8">

    <style>
	    
	    
    .map_wrap {position:relative;width:750px;height:400px; margin: 0 auto; top: 50px;}
    .title {font-weight:bold;display:block;font-size: 12px;}
    .hAddr {position:absolute;left:10px;top:10px;border-radius: 2px;background:#fff;background:rgba(255,255,255,0.8);z-index:1;padding:5px;}
    #centerAddr {display:block;margin-top:2px;font-weight: normal;}
    .bAddr {padding:5px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;}
    div {
	    font-size: 13px;
    }
    .interface{
	    top: 50px;
	    position: relative;
	    width: 750px;
	    height: auto;
	    margin: 0 auto;
    }
    
</style>	
	



<div class="center">	
	
	<div class="map_wrap">
	<div id="map" style="width:750px;height:400px;"></div>
    <div class="hAddr">
        <span class="title">지도중심기준 행정동 주소정보</span>
        <span id="centerAddr"></span>
    </div>
	</div>
	<div class="interface">
	지도검색 : <input type="text" id="search" onkeypress="if(event.keyCode==13){search(this.value);}">
	

<!--
	<p><em>지도 중심좌표가 변경되면 지도 정보가 표출됩니다</em></p> 
	<p id="result"></p>
-->
	
	<?php
		
		$attributes = array('class' => 'email', 'id' => 'myform' ,'name'=> 'myform');
		echo form_open('http://www.gieok.xyz/index.php/admin/address/funeral',$attributes);
		echo form_hidden('sido','');
		echo form_hidden('sigugun','');
		echo form_hidden('road','');
		echo form_hidden('jibun','');
		
		echo form_hidden('lat','');
		echo form_hidden('lng','');
		
	
		echo '등록될 지명이름: ';
		echo form_input('name','');
		echo form_submit('mysubmit', 'Submit Post!');
		?>
		
	</form>	
	</div>
	
<!-- 	주소 : <input name="도로명주소" id="Address" style="width: 250px;"> <br> -->


	<script src="//apis.daum.net/maps/maps3.js?apikey=dc91ce0e4326424627129fbcb9e29230&libraries=services"></script>
	<script>
		
//	var address = document.getElementById('Address');
		
		var frm = document.myform;
	
		var sido = frm.sido;
		var sigugun = frm.sigugun;
		var road = frm.road;
		var jibun = frm.jibun;
		
		var latitude = frm.lat;
		var longitude = frm.lng;		
		
//		var autoAddress = "";
		// 마커를 담을 배열입니다
		var markers = [];
		
		 infowindow = new daum.maps.InfoWindow({zindex:1});

		
		
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new daum.maps.LatLng(36.610151443829785, 127.66207179905217), // 지도의 중심좌표
        level: 13 // 지도의 확대 레벨
    };

	var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
	
	
	
	
	// 장소 검색 객체를 생성합니다
	var ps = new daum.maps.services.Places(); 
	
	
	// 키워드로 장소를 검색합니다
//	ps.keywordSearch('병원', placesSearchCB); 

	// 키워드 검색 완료 시 호출되는 콜백함수 입니다
	function placesSearchCB (status, data, pagination) {
	    if (status === daum.maps.services.Status.OK) {
	
	        // 검색된 장소 위치를 기준으로 지도 범위를 재설정하기위해
	        // LatLngBounds 객체에 좌표를 추가합니다
	        var bounds = new daum.maps.LatLngBounds();
	
	        for (var i=0; i<data.places.length; i++) {
	            displayMarker(data.places[i]);
	            bounds.extend(new daum.maps.LatLng(data.places[i].latitude, data.places[i].longitude));
	            

	        }       
	
	        // 검색된 장소 위치를 기준으로 지도 범위를 재설정합니다
	        map.setBounds(bounds);
	    } 
	}


	// 지도에 마커를 표시하는 함수입니다
	function displayMarker(place) {
	    
	    // 마커를 생성하고 지도에 표시합니다
	    var marker = new daum.maps.Marker({
	        map: map,
	        position: new daum.maps.LatLng(place.latitude, place.longitude),
	    });
	    
	    
	markers.push(marker);  // 배열에 생성된 마커를 추가합니다


/*

			// 마커 위에 표시할 인포윈도우를 생성한다
		var infowindow = new daum.maps.InfoWindow({
		    content : '<div style="padding:5px;font-size:12px;">' + place.title+ '</div>' // 인포윈도우에 표시할 내용
		});

		// 인포윈도우를 지도에 표시한다
		infowindow.open(map, marker);
*/

	
	    // 마커에 클릭이벤트를 등록합니다




	    daum.maps.event.addListener(marker, 'click', function() {
	        // 마커를 클릭하면 장소명이 인포윈도우에 표출됩니다
	        infowindow.setContent('<div style="padding:5px;font-size:12px;">' + place.title+ '</div>');
	        infowindow.open(map, marker);
	        
	    });



	}


	
		// 주소-좌표 변환 객체를 생성합니다
	var geocoder = new daum.maps.services.Geocoder();

	var marker = new daum.maps.Marker({
	    map: map,
	    position:map.getCenter()
	});
	
	
	
	
	// 지도가 이동, 확대, 축소로 인해 중심좌표가 변경되면 마지막 파라미터로 넘어온 함수를 호출하도록 이벤트를 등록합니다
	daum.maps.event.addListener(map, 'center_changed', function(event) {        
	    
    // 지도의  레벨을 얻어옵니다
    var level = map.getLevel();
    
    // 지도의 중심좌표를 얻어옵니다 
    var latlng = map.getCenter(); 
    
//    var message = '<p>지도 레벨은 ' + level + ' 이고</p>';
//    message += '<p>중심 좌표는 위도 ' + latlng.getLat() + ', 경도 ' + latlng.getLng() + '입니다</p>'; 
    
	latitude.value = latlng.getLat();
	longitude.value = latlng.getLng();
    
    
//    var resultDiv = document.getElementById('result');  
//    resultDiv.innerHTML = message;
    
    marker.setPosition(latlng);
    
    
      searchDetailAddrFromCoords(latlng, function(status, result) {
        if (status === daum.maps.services.Status.OK) {
            var detailAddr = !!result[0].roadAddress.name ? '<div>도로명주소 : ' + result[0].roadAddress.name + '</div>' : '';
            detailAddr += '<div>지번 주소 : ' + result[0].jibunAddress.name + '</div>';
            
            var content = '<div class="bAddr">' +
                            '<span class="title">법정동 주소정보</span>' + 
                            detailAddr + 
                        '</div>';
                        
/*
        if(!result[0].roadAddress.name){
	        autoAddress = result[0].jibunAddress.name.getAddress();
        }else{                                
			autoAddress =  result[0].roadAddress.name.getAddress()
			+ '/('+ result[0].jibunAddress.name.getAddress() +')';
   		}
*/

		
		
   		road.value = result[0].roadAddress.name.getAddress();
   		jibun.value = result[0].jibunAddress.name.getAddress();
  		
  		
  			 
/*
            // 마커를 클릭한 위치에 표시합니다 
            marker.setPosition(mouseEvent.latLng);
            marker.setMap(map);
*/

            // 인포윈도우에 클릭한 위치에 대한 법정동 상세 주소정보를 표시합니다
            infowindow.setContent(content);
            infowindow.open(map, marker);
        }   
    });
    
    
    
    
    
});


	// 현재 지도 중심좌표로 주소를 검색해서 지도 좌측 상단에 표시합니다
	searchAddrFromCoords(map.getCenter(), displayCenterInfo);


	// 중심 좌표나 확대 수준이 변경됐을 때 지도 중심 좌표에 대한 주소 정보를 표시하도록 이벤트를 등록합니다
	daum.maps.event.addListener(map, 'idle', function() {
	searchAddrFromCoords(map.getCenter(), displayCenterInfo);
	});

	function searchAddrFromCoords(coords, callback) {
    // 좌표로 행정동 주소 정보를 요청합니다
    geocoder.coord2addr(coords, callback);         
	}
	
	function searchDetailAddrFromCoords(coords, callback) {
    // 좌표로 법정동 상세 주소 정보를 요청합니다
    geocoder.coord2detailaddr(coords, callback);
	}
	
	
	// 지도 좌측상단에 지도 중심좌표에 대한 주소정보를 표출하는 함수입니다
	function displayCenterInfo(status, result) {
    if (status === daum.maps.services.Status.OK) {
        var infoDiv = document.getElementById('centerAddr');
        infoDiv.innerHTML = result[0].fullName;
        
        var temp = result[0].fullName.split(' ');
 //       sidogu = temp[0] + '/' + temp[1] + ' ';
        
 //       address.value = sidogu + autoAddress;
 
 		sido.value = temp[0];    
 
 		
 		if(temp[1] == ''){ 
	 		sigugun.value = temp[2];   // 시, 구가 없고 군만 있을때
	 		road.value = road.value.replace(temp[2]+' ','');  // 군 제거
	 		jibun.value = jibun.value.replace(temp[2]+' ', '');  // 군 제거
 		}else if(temp.length > 3){
	 		sigugun.value = temp[1] + ' ' + temp[2];  // 시 , 구 모두 존재할때
	 		road.value = road.value.replace(temp[2]+' ', ''); // 구 제거
	 		jibun.value = jibun.value.replace(temp[2]+' ', '');  // 구 제거
	 		
 		}else{
	 		sigugun.value = temp[1];    // 시만 존재
 		}
 	
 	
 	
 		var rm = '';  // 도로명과 지번주소의 중복 (oo면, oo읍) 제거
 		rm1 = road.value.split(' ');
 		rm2 = jibun.value.split(' ');
 		
 		if(rm1[0] == rm2[0]) 		
 		jibun.value = jibun.value.replace(rm1[0]+ ' ' , '');
 		
 		
    }    
	}
	
	
	// 주소를 받서 시도 및 구군을 제거하여 리턴
	String.prototype.getAddress = function () {
	var temp = this.split(' ');
	var address = '';
	for(var i=2; i < temp.length; i++){
		address += temp[i] + ' ';
	}
	address = address.substring(0, address.length-1);
		return address;
	};
	
	
	function search(value){
	    // 지도에 표시되고 있는 마커를 제거합니다
		
		if(markers.length > 0)
		removeMarker();
		
		ps.keywordSearch(value, placesSearchCB); 


	};
	
	
	// 지도 위에 표시되고 있는 마커를 모두 제거합니다
	function removeMarker() {
	    for ( var i = 0; i < markers.length; i++ ) {
	        markers[i].setMap(null);
	    }   
	    markers = [];
	}
	
	
	
		// 지도에 확대 축소 컨트롤을 생성한다
	var zoomControl = new daum.maps.ZoomControl();

	// 지도의 우측에 확대 축소 컨트롤을 추가한다
	map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);

	</script>
</div>


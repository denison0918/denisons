<?php
	
/*
		$mAgent = array("iPhone","iPod","Android","Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony" );
		$chkMobile = false;
		for($i=0; $i<sizeof($mAgent); $i++){
		    if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
		        $chkMobile = true;
		        break;
		    }
		}
		
		if($chkMobile) {
			//모바일
		   header('Location: https://m.cardam.co.kr');
		} else if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http'){
			
			header('Location: https://m.cardam.co.kr');
		  
		}
*/

	?>

<html>
	<head>
		<meta charset="utf-8">
		<style>
		@font-face {
			font-family:'SF Pro KR';
			font-style:normal;
			font-weight:300;
			src:local('☺︎'), url("https://fonts.cardam.co.kr/SFProKR_light.woff") format("woff");
		}
		@font-face {
			font-family: 'SF Pro KR';
			font-style: normal;
			font-weight: 400;
 			src:local('☺︎'), url('https://fonts.cardam.co.kr/SFProKR_regular.woff') format("woff"); 
		}
		@font-face {
			font-family:'SF Pro KR';
			font-style:normal;
			font-weight:500;
			src:local('☺︎'), url("https://fonts.cardam.co.kr/SFProKR_medium.woff") format("woff");
		}
		
		@font-face {
			font-family:'SF Pro KR';
			font-style:normal;
			font-weight:600;
			src:local('☺︎'), url("https://fonts.cardam.co.kr/SFProKR_semibold.woff") format("woff");
		}
		
		@font-face {
			font-family: 'SF Pro Display';
			font-style: normal;
			font-weight: 300;
 			src:local('☺︎'), url('https://fonts.cardam.co.kr/sf-pro-display_light.woff') format("woff"); 
		}@font-face {
			font-family: 'SF Pro Display';
			font-style: normal;
			font-weight: 400;
 			src:local('☺︎'), url('https://fonts.cardam.co.kr/sf-pro-display_regular.woff') format("woff"); 
		}
		@font-face {
			font-family: 'SF Pro Display';
			font-style: normal;
			font-weight: 500;
 			src:local('☺︎'), url('https://fonts.cardam.co.kr/sf-pro-display_medium.woff') format("woff"); 
		}
		
		
		li{list-style: none};
		html, body, main, div, nav, ul, a, h1, p, span{margin: 0;padding: 0;border: 0;}
		body,p, div, ul, a, h1, h2,  span, main, html{margin: 0;padding: 0;color: #000;-webkit-font-smoothing: antialiased}
/* 		html, body, main, div, nav, ul, a, span{font-family: 'SF Pro KR', 'SF Pro Display', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif !important ;} */
/* 		h1, p, span, label, input, h4{font-family: 'SF Pro KR', 'SF Pro Display', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif !important ; text-rendering: optimizelegibility;  -webkit-font-smoothing: antialiased; color: #484848;font-weight: 200;text-shadow: 1px 1px 1px rgba(0,0,0,0.004);text-stroke: 0.6px;} */
		
		html, body, main, div, nav, ul, a, span{font-family: "Malgun Gothic","Dotum", "Gulim", "Roboto", "Arial", sans-serif !important ;}
		h1, p, span, label, input, h4{font-family: "Malgun Gothic","Dotum", "Gulim", "Roboto", "Arial", sans-serif !important ; text-rendering: optimizelegibility;  -webkit-font-smoothing: antialiased; color: #484848;font-weight: 200;text-shadow: 1px 1px 1px rgba(0,0,0,0.004);text-stroke: 0.6px;}
		
		
		h1{margin: 0;}
		
		a{text-decoration: none; color: white;}
		main {height: auto;background-color: #fbfbfb}
		nav{height: 60px;background-color: white; position: fixed;width: 100%;z-index: 5000;max-width: 1460px;min-width: 760px}
		.wrapper {max-width: 1460px;margin: 0 auto;background-color: #fff;min-width: 1334px;box-shadow: 0px 1px 1px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
		.wrapper header{ height: 60px; width: 100%;}	
		.wrapper header .logo{	width: 89px; height: 50px;background-image: url('https://img.cardam.co.kr/Content/common/cardam_logo.png');background-size: 54px 30px;background-repeat: no-repeat;background-position: center center; margin-top: 5px;}

		.wrapper header ul .BKLIST{height: 34px;animation-duration: 1s infinite;animation-name: slidein;white-space:nowrap;}
		.wrapper header ul .BKLIST span{color: #555; font-weight: bolder}
		
		
@keyframes slidein {
  from {
    margin-top: 0%;
    height: 100%
  }

  to {
    margin-top: 100%;
    height: 100%;
  }
}
		
		.gutter .sub-wrapper .db-wrapper{
			width: 336px;height: 620px;margin: 44px 100px 32px 0;border-top: 8px solid rgba(199, 229, 249, 0.34) !important;border-bottom: 8px solid rgba(199, 229, 249, 0.34) !important;background-color:rgba(227, 244, 255, 0.34);padding: 32px; }
		.gutter .sub-wrapper .db-wrapper .background-line{width:100%}
										 .background-line span {position:relative;overflow:hidden;z-index: 1;text-align: center;display: block;font-weight: 300;font-size: 12pt;line-height: 2.9;margin: 0 12px;}
										 .background-line span:before, .background-line span:after {top: 50%;overflow:hidden;height: 1px;content: "\a0";background-color:#a2a2a2;position: absolute;width:50%;}
										 .background-line span:before {left:-6%;text-align: right;}
										 .background-line span:after {left:56%;}
		
/*			
				
		.gutter .sub-wrapper .db-wrapper .background-line:before{    border-top: 1px solid #E5E5E4;
    content: '';
    display: table-cell;
    position: relative;
    top: 1em;
    width: 48%;
    }
		.gutter .sub-wrapper .db-wrapper .background-line:after{    border-top: 1px solid #E5E5E4;
    content: '';
    display: table-cell;
    position: relative;
    top: 1em;
    width: 48%;
}
*/

		.text-input{
			padding: 10px;
			border-radius: 0;
			border: 2px solid transparent;
			margin: 0;
			width: 100%;
			border: 1px solid #E5E5E4;
			font-size: 10.5pt;
	height: 52px;width: 100%;-webkit-appearance: none;
		}
		.push-tiny--bottom{
			margin-bottom: 12px !important;
		}
		

		</style>
		<style>	
			
		.book{
		width: 100%;
		
		top: 0;
		opacity: 1;
		display: none;
	}
	.book-header{
		height: auto;
		background-color: #fff;
		text-align: right;
		padding: 16px 24px;
	}
	
	.book-header .book-close{
		font-size: 32px;
		font-weight: lighter;
		color: #484848;
		vertical-align: middle;
	}
	.book-header .book-close span{
		  font-family: Circular, "Helvetica Neue", Helvetica, Arial, sans-serif;
		  
	}
	.book-body{
		height: 355px;
/* 		padding: 0 24px 24px; */
	}
	
	.book-body ul li {
		font-family: "나눔 고딕", "Naum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", "Dotum", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		width: 100%;
		margin-top: 14px;
	
	}
	.book-body ul li:first-child {
		margin-top: 0px;
	
	}
	.book-body ul li .BOOKLB{
		
		line-height: normal;
		font-size: 14px;
		padding: 4px 0;
		position: relative;
	}
	.book-body ul li .BOOKINPUT{
		line-height: normal;
		font-size: 18px;
		display: block;
		padding: 10px 0;
		width: 100%;
		outline: none;
		border-width: 0 0 1px;
		border-radius: 2px;
		-webkit-appearance: none;
		border-bottom: 1px solid #dce0e0;
		transition: border-bottom-color 0.2s;
		-webkit-transform: border-bottom-color: 0.2s;
		-o-transition: border-bottom-color: 0.2s;
		-moz-transition: border-bottom-color: 0.2s;
		background-color: transparent;
	}
	.book-body ul li input[type="text"]:focus, .book-body ul li input[type="tel"]:focus{
		border-bottom-color: #6aa3f2;
		background-color: transparent;
	}
	
	.book-body .book-options{
	
	padding-top: 5px;
		
	}
	
	.book-body .book-submit{
		margin-top: 22px;
		height: 41px;
		width: 100%;
		border-radius: 5px;
		color: white;
		padding: 9px 0;
		background-color: #3c79a5;
		font-size: 15px;
	}

	.book-body .book-option1{
		margin-top: 16px;
		height: 41px;
		float: left;
		width: 44%;
		border-radius: 5px;
		color: white;
		padding: 9px 0;
		background-color: #3c79a5;
		
	}
	
	.book-body .book-option2{
		margin-top: 16px;
		height: 41px;
		float: right;
		width: 52%;
		border-radius: 5px;
		color: white;
		padding: 9px 0;
		background-color: #687bea;
		
	}	
	
	.book-body .book-options span{
		font-size: 21px;
		color: rgba(0, 0, 0, 0.7);
		height: 34px;
		line-height: 25px;
	}
	
	
	.book-body .book-options .switch {
	  position: relative;
	  display: inline-block;
	  width: 60px;
	  height: 28px;
	  padding: 0px;
	  float: right;
	}

	.book-body .book-options .switch input {display:none;}
	
	.book-body .book-options .slider {
	  position: absolute;
	  cursor: pointer;
	  top: -2px;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background-color: #ccc;
	  -webkit-transition: .4s;
	  transition: .4s;
	}
	
	.book-body .book-options .slider:before {
	  position: absolute;
	  content: "";
	  height: 20px;
	  width: 22px;
	  left: 5px;
	  bottom: 4px;
	  background-color: white;
	  -webkit-transition: .4s;
	  transition: .4s;
	  top: 5px;
	}
	
	.book-body .book-options input[type="checkbox"]:checked + .slider {
	  background-color: #2196F3;
	}
	
	.book-body .book-options input[type="checkbox"]:focus + .slider {
	  box-shadow: 0 0 1px #2196F3;
	}
	
	.book-body .book-options input[type="checkbox"]:checked + .slider:before {
	  -webkit-transform: translateX(28px);
	  -ms-transform: translateX(28px);
	  -o-transition: translateX(28px);
	  transform: translateX(28px);
	}

	/* Rounded sliders */
	.book-body .book-options .slider.round {
	  border-radius: 30px;
	}
	
	.book-body .book-options .slider.round:before {
	  border-radius: 50%;
	}
	
	
	.link-box{color: #FFFFFF !important;
		font-family: ff-clan-web-pro, "Helvetica Neue", Helvetica, sans-serif !important;
		font-weight: 600 !important;
		font-size: 12px !important;
		text-decoration: none !important;
		padding: 11px 20px !important;
		border-radius: 0px !important;
		border: 2px solid #11939A !important;
		text-transform: uppercase !important;
		outline: none !important;
		line-height: 18px !important;
		position: relative !important;
		display: inline-block !important;
		vertical-align: middle !important;
		text-align: center !important;
		margin: 0 !important;
		cursor: pointer !important;
		overflow: visible !important;
		background-color: #3c79a5 !important;
		border-color: #3c79a5 !important;
		margin-top: 0px !important;
		margin-left: 30px !important;
		}

.btn{
	font-weight: 600;
	padding: 11px 20px;
	border-radius: 0;
	border: 2px solid #0D696C;
	outline: 0;
	position: relative
}

.style_h2{font-weight: 400 ;font-size: 35px ;letter-spacing: -.02em ;line-height: 1.22222 ;margin-bottom: 24px }
.style_p{font-weight: 200;color: #494949;font-size: 23px;letter-spacing: -.02em;line-height: 1;margin-bottom: 12px}
	

.HYCFLSH2{color: #548c8c; letter-spacing: 0.02em; font-weight: 600;font-size: 31px;}

HYCFLSP{ font-size: 26px;}
	
	.swiper-container {
        width: 100%;
        height: 300px;
        margin: 20px auto;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        width: 60%;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-slide:nth-child(2n) {
        width: 40%;
    }
    .swiper-slide:nth-child(3n) {
        width: 20%;
    }
    
    .review_p{
		line-height: 1.75;
		font-weight: 400;
		text-align: left;
		margin-bottom: 16px;
		font-size: 12px;
		color: #000;
    }
    
    ._style_process:after{
	    z-index: 10 !important;
		position: absolute !important;
		content: '' !important;
		height: 2px !important;
		background-color: #D6D6D5 !important;
		top: 14px !important;
		width: 66% !important;
		left: 30px !important;
		box-sizing: border-box;
    }
    
    ._style_process_steps{
	    border-width: 2px;
	    border-color: #D6D6D5;
	    border-style: solid;
	    border-radius: 50%;
	    color: #C0C0C0;
	    height: 28px;
	    line-height: 28px;
	    position: relative;
	    text-align: center;
	    top: -2px;
	    width: 28px;
	    z-index: 20;
	    background-color: #f8f8f9;
	    display: inline-block;
    }
    
    .style_steps_h4{
	    font-weight: 400;font-size: 24px;margin-bottom: 16px;font-family: "Helvetica Neue", Helvetica, sans-serif !important;color: #000;
    }
    
    .style_steps_p{
	    margin-bottom: 16px;font-size: 14px;line-height: 1.71429;font-weight: 400;color: #000;
    }
    
    .PROCESS-BOX{width:30.2%;margin-bottom: 56px;padding-left: 30px;display: inline-block;}
    
    .PCSBOXP{font-size: 9pt;font-weight: 400;line-height: 1.71429}  
    .PCSBOXH4{margin-bottom: 16px;font-size: 16pt;font-weight: 600}  
    
    .LEGAL-DISCLAIMER{line-height: 1.6; font-size: 10.5px;}
    
    .SUBTITLE{font-size: 20pt;}
    
    .KAKAOH4{width: 266px; line-height: 0px; font-size: 20px; font-weight: 200; margin-left: 20px; float: left;}
    
    .KAKAOLB{font-size: 13pt;font-weight: 600;} 
    
    FOOTER ul {color: #fff;font-size: 12px;line-height: 1.7}

    /* only IE 9+ */
    @media screen and (min-width:0\0) and (min-resolution: +72dpi) {
	    
	    
	html, body, main, div, nav, ul, a, span{font-family: 'SF Pro KR', 'SF Pro Display', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif !important ;}

	html, body, main, div, nav, ul, a, span, p, h1, h2, h3, h4{font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif !important;}
/* 	html, body, main, div, nav, ul, a, span{font-family: Courier, Monaco, monospace !important;} */
/* 	html, body, main, div, nav, ul, a, span{font-family: 'Comic Sans MS', cursive !important ;} */
/* 	html, body, main, div, nav, ul, a, span{font-family: 'Copperplate Gothic', Impact, fantasy !important ;} */
	
	
/* 	h1, p, span, label, input, h4{font-family: 'SF Pro KR', 'SF Pro Display', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif !important; text-rendering: optimizelegibility;  -webkit-font-smoothing: antialiased; color: #484848;font-weight: lighter;} */

	h1, p, span, label, input, h4{font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif !important; text-rendering: optimizelegibility;  -webkit-font-smoothing: antialiased;font-weight: lighter;}
	
/* 	font-size: 14px; font-family:'Malgun Gothic','Dotum', 'Gulim', 'Roboto', 'Arial', sans-serif; color:#333; letter-spacing:-0.75px; */
/* 	h1, p, span, label, input, h4{font-family: Courier, Monaco, monospace, sans-serif !important; text-rendering: optimizelegibility;  -webkit-font-smoothing: antialiased; color:#000;font-weight: normal;letter-spacing: -1.6} */
/* 	h1, p, span, label, input, h4{font-family: 'Comic Sans MS', cursive !important; text-rendering: optimizelegibility;  -webkit-font-smoothing: antialiased; color: #484848;font-weight: lighter;} */
/* 	h1, p, span, label, input, h4{font-family: 'Copperplate Gothic', Impact, fantasy !important; text-rendering: optimizelegibility;  -webkit-font-smoothing: antialiased; color: #484848;font-weight: lighter;} */	
	
	h1{margin: 0;}
  
  
	body{background-color: #fbfbfb}
	
	
	
	.background-line span {font-size: 9.5pt;font-weight: 400}
	
	.book-body ul li .BOOKLB {font-size: 12.5px;font-weight: 400}
	
	.book-body ul li .BOOKINPUT{font-size: 16px;color:#6b6b6b;padding: 12px 0;}
	
	.book-body .book-options span{font-size: 18px;font-weight: 400}
	
	.style_h2{font-size: 28px !important}
	
	.style_p{font-size: 21px !important}
	
	_style_process_steps{font-size: 14.5px;}
	
	.style_steps_h4{font-size: 21.5px;}
	
	.style_steps_p{font-size: 13px;color: #555}
	
	.HYCFLSH2{color: #548c8c; font-size: 28.5px;font-weight: 600}
	
	.HYCFLSP{letter-spacing: -0.02em;font-weight: 400;font-size: 21px !important;line-height: 1.8;color: #454545}
	
	.review_p{letter-spacing: -0.03em;font-size: 12px;line-height: 1.65;color: #555;}
	
	.PROCESS-BOX{position: relative;top:0px}
	
	.PCSBOXP{font-size: 13px;color:#555;font-weight: 500;line-height: 1.65; letter-spacing: -0.07em;}

	.LEGAL-DISCLAIMER{line-height: 1.7; font-size: 10.8px;font-weight: 400;color: #444;}
	
	.SUBTITLE{font-size: 17.5pt;font-weight: 400}
	
	.KAKAOH4{font-size: 19px}
	
	.KAKAOLB{font-size: 12pt} 
	 
  }
    
/* Safari 10.1+ */

@media not all and (min-resolution:.001dpcm) and (-webkit-min-device-pixel-ratio:0) and (min-color-index:0)  { @media {

   .book-body ul li .BOOKLB {font-size: 16.5px;font-weight: 300}
   .PCSBOXP{font-size: 11pt;line-height: 1.6;}
   .PCSBOXH4{margin-bottom: 16px;font-size: 18pt;font-weight: 600}  
  
   .LEGAL-DISCLAIMER{font-size: 11.5px}
}
	.review_p{
		line-height: 1.45429;
		font-size: 10.5pt;
		font-weight: 300;
	}
	
	
}
	
	</style>
	
	    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://plug.cardam.co.kr/swiper/css/swiper.min.css">
    
    
    
    <script>
	    function submitChk(){
		    var form = document.frm;
		     
		     if(form.model.value.trim() == ""){
			     alert("차량정보를 입력해주세요!");
		     }else if(form.location.value.trim() == ""){
			     alert("주소정보를 입력해주세요!");
		     }else if(form.phone.value.trim().length < 1){
			     alert("핸드폰 정보를 입력해주세요!");
		     }else if(form.phone.value.trim().length > 1 && form.phone.value.trim().length < 9){
			     alert("핸드폰 정보를 정확히 입력해주세요!");
		     }else{
			     form.submit();
			     alert("상담신청이 되었습니다!");
		     }
	    }
	    
	function geoFindMe() {
 // var output = document.getElementById("out");

  if (!navigator.geolocation){
//    output.innerHTML = "<p>사용자의 브라우저는 지오로케이션을 지원하지 않습니다.</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;
    
    initMap(latitude,longitude);

/*
    output.innerHTML = '<p>위도 : ' + latitude + '° <br>경도 : ' + longitude + '°</p>';

    var img = new Image();
    img.src = "http://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";

    output.appendChild(img);
*/
  };

  function error() {
   // output.innerHTML = "사용자의 위치를 찾을 수 없습니다.";
  };

//  output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}

      function initMap(latitude,longitude) {

        var geocoder = new google.maps.Geocoder;
        
        var input = latitude+","+longitude;
        var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        
    
		
		 geocoder.geocode({'location': latlng}, function(results, status) {
			 var n = 0;
			 
/*
			while(n < results.length){
				console.log(n);
				console.log(results[n].formatted_address.slice(5));
				n++;
			}
*/
			
			document.getElementById('location').innerHTML = (results[8].formatted_address.slice(5)).split(" ")[0];
		//	 console.log(results[0].formatted_address);
          if (status === 'OK') {
            if (results[1]) {
           //  alert(results[1].formatted_address);

            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });		
       
      }
      
	  


	var infiniteScrollDown = function(books){
		var self = books, kids = self.children;
		
		setInterval(function(){
			self.appendChild(kids[0]);
		//	console.log(self);			
		}, 2800)

		
	}
      

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEFmlKxL-20QTEdk8rQNwbDjIWUtYGbWQ&callback=geoFindMe">
    </script>
	</head>
	
	<body>
<!-- <p><button onclick="geoFindMe()">현 위치</button></p> -->
<!-- <div id="out"></div> -->
		
		<main>
			<div class="wrapper">
					
		
				<header style="overflow-x: hidden">
					<nav>
						<div style="float: left"></div>
						<a href="/" class="logo" style="display: inline-block"></a>
						
						
						
						<div style="float: right;display: inline-block;">
							<svg  id="Capa_1" x="0px" y="0px" viewBox="0 0 486.736 486.736" style="float: left;padding: 21px 15px 0 0" xml:space="preserve" width="20px" height="20px"><path d="M481.883,61.238l-474.3,171.4c-8.8,3.2-10.3,15-2.6,20.2l70.9,48.4l321.8-169.7l-272.4,203.4v82.4c0,5.6,6.3,9,11,5.9   l60-39.8l59.1,40.3c5.4,3.7,12.8,2.1,16.3-3.5l214.5-353.7C487.983,63.638,485.083,60.038,481.883,61.238z" fill="#3c79a5"/>
							<ul id="BKLISTS" style="display: inline-block;height: 34px;overflow: hidden;float: left;padding: 22.5px 15px 0 0; max-width: 400px;">
									<li class="BKLIST"><span>기아 2013년 K5 판매상담 부탁드립니다.</span></li>
									<li class="BKLIST"><span>k5 상담을 요청합니다.</span></li>
									<li class="BKLIST"><span>벤츠 빠른 상담을 요청합니다.</span></li>
									<li class="BKLIST"><span>기아 2014년 올 뉴 모닝 상담을 요청합니다.</span></li>
									<li class="BKLIST"><span>GM대우 2010년 라세티 프리미어 판매하고있습니다. 연락주세요.</span></li>
								</ul>
							<script>
								var books = document.getElementById('BKLISTS');
								  infiniteScrollDown(books);
						 	</script>	
								
							<div style="float: right;display: inline-block;margin: 15px 15px 0 0;">
								<div style="display: inline-block;height: 34px;">
									<span style="margin: 0 12px 0 0">
										<svg viewBox="0 0 64 64" width="20px" height="20px" style="position: relative;top: 6px;color: #3c79a5 !important;fill: currentColor !important;"><path d="M32.0000114,4c-11.0449219,0-20,8.8027344-20,20c0,6.0996094,2,11.03125,6,16.9375l13.1807709,18.6359062 C31.3796368,59.8575249,31.6893368,59.9997215,31.9991455,60c0.3104134,0.0002785,0.6209373-0.141922,0.820179-0.4265938 L46.0000114,40.9375c4-5.90625,6-10.8378906,6-16.9375C52.0000114,12.8027344,43.0449333,4,32.0000114,4z M32.0000114,36.25 c-6.7655029,0-12.25-5.484375-12.25-12.25s5.4844971-12.25,12.25-12.25s12.25,5.484375,12.25,12.25 S38.7655144,36.25,32.0000114,36.25z"></path>
										</svg>
										<span id="location" style="position: relative;top: 2px;margin-left: 3px;"></span>
									</span>
								</div>
								<a href="/" style="font-size: .75714rem;background-color: #3c79a5 !important;padding:10px 20px;line-height: 2.375;font-weight: 400"> 카담 파트너 신청하기</a>

							</div>
						</div>
					</nav>
				</header>
				
				<div class="gutter">
					<div class="sub-wrapper" style="margin-bottom: 50px;">
						<div>
							<div style="float: right;">										
								<div class="db-wrapper">
									<div style="height: 50px;width: 100%">
										<div style="background-image: url('https://img.cardam.co.kr/Content/common/kakao-icon.png'); width: 50px;height: 50px;background-size: cover;float:left"></div>
										<h4 class="KAKAOH4">카카오톡 판매상담</h4>
										<div style="float: left;text-indent: 72px;margin-bottom:7px;"><label class="KAKAOLB">@카담</label></div>
									</div>
									<div class="background-line" style="display: table;white-space: nowrap;clear: both;">
										
										<span>또는</span>
										
								
									</div>
									<div style="position: relative; height: 50px; margin-bottom: 20px;margin-top:10px;">
										<div style="background-image: url('https://img.cardam.co.kr/Content/common/cell-icon.png'); width: 50px;height: 50px;background-size: cover;float:left"></div>
										<h4 style="float: left;margin-left: 20px;font-weight: 200;font-size: 20px;line-height: 0px">간편 판매상담</h4>
									</div>
<!--
									<div class="layer-db-items" style="width: 100%;">
										<div>
											<div>
												<input style="border-bottom: 0px;" class="text-input"  type="text" placeholder="차종">
											</div>
										</div>
										<div class="push-tiny--bottom">
											<div>
												<input style="height: 52px;width: 100%;-webkit-appearance: none;" class="text-input"  type="text" placeholder="연식">
											</div>
										</div>
										<div>
											<div>
												<input style="height: 52px;width: 100%;-webkit-appearance: none;" class="text-input"  type="text" placeholder="이름">
											</div>
										</div>
										<div>
											<div>
												<input style="height: 52px;width: 100%;-webkit-appearance: none;border-top: 0;border-bottom: 0;" class="text-input"  type="text" placeholder="연락처">
											</div>
										</div>
										<div>
											<div>
												<input style="height: 52px;width: 100%;-webkit-appearance: none;" class="text-input"  type="text" placeholder="도시">
											</div>
										</div>
										<div></div>
									</div>
-->
									<div class="book" style="display: block;">
<!--
									<div class="book-header">
										<a class="book-close">
											<span>×</span>		
										</a>
									</div>
-->
									<div class="book-body">
										<ul style="padding: 0;">
											<form action="/car_purchase" method="POST" name="frm">	
											<li>
											<label for="book-car" class="BOOKLB">차량</label>
											<input type="text" class="BOOKINPUT" name="model" placeholder="제조사, 차종, 연식" autocomplete="off">
											</li>
											<li>
											<label for="book-location" class="BOOKLB">위치</label>
											<input type="text" class="BOOKINPUT" name="location" placeholder="도시명, 간단주소" autocomplete="off" id="location">
											</li>
											<li>
											<label for="book-contact" class="BOOKLB">연락처</label>
											<input type="tel" class="BOOKINPUT" name="phone" placeholder="-제외하고 입력" autocomplete="off">
											</li>
											<li>		
												<div class="book-options">
													<span>내차팔면서 구입도 진행</span>
													<label class="switch">
													  <input type="checkbox" name="buy" value="1">
													  <div class="slider round"></div>
													</label>	
												</div>
											</li>
											<li>
											<input type="hidden" name="incoming" value="<?php if(isset($incoming)) echo $incoming?>">
											<input type="button" class="book-submit" onclick="javascript:submitChk();" value="상담신청 해보기">
											
									<!-- 		<input type="button" class="book-option1" value="판매만"> -->		
									<!-- 		<input type="button" class="book-option2" value="판매하면서 구입"> -->
											</li>
										
										</form></ul>
										
									</div>
									</div>
									
									<div class="layout__item one-whole">
<!--
										<div class="push-tiny--bottom">또는 승객 계정으로<a href="https://partners.uber.com/login/upgrade?lite=1"> 로그인하세요.</a>
										</div>
-->
											<p class="LEGAL-DISCLAIMER" >계속 진행함으로써 본인은 카담 또는 카담 직원이 마케팅 목적 등을 이유로 본인이 제공한 차량정보나 전화번호로 이메일, 전화, SMS(자동 전화 접속 시스템 포함) 등의 방법을 통해 본인에게 연락할 수 있다는 데 동의합니다.<!--  <a href="/legal/privacy/drivers-us/"> 드라이버 파트너 개인정보 취급방침</a>과 관련된 내용을 모두 읽고 이해했습니다. --></p>
										</div>
								</div>
							</div>
							<div >
								<div style="padding: 44px 0;margin: 0 auto;display: inline-block;margin-left: 15%;">
									<h1 style="font-weight: 600;height: 47px;margin:0.67em;margin-left: 0;">내차판매</h1>
									<p class="SUBTITLE">타시던 차 그대로 수리없이 판매하세요.</p>
								</div>
								
								
								<div style="padding-right: 500px;">
									<div style="width: 100%;height: 450px;background-repeat: no-repeat;background-image: url('https://img.cardam.co.kr/Content/desktop/driving.jpg'); background-size: cover;background-position: center center">
 									<div style="display: inline-block; width: 100px; height: 450px;float: right;position: relative;right: -500px; background-color: #e2e2e2;overflow: hidden">
	 									<svg style="height: 100%">
										    <defs>
										        <pattern id="a___-984561322" width="60" height="60" patternUnits="userSpaceOnUse">
										            <path class="pattern-stroke" d="M25 60V0m10 60V0M0 25h60M0 35h60M35 15h25M45 25V0M15 0v25m10-10H0m15 20v25m10-15H0m35 0h25M45 35v25m0-5h15m-5-10v15m0-60v15m5-10H45M0 5h15M5 0v15m0 30v15m-5-5h15" style="stroke: #565355 !important;
										stroke-width: 1.25;
										fill: none;"></path>
										        </pattern>
										    </defs>
										    <rect fill="url(#a___-984561322)" height="100%" width="100px"></rect>
										</svg>
 									</div>	
								</div>
									
								</div>
							</div>
						</div>
					</div>
					
					<div style="width: 100%;height: auto">
						<div>
							<div class="" style="padding-right: 100px !important;padding-left: 100px !important;">
								<div style="padding-top: 80px !important;padding-right: 35px !important;padding-bottom: 80px !important;padding-left: 75px !important;">
									<div style="height: 343;width: 100%;min-width: 1060px;">
										<div class="PROCESS-BOX">
											<div style="height: 287px;">
												<div style="width: 100%;margin-bottom: 24px;">
													<div style="background-image: url('https://img.cardam.co.kr/Content/desktop/trans.png');width: 100%;height: 135px;background-size: contain;background-repeat: no-repeat;"></div>
												</div>
												<div>
													<h4 class="PCSBOXH4" >판매와 구입을 한번에</h4>
													<div style="width: 305px">
														<p class="PCSBOXP">차량판매와 구매를 따로하지 않고 한번에 진행하여 더욱 저렴하게 새로운차로 교체할 수 있습니다. 인터넷에서 미리 봐둔 차량을도 상관없습니다.<br>&nbsp; </p>
													</div>
												</div>
											</div>
										</div>
										<div class="PROCESS-BOX">
											<div style="height: 287px;">
												<div style="width: 100%;margin-bottom: 24px;">
													<div style="background-image: url('https://img.cardam.co.kr/Content/desktop/sell-option.png');width: 100%;height: 135px;background-size: contain;background-repeat: no-repeat;position: relative;top: 7px;"></div>
												</div>
												<div>
													<h4 class="PCSBOXH4">내차옵션 확인하기</h4>
													<div style="width: 305px">
														<p class="PCSBOXP">자신의 차량에 대해 잘 알고계신가요? 상담 시 여러가지 추가 옵션 및 연식을 미리 말씀해주세요. 등급부터 색상까지 모두 가격에 반영될 수 있습니다.<br>&nbsp; </p>
													</div>
												</div>
											</div>
										</div>
										<div class="PROCESS-BOX">
											<div style="height: 287px;">
												<div style="width: 100%;margin-bottom: 24px;">
													<div style="background-image: url('https://img.cardam.co.kr/Content/desktop/carguy.png');width: 100%;height: 135px;background-size: contain;background-repeat: no-repeat;"></div>
												</div>
												<div>
													<h4 class="PCSBOXH4">편리한 방문견적</h4>
													<div style="width: 305px">
														<p class="PCSBOXP">상담 시 연락처 및 주소를 통해 바로 현장방문 예약을 도와드립니다. 현장에서 차량을 정확히 파악하고 상담부터 판매 및 구입까지 진행하실 수 있습니다.<br>&nbsp; </p>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									<a class="link-box">카담의 견적 포인트<span style="margin-left: 32px !important;display: inline-block !important;margin-top: -10px !important;position: relative;top: 5px;"><svg viewBox="0 0 64 64" width="20px" height="20px" style="fill:white"><path fill-rule="evenodd" clip-rule="evenodd" d="M59.9270592,31.9847012L60,32.061058L43.7665291,49.1333275l-3.2469215-3.5932007 L51.3236885,34H4v-4h47.3943481L40.5196075,18.4069672l3.2469215-3.4938126L60,31.946312L59.9270592,31.9847012z"></path></svg></span></a>
								</div>
							</div>
							<div class="" style="height: 432px;background-color: #f8f8f9 !important;padding-left:145px;padding-right: 145px;">
								<div style="padding-top: 80px;padding-right: 103px;padding-bottom: 64px;padding-left: 55px;min-width: 1124px;">
									<div>
										<p class="style_p">판매 절차</p>
										<h2 class="style_h2">내차 팔기 하루면 충분합니다.</h2>
									</div>
									<div>
										<div class="" style="width: 100%;position: relative;">
											<div class="_style_process" style="width: 33%;display: inline-block;">
												<div style="padding-right: 36px;">
													<div style="width: 100%;margin-bottom: 12px;">
														<div class="_style_process_steps">1</div>
													</div>
													<div>
														<h4 class="style_steps_h4">파트너와 가격상담</h4>
														<div>
															<p class="style_steps_p">카담의 전문 파트너와 문의차량의 시세를 확인하고 판매절차를 위한 상담을 진행합니다 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp; </p>
														</div>
													</div>
												</div>
											</div>
											<div class="_style_process" style="width: 33%;display: inline-block;">
												<div style="padding-right: 36px;">
													<div style="width: 100%;margin-bottom: 12px;">
														<div class="_style_process_steps">2</div>
													</div>
													<div>
														<h4 class="style_steps_h4">차량대금 송금</h4>
														<div>
															<p class="style_steps_p">원하시는 가격을 제시한 전문 파트너와 계약서를 작성하시면 요구하신 일자에 차량대급이 입금됩니다.<br>&nbsp;</p>
														</div>
													</div>
												</div>
											</div>
											<div class="_style_process" style="width: 33%;display: inline-block;">
												<div style="padding-right: 36px;">
													<div style="width: 100%;margin-bottom: 12px;">
														<div class="_style_process_steps">3</div>
													</div>
													<div>
														<h4 class="style_steps_h4">명의이전 완료</h4>
														<div>
															<p class="style_steps_p">명의이전이 진행된 후 모든 판매과정이 완료됩니다.<br>&nbsp;<br>&nbsp;</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div style="overflow: hidden;">
							<div style="min-width: 1460px;">
								<div style="background-image: url('https://img.cardam.co.kr/Content/desktop/ioniq_hd.jpg'); background-position: center center;background-size: cover;height: 264px;width: 611px;float: left;"></div>
								<div style="float: left;background-color: #f6f6ee;height: 264px;">
									<div style="padding: 80px 103px 64px 103px;width:643px">
										<h2 class="style_h2 HYCFLSH2">환경을 생각하는 Hybrid 친환경차 어떠세요?</h2>
										<p class="style_p HYCFLSP">부담되는 신차보단 새차같은 중고차로 바꿔보세요</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="width: 100%;height: auto;clear: both">
						<div>
							<div class="" style="background-color: rgb(248, 248, 249);">
								<div style="padding-right: 100px !important;padding-left: 100px !important;height: 198px;">
									<div style="padding-top: 80px;">
										<div style="height: 78px;">
											<p class="style_p">차를 팔기전</p>
											<h2 class="style_h2">내차판매 후기보기</h2>
										</div>
										<div style="width: 100%;padding-bottom: 30px;"></div>
									</div>
								</div>
								<div style="padding-right: 100px !important;padding-left: 100px !important;padding-bottom: 50px;">
									<div class="swiper-container" style="height: 500px;margin: 0;">
								        <div class="swiper-wrapper" style="height: 436px;">
								            <div class="swiper-slide">
									            <div style="width: 100%;height: 100%">
										            <div style="width: 100%;height: 300px;">
											            <div style="background-image: url('https://img.cardam.co.kr/Content/desktop/review_4.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;width: 100%;height: 100%;"></div>
										            </div>
										            <div style="height: 80px;padding: 28px !important">
											            <div>
												            <p class="review_p" style="text-overflow:ellipsis;">"자동차 매매에 무지했던 주부인지라 막상 차를 팔려고 보니 이것저것 걱정이 많았는데요 주변 지인의 소개로 알게된 잇카에 상담을 요청해보니 친절하게 상담해주시고 가격도 남편한테 물어보니 그정도면 얼른 팔라고 해서 판매를 결정했네요"</p>
<!-- 												            <p class="review_p"><em> 홍길순님 </em></p> -->
											            </div>
										            </div>
									            </div>
								            </div>
								            <div class="swiper-slide">
									            <div style="width: 100%;height: 100%">
										            <div style="width: 100%;height: 300px;">
											            <div style="background-image: url('https://img.cardam.co.kr/Content/desktop/review_3.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;width: 100%;height: 100%;"></div>
										            </div>
										            <div style="height: 80px;padding: 28px !important">
											            <div>
												            <p class="review_p" style="text-overflow:ellipsis;">"2009년 구입해서 무사고고 거의 3만 키로 탔어요.직장도 가깝고 유지비 많이 들고 해서 팔았어요. 가격도 잘 쳐주셨고, 전반적으로 괜춤하네요.시원 섭섭하네요 차 없이 잘 살 수 있겠죠???"</p>
<!-- 												            <p class="review_p"><em> 홍길순님 </em></p> -->
											            </div>
										            </div>
									            </div>
								            </div>
								            <div class="swiper-slide">
									            <div style="width: 100%;height: 100%">
										            <div style="width: 100%;height: 300px;">
											            <div style="background-image: url('https://img.cardam.co.kr/Content/desktop/review_5.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;width: 100%;height: 100%;"></div>
										            </div>
										            <div style="height: 80px;padding: 28px !important">
											            <div>
												            <p class="review_p" style="text-overflow:ellipsis;">"덕분에 좋은 견적으로 차량 판매 완료 하였습니다.2014년도에 살짝 경미한 접촉 사고가 있었는데 이 부분도 들어주고 확인 하고 마무리 정검까지 잘해주셔서 더 믿음이 갔고 다음에 또 이용을 할거 같아요. 좋은 가격 제시해주셔서 감사합니다~ 주변 사람들에게도 많이 소개시켜드릴게요!"</p>
<!-- 												            <p class="review_p"><em> 홍길순님 </em></p> -->
											            </div>
										            </div>
									            </div>
								            </div>
								            <div class="swiper-slide">
									            <div style="width: 100%;height: 100%">
										            <div style="width: 100%;height: 300px;">
											            <div style="background-image: url('https://img.cardam.co.kr/Content/desktop/review_6.jpg');background-position: center center;background-repeat: no-repeat;background-size: cover;width: 100%;height: 100%;"></div>
										            </div>
										            <div style="height: 80px;padding: 28px !important">
											            <div>
												            <p class="review_p" style="text-overflow:ellipsis;">"상담이 너무 친절 했습니다. 3달 된 제 애마를 어쩔 수 없이 처분해야 하는 상황이라 난감했는데요... 친절하게 위로도 해 주시네요^^ 딜러 분들도 금액만 저렴하게 매입하려고만 하지않고 다양한 가능성의 조언도 주셔서 정말 만족 했습니다.^^"</p>
<!-- 												            <p class="review_p"><em> 홍길순님 </em></p> -->
											            </div>
										            </div>
									            </div>
								            </div>
								            <div class="swiper-slide"></div>
								        

								        </div>
								        <!-- Add Pagination -->
								        <div class="swiper-pagination"></div>
								    </div>
								    <!-- Swiper JS -->
								    <script src="https://plug.cardam.co.kr/swiper/js/swiper.min.js"></script>
								    
								      <!-- Initialize Swiper -->
								    <script>
								    var swiper = new Swiper('.swiper-container', {
								        pagination: '.swiper-pagination',
								        initialSlide : 0,
								        slidesPerView: 4,
								        centeredSlides: false,
								        width : 1670,
								        height : 400,
								        paginationClickable: true,
								        spaceBetween: 30,
								        grabCursor: true
								    });
								    </script>
								</div>
								<div></div>
							</div>
							<div class="" style="background-color: #fff;padding: 80px 103px;overflow: hidden;">
								<div style="width: 100%;height: 477px;min-width: 1254px;">
									<div style="width: 848px;height: 477px;float: left;background-image: url('https://img.cardam.co.kr/Content/desktop/kakao_smart_hd.png');background-position: center center;background-size: 848px 477px;"></div>
									<div style="width: 302px;height: 408px;float: left;background-color:#fff">
									<img src="https://img.cardam.co.kr/Content/desktop/cardam_kpf.png" height="477px;">
									<!--
										<div>
											<p class="style_p">내차파는 새로운 방법</p>
											<h2 class="style_h2">카카오 플러스친구</h2>
										</div>
										<div></div>
										<div></div>
									</div>
									-->
								</div>
							</div>
						</div>
					</div>
					<footer style="height: 230px;background-color: #000;padding:52px 80px 0 80px;">
						<div style="width: 100%;height: 100%;">
							<div style="padding:40px 0 40px 0;border-bottom: 1px solid #282727;">
								<div class="layout">
									<div style="width: 33.333% !important;display: inline-block;float: left;">
										<a style="display: block !important"><img src="https://img.cardam.co.kr/Content/desktop/footer-logo.png" width="65px" style="position: relative;top: -12px;"></a>
									</div>
									<div style="width: 66.666% !important;display: inline-block;flex: left">
										<div class="layout">
											<div style="display: inline-block;float: left;width: 50%">
												<div>
													<a class="btn" style="background-color: #fff;border-color: #fff;color: #000;font-size: 14px;">차량오너로 가입하기</a>
												</div>
											</div>
											<div style="display: inline-block;float: left;width: 50%">
												<div>
													<a class="btn" style="border-color: #fff;color: #fff;font-size: 14px;">카담 파트너 지원하기</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
<!-- 							<div style="padding:40px 0 40px 0;border-bottom: 1px solid #282727;"></div> -->
							<div style="padding:18px 0 24px 0;color:white">
								<div>
									<div style="display: inline-block;width: 33% !important;vertical-align: top;">
										<span style="color: #C0C0C0;font-size: 12px;font-weight: 500;">© 2017 Cardam Technologies Inc.</span>
									</div>
									<div style="display: inline-block;width: 66% !important;color: white;">
										<div style="width: 50%;display: inline-block;vertical-align: top;">
											<ul>
												<li style="padding-bottom: 10px;">대표자 : 김태홍 | 사업자번호 : 290-41-00154</li>
												<li>주소 : 시흥시 산기대학로 비즈니스센터 12층</li>												
											</ul>
										</div>
										<div style="width: 49%;display: inline-block;vertical-align: top;">
											<ul>
												<li>메일 : tempnic@naver.com</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</footer>	
				</div>
		
			</div>
			
		</main>
	
	</body>

	
</html>
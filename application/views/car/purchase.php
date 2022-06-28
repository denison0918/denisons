<!DOCTYPE html>
<html>
<style>

html{
	min-width: 320px;
	
	
}

html, body, div, p, h1, h2, h3, ul, ol, li, label,input,span{
		margin: 0;
		padding: 0;
		border: 0;
		font-family: "나눔 고딕", "Nanum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", Dotum, "Helvetica Neue", Helvetica, Arial, sans-serif !important;
	} 
	
	
body {font-family: "Lato", sans-serif;margin: 0}


	ul li, ol li{
		list-style: none;
	}
	
	a{
		text-decoration: none;
		cursor: pointer;
		color: #4545f8;
	}
	.header{
		width: 100%;
		height: 55px;
		background-color: #fff;
		z-index: 1000;
/* 		box-shadow: 0px 0px 8px black; */
		border-bottom-color: #000000;
		border-bottom: 1px solid rgba(0,0,0,0.35);
		
	}
	
	.header .logo{
	position: relative;
	top: 22px;
	margin: 0 0 0 115px;
	font-weight: bolder;
	font-family: 'Nanum Gothic',sans-serif;
	font-size: 62px;
/*	width: 53px; */
	width: 45;
	height: 33px;
	padding: 0;
	
	line-height: 62px;
	background-color: #fff;
	color: rgba(0,0,0,0.65);
	text-align: right;
	text-shadow:  0px 0px 1px white;
	
	background-image: url(/Images/Content/logo_d.png);
	background-size: 45px 33px;
	background-repeat: no-repeat;
	background-position: center center;
	
	}
	
	.header .header-container{
		max-width: 768px;
		min-width: 320px;
		margin: 0 auto;

		height: 55px;
		border: 0;
	}
	
	.header .header-container .deal{
		float: right;
		
		position: relative;
		width: 200px;
		height: 55px;
		text-align: center;
		line-height: 35px;
		display: inline-block;
	

	}
	
	.header .header-container .deal a{
		color: rgba(0,0,0,0.65);
		font-size: 10.5pt;
	}
	
	
	.header .header-container span{
	display: none;
	 
	 position: relative; 
	 left: 100px; 
	 
	 top: 5px; 
	 color: rgba(0,0,0,0.45)	
	 }

ul.tab {
    list-style-type: none;
    height: 55px;
    margin: 0;
    padding: 0;
    overflow: hidden;
/*
    border-bottom: 1px solid #ccc;
	
*/
}

/* Float the list items side by side */
ul.tab li {float: left;width: 50%; text-align: center;display: inline-block;   background-color: rgba(255, 255, 255, 0.97); }

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: rgba(0, 0, 0, 0.85);
    text-align: center;
    padding: 12px 0px;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
    font-size: 10.5pt;
    font-family: sans-serif;
    width: 100%;
    
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #efefef;
}

/* Style the tab content */
.tabcontent {
	margin: 0 auto;
	min-width: 320px;
	max-width: 450px;
    display: none;
/*     padding: 6px 6px; */
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

.mycar{
	width: 100%;
	max-width: 450px;
	height: 300px;
	background-image: url(/Images/Content/carbg2.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: auto 300px;
	border: 1px outset rgba(0, 0, 0, 0.3);
	border: 0px;
/* 	border-radius: 5px; */

}
.mycar .bg{
	width: 100%;
	height: 100%;
	background-color: rgba(32, 33, 41, 0.4);
}

.mycar p{
	position: relative;
	top: -75%;
	width: 100%;
	height: 20px;
	text-align: center;
	font-weight: 300;
	font-size: 14.5pt;
	color: white;
	margin: 0;
	-webkit-text-size-adjust: 120%;
	
}

.mycar .comment1{

	margin-bottom: 5%;
	color: rgba(255, 255, 255, 0.85);
}

.mycar .comment2{
	color: rgba(255, 255, 255, 0.85);
	
}

.mycar .apply{
	left: 5%;
	width: 90%;
	height: 36px;
	background-color: rgba(0, 0, 0, 0.5);
	bottom: 0;
	position: relative;
	bottom: 115px;

	overflow: hidden;
	
}

.mycar .apply input[type="tel"]{
 	width: 80.1%; 

	height: 36px;
	text-align: center;
	text-align: -webkit-center;
	text-align: -ms-center;
	text-align: -moz-center;
	font-size: 10.5pt;
	border-radius: 0;
	border: 0;
	position: absolute;
	left: 0;
	
	
}

.mycar .apply input[type="button"]{
	width: 20%;
	height: 37px;
	font-size: 10.5pt;
	border-radius: 0;
	border: 0;
	background-color: rgba(173, 140, 140, 0.62);
	color: white;
	cursor: pointer;
	position: absolute;
	right: 0;
	-webkit-appearance: none;
}



.intro-text {
	width: 100%;
	height: 150px;
	text-align: center;
	color: #484848;
text-rendering: optimizelegibility;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}

.intro-text h2{
font-size: 21pt;

font-weight: bold;
height: 35px;
position: relative;
top: 50px;
}

.intro-text p{
position: relative;
top: 60px;
height: 20px;
font-size: 11pt;
}	

.photo-container .swiper-slide p{
	color: rgba(0, 0, 0, 0.85);
	text-align: center;
	font-size: 8pt;
	font-weight: bolder;
}	

.photo-container .swiper-slide span{
	color: rgba(0, 0, 0, 0.85);
	text-align: center;
	font-size: 8pt;
	font-weight: 300;
	line-height: 1.7;
}	

.photo-container .swiper-slide .high{
	color: rgba(255, 0, 0, 0.85);
}	

	
.photo-container .swiper-slide .estimate-sm5-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 40px;left: 10px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-sm5-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -35px;left: 155px;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-sm5-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -40px;left: 256px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	

.photo-container .swiper-slide .estimate-avante-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 50px;left: 0px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-avante-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -25px;left: 125px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-avante-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -55px;left: 250px;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.5);
}	

.photo-container .swiper-slide .estimate-ray-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 40px;left: 20px;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-ray-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -40px;left: 140px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-ray-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -35px;left: 260px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	

.photo-container .swiper-slide .estimate-k7-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 50px;left: 0px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-k7-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -25px;left: 115px;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-k7-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -35px;left: 260px;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	

.footer{
	border-top: 1px outset rgba(228, 228, 228, 1);
	width: 100%;
	height: 40px;
	background-color: rgba(188, 188, 188, 0.2);
	
}

.footer p{
	font-size: 7pt;
	text-align: center;
	font-family: "나눔 고딕", "Nanum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", Dotum, "Helvetica Neue", Helvetica, Arial, sans-serif !important;line-height: 1.7;
	position: relative;
	top: 12px;
	color: #b8b8b8;
}
	

</style>

<style>
	.photo-container{width:320px; height:250px;margin: 0 auto}.swiper-slide{background-position:center;background-size:100% auto;border-radius: 5px; }
	</style>




<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", initial-scale="1.0", maximun-scale="1.0", minimum-scale="1.0", user-scaleable="no">
<link rel="stylesheet" href="../../../css/swiper.min.css">
</head>
<body >
<!--

<h3>Hobe</h3>
-->

<div class="footer">
	<p>회사명 : GIEOK  사업자번호 : 290-41-00154 이메일 : tempnic@naver.com</p>
</div>






<script>

function submitChk(){
	var phone = document.frm.phone.value;
	
	if(phone.length < 1){
		alert("연락처를 입력해주세요!");
	}else if(phone.length > 1 && phone.length < 9){
		alert("연락처를 정확하지 않습니다!");
	}else{
// 		document.frm.submit();		
	}


}	
	

openCity(event, 'Sell');

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
 //   evt.currentTarget.className += " active";
}

</script>

<script src="../../../script/swiper.min.js"></script>
<!-- <script src="http://idangero.us/swiper/dist/js/swiper.min.js"></script> -->
 
<script>
    var swiper = new Swiper('.photo-container', {
//         pagination: '.swiper-pagination',
        effect: 'flip',
        grabCursor: true,
        loop : true,
        speed : 500,
        autoplay: 2800,
        
        /*
,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
*/
    });
    </script>
     
</body>
</html>


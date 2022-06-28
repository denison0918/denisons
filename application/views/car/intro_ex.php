<!DOCTYPE html>
<html lang="ko-KR">
<style>

html{min-width: 320px; max-width: device-width}:lang(ko-KR){font-family:"Yoon Gothic","Apple Gothic","HY Gulim","MalgumGothic","HY Dotum","Lexi Gulim","Helvetica Neue","Helvetica","Arial",sans-serif}

html, body, div, p, h1, h2, h3, ul, ol, li, label,input,span, footer, pre{
		margin: 0;
		padding: 0;
		border: 0;
		font-family: "나눔 고딕", "Nanum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", Dotum, "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		text-rendering: optimizelegibility;
-webkit-font-smoothing: antialiased;
	}
.intro{
	width: 100%;
	height: 100%;
	position: absolute;
	z-index: 5000;
	top: 0px;
	background-color: white;
	margin: 0;
	
   	display: -ms-flexbox;
   	-ms-flex-align: center;
   	 
   	display: -webkit-flex;
   	-webkit-flex-align: center;
   	-webkit-align-items: center;
   	 
   	display: flex;
   	align-items: center;
   	display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-box-pack: center;
  -webkit-box-align: center;

   display: -moz-box;
  -moz-box-orient: vertical;
  -moz-box-pack: center;
  -moz-box-align: center;

   display: box;
  box-orient: vertical;
  box-pack: center;
  box-align: center;
	   
}	
.intro .center{
	width: 100%;
	height: 85px;
	z-index: 5001;
	position: relative;
	top: 0px;
}

.intro .center .logo{
	width: 89px;
	height:50px;
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/cardam8_1.png);
	background-size: 89px 50px;
	background-repeat: no-repeat;
	background-position: center center;
	margin: 0 auto;
	display: none;
}

.intro .center .description{
	width: 100%;
	height:35px;
	text-align: center;
	line-height: 35px;
	color: #888888;
	display: none;
}

.header{
	opacity: 0;
}
.main{
	opacity: 0;
}
.footer{
	display: none;
}

.notice{
	width: 100%;
	height: 100%;
	min-height: 550px;
	background-color: white;
	z-index: 5000;
	position: absolute;
	top: 0;
	opacity: 1;
	background-position: top center;
	background-repeat: no-repeat;
	background-size: contain;
 	background-size: auto 50%; 
	display: none;
}

@media only screen and (min-width: 600px){.notice {background-size: auto 50%; }}

@media only screen and (width: 768px){.notice {background-size: auto 50%; }}

@media only screen and (min-width: 1028px){.notice {background-size: auto 50%; }}

.notice .notice-top{
	height: 36px;
	width: 100%;
}

.notice .notice-top .notice-close{
	min-width: 36px;
	max-height: 42px;
	min-height: 36px;
	max-height: 42px;
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Interface/notice-close.png);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	float: right;

	margin-top: 17px;
	margin-right: 17px;
	cursor: pointer;
	background-color: #fff;
	border-radius: 35px;
}




.notice .notice-center{
	width: 100%;
	height: 50%;
	position: relative;
	top: 45.7%;
/* 	background-color: rgba(0, 0, 0, 0.55 ); */
	
}


.notice .notice-center p{
	padding: 10px;
	color: #fff;
	color: #000;
	font-size: 12pt;
	line-height: 20pt;
	
}

.notice .notice-center pre{
	padding: 3px;
	padding-left: 10px;
	color: #fff;
	color: #d96767;
	font-size: 10pt;
	line-height: 0pt;
	
}

@media (max-width:320px){
	.notice .notice-center p{
		font-size: 10pt;
	}
	
	.notice .notice-center pre{
		font-size: 9pt;
		}
}


.match-bg{
	width: 100%;
	height: 100%;
/* 	min-height: 20px; */
	z-index: 5000;
	position: absolute;
	top: 0;
	opacity: 0.4;
	background-position: top center;
	background-repeat: no-repeat;
	background-size: contain;
 	background-size: auto 50%;
 	background-color: #000;
  	display: none;  
}

.match{
	width: 300px;
	height: 250px;
/* 	min-height: 20px; */
 	background-color: white; 
	z-index: 5001;
	position: absolute;
	border-radius: 7px;
	top: 0;
	
	opacity: 1;
	background-position: top center;
	background-repeat: no-repeat;
	background-size: contain;
 	background-size: auto 50%;
/*  	background-color: #000; */
  	display: none;  
  	
  	
  	
}

.match .match-container{
	width: 300px;
	height: 205px;
	z-index: 5005;
	position: relative;
	opacity: 1;
	border-radius: 0px 0px 7px 7px;
}

.match .match-top{
	position: relative;
	top: 0px;
	border-radius: 7px 7px 0px 0px;
	height: 54px;
	width: 100%;
	border-bottom: 1px solid #818181;
}


.match .match-top input[type="tel"]{
 	width: 230px;
	height: 54px;
	text-align: center;
	text-align: -webkit-center;
	text-align: -ms-center;
	text-align: -moz-center;
	font-size: 12.5pt;
	text-decoration:none;
	border-radius: 7px 0px 0px 0px;
	border: 0;
	color: #818181;
/* 	position: absolute; */
	top: 0;
	left: 0;
	position: relative;
	
}

.match .match-top input[type="button"]{
 	width: 70px;
	height: 54px;
	text-align: center;
	text-align: -webkit-center;
	text-align: -ms-center;
	text-align: -moz-center;
	font-size: 12.5pt;
	background-color: #fff;
	border-radius: 0px 7px 0px 0px;
	border: 0;
	color: #818181;
/* 	position: absolute; */
	top: 0;
	left: 0;
	position: relative;
	cursor: pointer;
	-webkit-appearance: none;
	
}

.match .match-table{
	width: 100%;
	height: 150px;
}

.match .match-bottom{
	width: 100%;
	height: 55px;
	text-align: center;
	line-height: 45px;
}

.match .match-table li{
	width: 100%;
	height: 49px;
	border-bottom: 1px solid #dfdfdf;
}

.match .match-table li .avatar{
	background-position: right bottom;
	background-size: 47px 47px;
	background-repeat: no-repeat;
	width: 60px;
	height: 49px;
	display: inline-flex;

	float: left;	
}


.match .match-table li .name{

/* 	line-height: 38px; */
	position: relative;
	height: 49px;
	width: 110px;

	float: left;
	text-align: center;

	
}

.match .match-table li .name p{
	width: 100%;
	text-align: center;
	height: 34px;
	font-size: 14pt;
	display: block;
	width: 115px;
	line-height: 40px;
	color: rgba(0,0,0,0.7);
	font-weight: 600;
}

.match .match-table li .name small{
	width: 100%;
	text-align: center;
	height: 15px;
	line-height: 10px;
	display: block;
	width: 115px;
	text-indent: 14px;
	color: rgba(0,0,0,0.5);
}


.match .match-table li .phone{

	width: 130px;
	height: 49px;
	float: left;
	
}

.match .match-table li .phone p{
	width: 100%;
	text-align: left;
	height: 34px;
	font-size: 12pt;
	display: block;

	width: 130px;
	line-height: 42px;
	color: rgba(0,0,0,0.7);
	font-weight: 400;
}

.match .match-table li .phone small{
	width: 100%;
	text-align: center;
	height: 15px;
	line-height: 10px;
	display: block;
	width: 130px;
	text-indent: 24pt;
	color: rgba(0,0,0,0.5);
}


.match .match-bottom{
	color: #9a7171;
}





body {}


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
		border-bottom-color: #000000;
		border-bottom: 1px solid rgba(0,0,0,0.35);
		
	}
	

	
	
	
	.header .logo{
	position: absolute;
	top: 4px;
	margin: 0 0 0 0px;
	font-weight: bolder;
	font-family: 'Nanum Gothic',sans-serif;
	font-size: 62px;
/*	width: 53px; */
	width: 89px;
	height: 50px;
	padding: 0;
	
	line-height: 32px;
	background-color: #fff;
	color: rgba(0,0,0,0.65);
	text-align: right;
	text-shadow:  0px 0px 1px white;
	
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/cardam8_1.png);
	background-size: 54px 30px;
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
/* 	max-width: 450px; */
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


	@media (max-width:320px){
		.header{
			height: 50px;
		}
		
		.header .header-container{
			height: 50px;
		}
		.header .logo{
			background-size: 45px 25px;
			height: 45px;
			width:79px;
		}

		
		.header .header-container .deal{
			width: 170px;
			height: 50px;
		}
		ul.tab {
		height: 50px;
    	}
    	
    	ul.tab li a {
	    padding: 9px 0px;
	    font-size: 9pt;
	    
		}
	
	}



.mycar{
	width: 100%;
	max-width: 768px;
	height: 360px;
	height: 96vw;
	max-height: 512px;

	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/carbg2.jpg);
	background-position: center center;
	background-repeat: no-repeat;
/* 	background-size: 100% auto; */
	background-size: 120% 100%;
	border: 1px outset rgba(0, 0, 0, 0.3);
	border: 0px;
	margin: 0 auto;
/* 	border-radius: 5px; */
}


.mycar .bg{
	width: 100%;
	height: 100%;
	background-color: rgba(32, 33, 41, 0.1);
}

.mycar p{
	position: relative;
	top: -69%;
	width: 100%;
	height: 20px;
	text-align: center;
	font-weight: lighter;
	font-size: 17pt;
	color: white;
	margin: 0;
	-webkit-text-size-adjust: 120%;
	
}

@media(max-width:320px){
	.mycar p{
		font-size: 12pt;
	}
}

.mycar .comment1{

	margin-bottom: 28px;
	color: rgba(255, 255, 255, 0.85);
}

.mycar .comment2{
	color: rgba(255, 255, 255, 0.85);
	
}

.mycar .apply{
	left: 7%;
	width: 86%;
	height: 36px;
	background-color: rgba(0, 0, 0, 0.5);
	bottom: 0;
	position: relative;
	bottom: 115px;

	overflow: hidden;
	
}


.mycar .apply input[type="text"]{
 	width: 30.1%; 
 
	height: 36px;
	text-align: center;
	text-align: -webkit-center;
	text-align: -ms-center;
	text-align: -moz-center;
	font-size: 10.5pt;
	border-radius: 0;
	border: 0;
/* 	position: absolute; */
	left: 0;
	flex: 1 30.1%;
	
	
}

.mycar .apply input[type="tel"]{
 	width: 50.1%; 

	height: 36px;
	text-align: center;
	text-align: -webkit-center;
	text-align: -ms-center;
	text-align: -moz-center;
	font-size: 10.5pt;
	border-radius: 0;
	border: 0;
/* 	position: absolute; */
	left: 0;
	flex: 1 50%;
	position: relative;
	left: -4.5px;
	
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

@media (max-width:320px){
	.mycar .apply{
		height: 32px;
	
	}
	
	.mycar .apply input[type="text"]{
		height: 32px;
		font-size: 9pt;
		}
	
	.mycar .apply input[type="tel"]{
		height: 32px;
		font-size: 9pt;
		}
	
	.mycar .apply input[type="button"]{
		height: 32px;
		font-size: 9pt;
	}
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

@media(max-width:320px){
	
	.intro-text{
		height: 140px;
	}
	.intro-text h2{
	font-size: 17pt;
	top: 40px;
	}
	.intro-text p{
		font-size: 10pt;
		top: 50px;
	}
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

	
.photo-container .swiper-slide .estimate-sm5-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 18%;left: 2%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-sm5-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -15%;left: 42%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-sm5-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -26%;left: 77%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	

.photo-container .swiper-slide .estimate-avante-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 17%;left: 2%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-avante-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -12%;left: 42%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-avante-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -26%;left: 77%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.5);
}	

.photo-container .swiper-slide .estimate-ray-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 21%;left: 2%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-ray-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -16%;left: 40%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-ray-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -29%;left: 77%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	

.photo-container .swiper-slide .estimate-k7-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 25%;left: 2%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	
.photo-container .swiper-slide .estimate-k7-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -8%;left: 40%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.8);color: rgba(255,0,0,0.8);
}	
.photo-container .swiper-slide .estimate-k7-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -16%;left: 77%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
}	

.footer{

	border-top: 1px outset rgba(228, 228, 228, 1);
	width: 100%;
	
	height: 80px;
	background-color: #2a2a2a;
					
	
}

.footer .footer-content{
	min-width: 320px;
	max-width: 480px;

	height: 60px;
	margin: 0 auto;
	position: relative;
	top: 12px;
	
	
	   	display: -ms-flexbox;
   	-ms-flex-align: center;
   	 
   	display: -webkit-flex;
   	-webkit-flex-align: center;
   	-webkit-align-items: center;
   	 
   	display: flex;
   	align-items: center;
   	display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-pack: center;
  -webkit-box-align: center;

   display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-pack: center;
  -moz-box-align: center;

   display: box;
  box-orient: vertical;
  box-pack: center;
  box-align: center;
  
  
		display: -webkit-box;
		display: -moz-box;
	   	display: -ms-flexbox;
	   	display: -webkit-flex;
	   	display: flex;
-webkit-align-items: center;
	   align-items: center;

}



.footer .footer-content .footer-info{
	color: #919191;
	font-size: 7.5pt;
	padding-left: 5px;
	padding-right: 5px;
	margin: 0 auto;
	
}

.footer .footer-content .footer-info li{
	margin-bottom: 5px;
	text-decoration: none !important;

}

.footer .footer-content .footer-info li strong{
	color: #aeaeae;
	font-size: 9.5pt;
	
}


@media (max-width:320px){
	
		.photo-container .swiper-slide .estimate-sm5-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 18%;left: 5%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
	}	
	.photo-container .swiper-slide .estimate-sm5-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -12%;left: 42%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.8);color: rgba(255,0,0,0.8);
	}	
	.photo-container .swiper-slide .estimate-sm5-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -21%;left: 74%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
	}	
	
	.photo-container .swiper-slide .estimate-avante-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 17%;left: 6%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
	}	
	.photo-container .swiper-slide .estimate-avante-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -12%;left: 42%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.8);color: rgba(255,0,0,0.8);
	}	
	.photo-container .swiper-slide .estimate-avante-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -21%;left: 73%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.5);
	}	
	
	.photo-container .swiper-slide .estimate-ray-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 25%;left: 5%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.5);
	}	
	.photo-container .swiper-slide .estimate-ray-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -12%;left: 40%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.8);color: rgba(255,0,0,0.8);
	}	
	.photo-container .swiper-slide .estimate-ray-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -22%;left: 72%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
	}	
	
	.photo-container .swiper-slide .estimate-k7-one{padding: 5px;width: 58px;height: 30px;position: relative;top: 25%;left: 6%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
	}	
	.photo-container .swiper-slide .estimate-k7-two{padding: 5px;width: 58px;height: 30px;position: relative;top: -5%;left: 40%;font-size: 10.5pt;border: 2px dashed rgba(255, 0, 0, 0.8);color: rgba(255,0,0,0.8);
	}	
	.photo-container .swiper-slide .estimate-k7-three{padding: 5px;width: 58px;height: 30px;position: relative;top: -12%;left: 75%;font-size: 10.5pt;border: 1px dashed rgba(0, 0, 0, 0.5);
	}	
	
	.footer{
		height: 95px;
		
	}
	
	.footer .footer-content{
		display: block;
		
	}
	
	.footer .footer-content .footer-info{
		width: 300px;
		height: 28px;
	}
	
	.footer .footer-content .footer-info li{
	margin-bottom: 0px;
	}
}
	
.subject{
	width: 100%;
    height: 70px;
    height: 120px;
}	
	
.subject .intro-text2{
			width: 100%;
		height: 70px;
		text-align: center;
		line-height: 115px;
		margin: 0 auto;
		font-size: 1.2em;
	font-family: sans-serif;
	color: rgba(0,0,0,0.6);
	font-weight: 500;
}	


.subject p{
		position: relative;
		margin: 0 auto;
		width: 100%;
		height: 30px;
		line-height: 19px;
		text-align: center;
		font-size: 0.8em;
	font-family: sans-serif;
	color: rgba(200,0,0,0.76);
	font-weight: 200;
	
	}
	
	
.subject-buy{
	width: 100%;
    height: 70px;
}	
	
.subject-buy .intro-text3{
			width: 100%;
		height: 70px;
		text-align: center;
		line-height: 115px;
		margin: 0 auto;
		font-size: 1.2em;
	font-family: sans-serif;
	color: rgba(0,0,0,0.6);
	font-weight: 500;
}	


.subject-buy p{
		position: relative;
		margin: 0 auto;
		width: 100%;
		height: 30px;
		line-height: 19px;
		text-align: center;
		font-size: 0.8em;
	font-family: sans-serif;
	color: rgba(200,0,0,0.76);
	font-weight: 200;
	
	}	
	
.content-buy{
		width: 100%;
		height: 360px;
	}
	
.content-buy .lowcar{
		width: 320px;
		height: 215px;
 		background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/ioniq.png); 
		background-size: 90% auto;
		background-position: center bottom;
		background-repeat: no-repeat;
		margin: 0 auto;
}

	.content-buy .compare{
			min-width: 320px;
			max-width: 450px;
			height: 125px;
			padding-top: 5px;
			margin: 0 auto;
		display: -webkit-box;
		display: -moz-box;
	   	display: -ms-flexbox;
	   	display: -webkit-flex;
	   	display: flex;
-webkit-align-items: center;
	   align-items: center;

	}
	
	.content-buy .compare .normalPrice{
		width: 40%;
		height: 120px;
		

	}
	
	.content-buy .compare .normalPrice .outReport li{
		width: 100%;
		height: 20px;
		text-align: center;
		margin-bottom: 4px;
		font-size: 10pt;
		line-height: 20px;
	}
	.content-buy .compare .normalPrice .outReport li:first-child{
		width: 100%;
		height: 30px;
		text-align: center;
		margin-bottom: 12px;
		font-weight: 700;
		line-height: 31px;
		font-size: 10.5pt;
		color: rgba(0,0,0,0.65);
	}
	
	
	.content-buy .compare .vs{
		width: 20%;
		height: 120px;

	}
	
	.content-buy .compare .vs .target{
		width: 100%;
		left: 0;
	}
	
	.content-buy .compare .vs .target li{
		width: 100%;
		height: 20px;
		text-align: center;
		margin-bottom: 4px;
		font-size: 8pt;
		line-height: 20px;
	}
	.content-buy .compare .vs .target li:first-child{
		width: 100%;
		height: 30px;
		text-align: center;
		margin-bottom: 12px;
		font-weight: 700;
		line-height: 30px;
		font-size: 12.5pt;
	}
	
	.content-buy .compare .downAuction{
		width: 40%;
		height: 120px;	
	}
	.content-buy .compare .downAuction .inReport li{
		width: 100%;
		height: 20px;
		text-align: center;
		margin-bottom: 4px;
		font-size: 10pt;
		line-height: 20px;
	}
	.content-buy .compare .downAuction .inReport li:first-child{
		width: 100%;
		height: 31px;
		text-align: center;
		margin-bottom: 12px;
		font-weight: 700;
		line-height: 30px;
		font-size: 10.5pt;
		color: rgba(0,0,0,0.65);
	}
	
	.content-buy .compare .downAuction .inReport .price2{
		width: 100%;
		height: 20px;
		text-align: center;
		margin-bottom: 4px;
		font-size: 10pt;
		line-height: 20px;
		font-weight: 800;
		color: rgb(180,0,0);
	}
	
	.content-explain{
		width: 301px;
		margin: 0 auto;
		padding-bottom: 50px;
		height: 40px;
		display: -webkit-box;
		display: -moz-box;
	   	display: -ms-flexbox;
	   	display: -webkit-flex;
	   	display: flex;
-webkit-align-items: center;
	   align-items: center;
	   overflow: hidden;
	}
	
	.content-explain .line{
		width: 1px;
		height: 40px;
		background-color: white;
	}
	
	.content-explain input[type="button"]{
		color: white;
		font-size: 9.5pt;
		font-weight: 400;
		line-height: 3.2;
		cursor: pointer;
		-webkit-appearance: none;
	}
	
	.content-explain .detail{
		width: 150px;
		height: 100%;
		border-radius: 5px 0px 0px 5px;
		background-color: #3aa4e1;

	}
	.content-explain .search{
		width: 150px;
		height: 100%;
		border-radius: 0px 5px 5px 0px;
		background-color: #8c8c8c;

	}
	
	@media (max-width:320px){
		.content-explain{
		width: 241px;
		padding-bottom: 40px;
		height: 32px;
		}
		
			.content-explain .line{
		height: 32px;
		}
		
		.content-explain input[type="button"]{
		font-size: 8pt;
		font-weight: 400;
		line-height: 2.2;
		}
		
		.content-explain .detail{
			width: 120px;
			
		}
		.content-explain .search{
			width: 120px;
		}
	
		
	}
	


.intro-sell{
	width: 100%;
	max-width: 768px;
	margin: 0 auto;
	
	height: auto;
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
/*
-webkit-align-items: center;
	   align-items: center;
*/
	
}

.intro-sell div p{
	position: relative;
	width: 100%;
	top: 10px;
	font-size: 11pt;
	font-weight: 400;
	text-align: center;
}






.intro-sell .sell-color{
	width: 50%;
	max-width: 568px;
	height: 200px;
	
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/sell-color.png); 
	background-size: 100% auto;
	background-position: center center;
	background-repeat: no-repeat;	

}

.intro-sell .sell-indicator{
	width: 50%;
	height: 200px;
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/sell-indicator2.png); 
	background-size: 290px auto;
	background-position: center center;
	background-repeat: no-repeat;
}
.intro-sell .sell-option{
	width: 50%;
	max-width: 400px;
	height: 200px;
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/sell-option2.png); 
	background-size: 80% auto;
	background-position: center center;
	background-repeat: no-repeat;


}
.intro-sell .sell-performance{
	width: 50%;
	max-width: 320px;
	height: 260px;
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/sell-perform.png); 
	background-size: 95% auto;
	background-position: center center;
	background-repeat: no-repeat;
}


@media only screen and (min-width:428px){
	.intro-sell .sell-color{height: 250px;}	
	.intro-sell .sell-indicator{background-size: 290px auto;}	
}

@media only screen and (max-width:568px){
	.intro-sell{
			
	
	}	
	
	
	.intro-sell .sell-color{
	height: 180px;
	background-size: 110% auto;
	}
	.intro-sell .sell-indicator{background-size: 230px auto; height: 180px;}	
	.intro-sell .sell-performance{height: 220px;background-size: 85% auto;}	

}



.dealer{
	width: 100%;
	margin: 0 auto;
	height: 180px;
	background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/deal2.jpg); 
/* 	background-image: url(http://cardam.s3.amazonaws.com/Images/Content/visit.jpg); */
/* 	height: 400px; */
	background-size: 100% auto;
	background-position: center center;
	background-repeat: no-repeat;
}





</style>






<head>
	<title>세상 모든차를 담다, 카담</title>
	<meta charset="utf-8">
	<meta property="og:type" content="website">
	<meta name="title" content="카담, 세상 모든차를 담다">
	<meta property="og:title" content="카담, 세상 모든차를 담다">
	<meta property="og:description" content="내차팔때, 합리적인 가격정책! 견적을 원하시면 카담에 내차를 담아주세요">
	<meta name="description" content="내차팔때, 합리적인 가격정책! 견적을 원하시면 카담에 내차를 담아주세요">
	<meta property="og:image" content="http://cardam.s3.amazonaws.com/Images/Content/cardam8_1.png">
	<meta property="og:url" content="http://www.cardam.kr">
	<meta name="viewport" content="width=device-width", initial-scale="1.0", maximun-scale="1.0", minimum-scale="1.0", user-scaleable="no">


<link rel="stylesheet" href="http://cardam.s3-accelerate.amazonaws.com/css/swiper.min.css">


<!-- swiper css 로딩 후 재조정 -->
<style>
	.photo-container{width:320px; max-width: 768px; height:250px;margin: 0 auto; overflow: hidden; }.swiper-slide{width:320px;height: 250px; background-position:center bottom;background-size:320px 231px; overflow: hidden; background-repeat: no-repeat;}
	
	
	@media (max-width:320px){
		.swiper-slide{
			background-size: 80% auto;
		
		}
	}
</style>

<script src="http://cardam.s3-accelerate.amazonaws.com/js/jquery-1.12.4.min.js"></script>
<script src="http://cardam.s3-accelerate.amazonaws.com/js/jquery.cookie.js"></script>
<!-- <script src="../../../script/jquery.history.js"></script>	 -->

<script>
	$(document).ready(function(){
		
		initHistory();
	
		
		var ua = navigator.userAgent;
		ua = ua.toLowerCase();
				
		if($.cookie('intro')){
				$("#intro").hide();
				$(".header").css("opacity","1");
				$(".main").css("opacity","1");	
				$(".footer").show();		
		}else{
			$( "#intro-logo" ).fadeIn(2300);
			$( "#intro-des" ).fadeIn(2300,function(){
			$( "#intro-logo" ).fadeOut(1300);
			$( "#intro-des" ).fadeOut(1300,function(){
				$("#intro").fadeOut(450);
				$(".footer").show();
				$(".header").css("opacity","1");
				$(".main").css("opacity","1");	
			});	
				$.cookie('intro',1,{ expires : 0.05 });   /* 6~7분 = 0.005 */
			});	
		}
		
		$( ".detail" ).click(function(){
			$( ".notice" ).fadeIn(500);
			$(".footer").hide();
		
			history.replaceState({action:"notice_close"}, null, null);	

			history.pushState({action:"notice_open"}, null, null);		
		});
		
/*
		  if (window.history && window.history.pushState) {
		
		    window.history.pushState('forward', null, './#forward');
		
		    $(window).on('popstate', function() {
		      alert('Back button was pressed.');
		    });
		
		  }
*/
		window.addEventListener('popstate', function(state){
/*
			if(state.state.action == "notice_close"){
				$( ".notice" ).fadeOut(500);
				$(".footer").show();
				$(".footer-info li").css("text-decoration","none !important");
			}
		
*/	
		if(/safari/.test(ua) && !!window.chrome ){   // 사라피가 아니면
				window.addEventListener('popstate', function(event){
					if(event.state.action == "notice_close"){
						$( ".notice" ).fadeOut(500);
						$(".footer").show();
						$(".footer-info li").css("text-decoration","none !important");
					}
					if(event.state.action == "book_close"){
						$(".book").hide();
					}
					
				});
		}else if((/macintosh/.test(ua)) && (/safari/.test(ua))){			
			window.addEventListener('popstate', function(event){
				console.log(event);
					if(event.state.action == "notice_close"){
						$( ".notice" ).fadeOut(500);
						$(".footer").show();
						$(".footer-info li").css("text-decoration","none !important");
					}
					if(event.state.action == "book_close"){
						$(".book").hide();
					}
				});
		}else{   // 사라피이면
			window.setTimeout(function(){  // 사파리에서 작동 시간조절
				window.addEventListener('popstate', function(event){
					console.log(event);
					if(event.state.action == "notice_close"){
						$( ".notice" ).fadeOut(500);
						$(".footer").show();
						$(".footer-info li").css("text-decoration","none !important");
					}
					if(event.state.action == "book_close"){
						$(".book").hide();
					}					
				});
			}, 350);
 		}
			
			
					
		});
		
		
		$(".book-close").click(function(){
			$(".book").hide();
			history.go(-1);

		});
		
		$( ".notice-close" ).click(function(){
			$( ".notice" ).fadeOut(500);
			$(".footer").show();
			$(".footer-info li").css("text-decoration","none !important");
			history.go(-1);
		});
		
		$( ".search" ).click(function(){
			$( ".match-bg" ).fadeIn(500);
			$( ".match" ).fadeIn(500);
	//		$(".footer").hide();			
	
			var parentHegiht = $(".tabcontent").context.body.clientHeight;
			var parentWidth = $(".tabcontent").context.body.clientWidth;
			
	
	
			$(".match-bg").css("height",parentHegiht);
			
			
			
			$(".match").css("top",(parentHegiht - 420)/2);
			$(".match").css("left",(parentWidth - 300)/2);
			
			
			
			if($.cookie('phone')){
//				console.log($.cookie('phone'));
				getApply($.cookie('phone'));
			//	$("#sphone").val($.cookie('phone'));
			}else{
				$("#sphone").focus();	
			}
			
			
		});
		
		
		$( ".match-bg" ).click(function(){
			$( ".match-bg" ).fadeOut(500);
			$( ".match" ).fadeOut(500);
		});


	$('#sphone').on("keydown",function(event){
       if (event.keyCode == 9 || event.keyCode == 13) {              
          getApply($("#sphone").val());
       }

	});
	
	
	$("#match-search").click(function(){
		getApply($("#sphone").val());
	});



	$("#book-open").click(function(){
			$(".book").show();
			history.replaceState({action:"book_close"}, null, null);	

			history.pushState({action:"book_open"}, null, null);	

	});
	
	$("#book-open2").click(function(){
			$(".book").show();

	});
	
	
	
	
	
	});
	

	var getApply = function(phone){
		var innerli = "";
		$.ajax({
			type :'GET',	
			url : "http://cardam.kr/json/get_apply/"+phone,
			dataType:'json',
			async: true,
			cache: false,
			contentType: "application/json;charset=utf-8", 
			success: function(data){
											
				if(data.dealers.length > 1){
					
					for(var i = 0; i < data.dealers.length ; i++){
						innerli += "<li><div class='avatar' style='background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/avatar"+ (i+1) +".png)'></div><div class='name'><a href='tel:" + data.dealers[i].phone +"'><p>" + data.dealers[i].name +"</p><small>딜러님</small></a></div><div class='phone'><a href='tel:" + data.dealers[i].phone +"'><p>" + data.dealers[i].phone +"</p><small>전화연결</small></a></div></li>";
				}
					
					$("#match").html(innerli);
					$("#match-result").html('"곧 연락드리겠습니다"');
						
				}else{
					$("#match").html("");
					$("#match-result").html("내차팔기를 먼저 전행해주세요!");
				}
			},
			error: function(request, textStatus, errorThrown) {
				console.log("error :"+Phone);
			}
		});	
	}
	
	
	var initHistory = function(){
				
		window.history.pushState(null,null,null);
		window.history.go(-1);
	}
	
	
	
</script>




<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--

<h3>Hobe</h3>
-->

<div class="header">
			
			<div class="header-container">
 				<a href="http://cardam.kr"><h1 class="logo"></h1></a><!-- <span class="description"></span> -->

				<div class="deal">
<!-- 					<a href="#">거래조회</a> -->
					
					<ul class="tab">
  <li><a  class="tablinks" id="book-open" onclick="openTab(event, 'Sell',swiper)">내차팔기</a></li>
  <li><a  class="tablinks" onclick="openTab(event, 'Buy',null)">내차견적</a></li>
<!--   <li><a href="#" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></li> -->
</ul>
				</div>
			</div>
		</div>
<div class="main">
	<div id="Sell" class="tabcontent">
		
		
		<div class="mycar">
			<div class="bg"></div>
			<p class="comment1">타시던 차 그대로</p><p class="comment2">수리없이 판매하세요</p>
<!--
				<div class="apply">
					<form action="/car_purchase" method="POST" name="frm">		
						<input type="text" name="model" placeholder="차종">
						<input type="tel" name="phone" placeholder="연락처를 남겨주세요">
						<input type="hidden" name="incoming" value="<?php if(isset($incoming)) echo $incoming?>">
						<input type="button" onclick="javascript:submitChk();" value="담기">
					</form>
				</div>
-->
		</div>
		
		
		
		
		
		<div class="intro-text">
			<h2>차량판매, 하루면 충분합니다</h2>
			<p>엄선된 딜러들을 통해 최고가 비교견적</p>
		</div>
		<div class="photo-container">
		<div class="swiper-wrapper">
		<div class="swiper-slide" style="background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/sm5.png)">
			<div class="estimate-sm5-one">
				<p>A딜러<br><span>2,100만원</span></p>
			</div>
			<div class="estimate-sm5-two">
				<p>B딜러<br><span class="high">2,170만원</span></p>
			</div>
			<div class="estimate-sm5-three">
				<p>C딜러<br><span>2,140만원</span></p>
			</div>
		</div>
		<div class="swiper-slide" style="background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/avante.png)">
			<div class="estimate-avante-one">
				<p>A딜러<br><span>1,675만원</span></p>
			</div>
			<div class="estimate-avante-two">
				<p>B딜러<br><span>1,698만원</span></p>
			</div>
			<div class="estimate-avante-three">
				<p>C딜러<br><span class="high">1,730만원</span></p>
			</div>
			
		</div>
		<div class="swiper-slide" style="background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/ray.png)">
			<div class="estimate-ray-one">
				<p>A딜러<br><span class="high">640만원</span></p>
			</div>
			<div class="estimate-ray-two">
				<p>B딜러<br><span>630만원</span></p>
			</div>
			<div class="estimate-ray-three">
				<p>C딜러<br><span>610만원</span></p>
			</div>
		</div>
		<div class="swiper-slide" style="background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/k7.png)">
			<div class="estimate-k7-one">
				<p>A딜러<br><span>1,760만원</span></p>
			</div>
			<div class="estimate-k7-two">
				<p>B딜러<br><span class="high">1,800만원</span></p>
			</div>
			<div class="estimate-k7-three">
				<p>C딜러<br><span>1,785만원</span></p>
			</div>
		</div>
		</div>
		 
		</div>
				<div class="dealer"></div>
		
		<div class="subject">
				  <h1 class="intro-text2">&nbsp;&nbsp;"중고차, 견적을 위해 필요한 정보는?"</h1>
							<p>통화 전 미리 확인하시면 빠르게 진행할 수 있습니다.<br>✓</p>	 
		</div>
			
		<div class="intro-sell">

			<div class="sell-color">
				<p>차량색상</p>
			</div>
			<div class="sell-indicator">
				<p>주행거리</p>
			</div>


		</div>
	<div class="intro-sell">
			<div class="sell-option">
				<p>편의옵션</p>
			</div>
			<div class="sell-performance">
				<p>안전옵션</p>
			</div>
		</div>

<!--
		<div class="buyview">
		  <h3>London</h3>
		  <p>London is the capital city of England.</p>
		</div>
-->


		
		
	</div>
		<div id="Buy" class="tabcontent"> 
			  	<div class="subject-buy">
<!--
				  <h1 class="intro-text3">&nbsp;&nbsp;"중고차, 시세모르고 잘 파려면?"</h1>
		 					<p>다수의 견적가격을 비교해보세요<br>✓</p>	 
-->
				  <h1 class="intro-text3">&nbsp;&nbsp;"내차에 대해 잘 모르셔도 괜찮습니다."</h1>
		 					<p>무료방문하여 차량옵션 및 상태확인<br>✓</p>	 
			  	</div>
			  	<div class="content-buy">
				  	<div class="lowcar"></div>
				  	<div class="compare">
						<div class="normalPrice">
							<ul class="outReport">
								<li>일반견적</li>
								<li class="price1">1 대 1</li>
								<li class="false1">번거로움</li>
								<li class="satisfaction1">✭✭✭✭☆</li>
							</ul>
						</div>
						<div class="vs">
							<ul class="target">
								<li>VS</li>
								<li>매칭딜러</li>
								<li>견적방식</li>
								<li>가격만족도</li>
							</ul>
						</div>
						<div class="downAuction">
							<ul class="inReport">
								<li>카담견적</li>
								<li class="price2">1 대 3</li>
								<li class="false2">간편함</li>
								<li class="satisfaction2">✭✭✭✭✭</li>
							</ul>
						</div>
				</div>  
				</div>
		
			  	<div class="content-explain">
				 
					<input type="button" value="알아보기" class="detail">
					<div class="line"></div>
					<input type="button" value="번호로 조회" class="search">
				</div>
		
		</div>
	  
	  
	<!--
		<div id="Tokyo" class="tabcontent">
		  <h3>Tokyo</h3>
		  <p>Tokyo is the capital of Japan.</p>
		</div>
	-->
</div>

<div class="footer">
	<div class="footer-content">
		<ul class="footer-info">
			<li><strong>GIEOK</strong></li>
			<li>대표 : 김태홍</li>
			<li>주소 : 경기도 시흥시 산기대학로 237</li>
	<!-- 		<li>메일 : tempnic@naver.com</li> -->
		</ul>
		<ul class="footer-info">
			<li><strong>&nbsp;</strong></li>
			<li>사업자 번호 : 290-41-00154</li>
			<li>사업/제휴문의 : tempnic@naver.com</li>
			<li></li>
		</ul>
	</div>
</div>

<script src="http://cardam.s3-accelerate.amazonaws.com/js/swiper.min.js"></script>

<script>	
    var swiper = new Swiper('.photo-container', {
        effect: 'flip',
        grabCursor: true,
        loop : true,
        speed : 500,
        autoplay: 2800,
        autoResize: true,
        resizeReInit: true
    });   
 
 openTab(event, 'Sell', swiper);  
  
function openTab(evt, cityName, swiper) {
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
	if(swiper){swiper.onResize();}
 //   evt.currentTarget.className += " active";
}    
function submitChk(){
	var phone = document.frm.phone.value;
	
	if(phone.length < 1){
		alert("연락처를 입력해주세요!");
	}else if(phone.length > 1 && phone.length < 9){
		alert("연락처를 정확하지 않습니다!");
	}else{
		document.frm.submit();		
		alert("판매상담신청이 완료되었습니다.");
		$.cookie('phone',phone,{ expires : 10 });
	}
}	
    </script>
 <div class="intro" id="intro">
	<div class="center">
		<div class="logo" id="intro-logo"></div>
		<p class="description" id="intro-des">"세상 모든차를 담다"</p>
	</div>
</div>
<div class="notice" style="background-image: url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/visit.jpg)">
	<div class="notice-top">
		<div class="notice-close"></div>
	</div>
	<div class="notice-center">
		<p>
			내차 견적은 어떻게?<br><br>통화로 간단히 차량정보를 대략적인 견적내며, 상세견적을 위해 직접방문하여 차량을 살피고 최종거래가 성사됩니다.<br>차량의 등급 및 옵션을 미리 확인하시면 빠르고 간편하게 상담하실 수 있습니다. <pre>차량을 수리하지 마시고 견적받으세요.</pre>
		</p>
	</div>
	
 	<div class="notice-bottom"></div>
</div> 

<div class="match-bg"></div>
<div class="match">

	<div class="match-top">
<!-- 		<div class="match-close"></div> -->
		<input type="tel" maxlength="11" name="sphone" id="sphone" placeholder="핸드폰 번호를 입력해주세요" pattern="[0-9]*" inputmode="numeric"><input type="button" value="확인" id="match-search">
	</div>
<!--
	<div class="match-center">
		<p>
			내차 견적은 어떻게?<br><br>통화로 간단히 차량정보를 대략적인 견적내며, 상세견적을 위해 직접방문하여 차량을 살피고 최종거래가 성사됩니다.<br>차량의 등급 및 옵션을 미리 확인하시면 빠르고 간편하게 상담하실 수 있습니다. <pre>차량을 수리하지 마시고 견적받으세요.</pre>
		</p>
	</div>
 	<div class="match-bottom"><input type="tel" name="sphone" id="sphone"/></div> 
-->
	<div class="match-container">
		
		<ul class="match-table" id="match">
<!--
			<li>
				<div class="avatar" style="background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/avatar1.png)"></div>
				<div class="name">
					<p>이화신</p>
					<small>딜러님</small>
				</div>
				<div class="phone">
					<a href="tel:01088642832">
						<p>01088642832</p>
						<small>전화연결</small>
					</a>
				</div>
			</li>
			<li>
				<div class="avatar" style="background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/avatar2.png)"></div>
				<div class="name">
					<p>고정원</p>
					<small>딜러님</small>
				</div>
				<div class="phone">
					<a href="tel:01088642832">
						<p>01088642832</p>
						<small>전화연결</small>
					</a>
				</div>
			</li>
			<li>
				<div class="avatar" style="background-image:url(http://cardam.s3-accelerate.amazonaws.com/Images/Content/avatar3.png)"></div>
				<div class="name">
					<p>표나리</p>
					<small>딜러님</small>
				</div>
				<div class="phone">
					<a href="tel:01088642832">
						<p>01088642832</p>
						<small>전화연결</small>
					</a>
				</div>
			</li>
-->
		</ul>
	<div class="match-bottom" id="match-result">
		
	</div>	
	</div>
	
</div> 

<style>


	.book{
		width: 100%;
		height: 100%;
		min-height: 550px;
		background-color: white;
		z-index: 5000;
		position: absolute;
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
		height: 368px;
		padding: 0 24px 24px;
	}
	
	.book-body ul li {
		font-family: "나눔 고딕", "Naum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", "Dotum", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
		width: 100%;
		margin-top: 18px;
	
	}
	.book-body ul li:first-child {
		margin-top: 0px;
	
	}
	.book-body ul li label{
		
		line-height: normal;
		font-size: 14px;
		padding: 4px 0;
		position: relative;
	}
	.book-body ul li input[type="text"], .book-body ul li input[type="tel"]{
		line-height: normal;
		font-size: 19px;
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
	}
	.book-body ul li input[type="text"]:focus, .book-body ul li input[type="tel"]:focus{
		border-bottom-color: #7047ca;
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
		background-color: #687bea;
		
	}

	.book-body .book-option1{
		margin-top: 16px;
		height: 41px;
		float: left;
		width: 44%;
		border-radius: 5px;
		color: white;
		padding: 9px 0;
		background-color: #687bea;
		
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
		font-size: 22px;
		color: rgba(0, 0, 0, 0.7);
		height: 34px;
		line-height: 25px;
	}
	
	
	.book-body .book-options .switch {
	  position: relative;
	  display: inline-block;
	  width: 60px;
	  height: 30px;
	  padding: 0px;
	  float: right;
	}

	.book-body .book-options .switch input {display:none;}
	
	.book-body .book-options .slider {
	  position: absolute;
	  cursor: pointer;
	  top: 0;
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
	  height: 22px;
	  width: 22px;
	  left: 5px;
	  bottom: 4px;
	  background-color: white;
	  -webkit-transition: .4s;
	  transition: .4s;
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
</style>


<div class="book">
<div class="book-header">
	<a class="book-close">
		<span>×</span>		
	</a>
</div>
<div class="book-body">
	<ul>
		<form action="/car_purchase" method="POST" name="frm">	
		<li>
		<label for="book-car" class="book-car-label">차량</label>
		<input type="text" name="model" placeholder="제조사, 차종, 연식" autocomplete="off" >
		</li>
		<li>
		<label for="book-location" class="book-location-label">위치</label>
		<input type="text" name="location" placeholder="도시명, 간단주소" autocomplete="off" id="location">
		</li>
		<li>
		<label for="book-contact" class="book-contact-label">연락처</label>
		<input type="tel" name="phone" placeholder="-제외하고 입력" autocomplete="off" >
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
	<form>
	</ul>
	
</div>
</div>
<style>
	.sample{
		position: fixed;
		bottom: 80px;
		left: 0px;
		width: auto;
		height: 45px;
		background-color: rgba(0, 0, 0, 0.5);
		color: white;
		font-size: 16px;
		line-height: 45px;
		font-weight: bold;
		text-align: center;
	}
</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAK089uayuWatGDrrFLEWTAENDX-93PM5U"></script> 
 
 
<script type="text/javascript">

	if (navigator.geolocation) {   //geolocation 을 사용할수 있는 HTML5 인지 확인
  navigator.geolocation.getCurrentPosition(function(pos){  //현재 위치값 얻기
          
         GoogleMap.initialize(pos.coords.latitude, pos.coords.longitude); //하단에 선언한 GoogleMap통하여 나머지 처리
            
        }, function (e) {
            console.log({
                0: '위치 정보 검색에 문제가 있습니다.(msg:' + e.message + ')',
                1: '현재 페이지에서 사용자가 위치 정보 검색을 거부했습니다.',
                2: '브라우저가 위치정보를 검색하지 못했습니다.(msg:' + e.message + ')',
                3: '브라우저의 위치 정보 검색 시간이 초과됐습니다.'
            }[e.code]);
 
        }, {
            enableHeighAccuracy: true,
            timeout: 10000,
            maximumAge: 0
        });

    }
    

 GoogleMap = {  

         initialize : function(latitude, longitude) {  
          var geocoder = new google.maps.Geocoder();
           
           

             geocoder.geocode({'latLng' : new google.maps.LatLng(latitude, longitude)} ,
            function(results, status) {
                
                
                if (status == google.maps.GeocoderStatus.OK) {
       //          console.log(results);   // << 이부분!!!
                 document.getElementById("location").value = results[5].formatted_address.substr(5);
//                alert('고객님은 현재 ' + results[1].formatted_address.substr(5) + '로 확인되었습니다!');
            //      document.getElementById("location-view").innerHTML = " " + results[5].formatted_address.substr(5) + " ";                  
                }else{
	          //      document.getElementById("location-view").style = "display:none";
				
                }
            }
          );
         }
 } 
 

</script>

<!--  <div  class="sample" id="location-view"></div>  -->

   
</body>

</html>


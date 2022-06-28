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
		 //  header('Location: https://m.cardam.co.kr');
		} else if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'http'){
			
			header('Location: https://m.cardam.co.kr');
		  
		}else{
			 header('Location: https://www.cardam.co.kr');	
		}
			
*/

	
	?>

<html>
	<head>
		<meta name="viewport" content="width=device-width initial-scale=0.625, user-scalable=no">
		<style type="text/css" media="screen">
/* 			  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothiccoding.css); */

		@font-face {
		  font-family: 'Nanum Gothic Coding';
		  font-style: normal;
		  font-weight: 400;
		  src: url(//fonts.cardam.co.kr/ea/nanumgothiccoding/v6/NanumGothicCoding-Regular.ttf) format('truetype');
		       }
		@font-face {
		  font-family: 'Nanum Gothic Coding';
		  font-style: bold;
		  font-weight: 700;
		  src: url(//fonts.cardam.co.kr/ea/nanumgothiccoding/v6/NanumGothicCoding-Bold.ttf) format('truetype');
		}
		*{box-sizing: border-box;outline: none}
		html{    -webkit-font-smoothing: antialiased;font-smoothing: antialiased;}
		button{cursor: pointer; }
		body, p, div, h1, h2, h4, ul, footer, li{margin: 0;padding: 0;}
		svg{fill: currentColor;}
		main .sub-wrapper div .app-header{position: fixed;top: 0;left: 0;width: 100%;z-index: 70;height: 60px;background-color: #fff}
		.HEADBOX{padding-left: 6%;padding-right: 6%;}	
		.LAYOUT{font-size: 0;}	
/* 		.HEADBOX nav{font-size: 0;}	 */
		
		
		
		.sub-wrapper{max-width: 1024px;margin: 0 auto;}
		.LOGO{background-image: url(https://img.cardam.co.kr/Content/logo_big_trans243x152.png); background-size: 60px 36.5px;width: 60px;height: 36.5px;display: inline-block;margin-top: 15px;background-repeat: no-repeat;vertical-align: top}
		
		.HEADBOX nav .APPLYBOX{display: inline-block;width: 75%;height:100%;float: right;font-family: "Malgun Gothic","Dotum", "Gulim", "Roboto", "Arial", sans-serif !important;}
		
		.HEADBOX nav .APPLYBOX .BKLISTS .BKLIST{text-overflow: ellipsis;width: inherit;font-size: 10pt;height: 20%;}
		
		
		
		.HEADBOX nav .APPLYBOX .BKLISTS .BKLIST span{padding-top: 10px;padding-bottom: 10px;}
		
		main .sub-wrapper div .app-body{}
		.APPTITBOX{padding-left: 6%;padding-right: 6%;/* height: 96px; */padding-top: 15px;padding-bottom: 15px;}
		.APPTITBOX .APPTITINR h1{padding-bottom: 15px;font-size: 20.5pt;color: #484848}
		.APPTITBOX .APPTITINR p{font-size: 12.5pt;color: #484848}
		.APPTITIMG{background-image: url(https://img.cardam.co.kr/Content/desktop/driving.jpg); width: 100%;height: 280px;background-repeat: no-repeat;background-size: cover; background-position: center center}
		.SELLMYCARBOX{width: 162px;height: 162px;background-color: #3c79a5;position: absolute;bottom: -16px;right: 25px;box-shadow: 0 1px 1px 0 #383838;color: #fff;} 
		
		.SELLMYCARBOX .SELLMYCAR{height: auto;}
		.SELLMYCARBOX .SELLMYCAR a{text-decoration: none;font-size: 13.5pt;display: block;text-align: center;padding: 14px 0 14px 0;color: inherit;font-family: 'Nanum Gothic Coding', serif !important ;font-weight: 700;}
		 
		 
		 .SELLMYCARBOX .SELLMYCARCNT{display: inline-block;width: 50%;font-size: 19pt;font-weight: 700;text-align: center;font-family: "Malgun Gothic", sans-serif}
		 
		 .SELLMYCARBOX .SELLMYCARCNT span{font-size: 8pt;}
        
        .APPINTRO{padding: 40px 24px 40px 24px;}  
/*         .APPINTRO .INTROBOXIMG{display: inline-block; width: 200px;height: 100px;} */
        .APPINTRO .INTROIMGBOX .INTROIMG{background-size: contain;background-repeat: no-repeat;width: 200px;height: 120px;margin-bottom: 16px;}
        .APPINTRO .INTROCONBOX{display: inline-block;width: 100%;}        
        .APPINTRO .INTROCONBOX h4{font-family: "Helvetica Neue",Helvetica,sans-serif!important;font-weight: 400 !important; font-size: 18px;margin-bottom: 16px;margin-top: 0;}
        .APPINTRO .INTROCONBOX p{font-family: "Helvetica Neue",Helvetica,sans-serif!important;font-weight: 400 !important; font-size: .875em;line-height: 2;margin-bottom: 16px;margin-top: 0;}

		#HYBIRDIMG {height: 180px;}
		.APPRECMDCAR{background-color: #f6f6ee;}
		.APPRECMDCAR .RECMDCARCON{padding: 15px 24px 15px 24px;}
		.APPRECMDCAR .RECMDCARCON h4{font-size: 22px;color: #548c8c;font-family: "Malgun Gothic","Dotum", "Gulim", "Roboto", "Arial", sans-serif !important;font-weight: 600;padding-top: 10px;padding-bottom: 20px;letter-spacing: 0.02em;}
		.APPRECMDCAR .RECMDCARCON p{font-size: 0.875em;font-family: "Malgun Gothic","Dotum", "Gulim", "Roboto", "Arial", sans-serif !important;font-weight: 200;padding-bottom: 10px;letter-spacing: -.02em;color: #494949;}
		
		.APPREVIEW{background-color: rgb(248, 248, 249);}
		.APPREVIEW .REVIEWTOP {padding: 40px 24px 16px 24px;}
		.APPREVIEW .REVIEWTOP p{font-size: 16px !important;margin-bottom: 8px !important;font-family: "Helvetica Neue",Helvetica,sans-serif!important;color: #494949;font-weight: 200;}
		.APPREVIEW .REVIEWTOP h2{font-size: 22px !important;margin-bottom: 16px !important;font-family: "Helvetica Neue",Helvetica,sans-serif!important;font-weight: 400;}
		.APPREVIEW .REVIEWCENTER{padding: 0 24px 0 24px;}
		.APPREVIEW .REVIEWCENTER #REVIEWTRANS{width: 400%;}  
		.APPREVIEW .REVIEWCENTER .REVIEWIMGBOX{position: relative;}
		.APPREVIEW .REVIEWCENTER .REVIEWIMGBOX:before{	content: "";	display: block;	padding-top: 65%; 	/* initial ratio of 1:1.3 */}
		.APPREVIEW .REVIEWCENTER .REVIEWIMGBOX .REVIEWIMG{background-size: cover;position:  absolute;top: 0;left: 0;bottom: 0;right: 0;}
		
		.APPREVIEW .REVIEWCENTER .REVIEWTXT {background-color: #fff;padding: 24px;}
		.APPREVIEW .REVIEWCENTER .REVIEWTXT p{font-family: "Helvetica Neue",Helvetica,sans-serif!important;font-weight: 400;line-height: 2;font-size: .875em}
		.APPREVIEW .REVIEWCENTER button{text-align: center;color: rgb(255, 255, 255);font-weight: 600;font-size: 24px;text-decoration: none;padding: 4px;border-radius: 0px;border: 2px solid #3c79a5;text-transform: uppercase;outline: none;line-height: 18px;position: absolute;display: inline-block;vertical-align: middle;font-family: ff-clan-web-pro, 'Helvetica Neue', Helvetica, sans-serif;margin: -29px 0px 0px;cursor: pointer;overflow: visible;background-color: #3c79a5;top: 50%;}
		
		
		footer{padding-left: 30px;padding-right: 30px;background-color: #000;font-size: 0;}
		
		.APPFOOTER .FOOTERLI{padding-bottom: 18px;}
		.APPFOOTER .FOOTERLI .FOOTERLOGO{background-image: url('https://img.cardam.co.kr/Content/desktop/footer-logo.png');background-size: 70px auto;height: 50.5px;background-repeat: no-repeat;width: 70px;display: inline-block}
		
		
		.APPFOOTER .FOOTERLI .FOOTERBTN{height: 40px;font-size:.71429rem;line-height: 3.3;font-weight: 600;border: #fff solid 2px;text-align: center;cursor: pointer; }

		.APPFOOTER .FOOTERLI .FOOTERTXT{font-size:.71429rem;font-weight: 600;text-align: left;}
		
		
		@media screen and (min-width: 576px) {
			
			.HEADBOX nav .APPLYBOX .BKLISTS .BKLIST{font-size: 13pt;position: relative;top:-5px;padding-left: 5px}
            .APPTITIMG{background-image: url(https://img.cardam.co.kr/Content/desktop/driving.jpg); width: 100%;height: 380px;background-repeat: no-repeat;background-size: cover; background-position: center top}
			.APPINTRO{padding: 52px 48px 52px 48px;} 
			
			.APPINTRO .INTROBTM{margin-bottom: 40px;}
			
			.APPINTRO .INTROIMGBOX{position: absolute;}
			
			.APPINTRO .INTROCONBOX{padding-left: 200px}
			
			#HYBIRDIMG {height: 275px;}
			.APPRECMDCAR .RECMDCARCON h4 br{display: none;}
			
			.APPREVIEW .REVIEWCENTER button{padding: 13px;font-size: 28px;text-align: center; }   
			
			.APPREVIEW .REVIEWCENTER #REVIEWTRANS{width: 200%;}   
        }
    
		</style>
		<script type="text/javascript">
			
			class BookList{
				constructor(pos = 0){
				
				this.init();
				this.next();
					
				}
				
				init(){
					this.bklists = document.getElementById("BKLISTS");
				}
				
				next(){
					var bklist = this;
					setInterval(function(){
						
						console.log(bklist.addList(bklist.rmList(0)));
						}, 2800);
 				}
				
				addList(child){
					this.bklists.appendChild(child);
				}
				
				rmList(index){
					var temp = this.bklists.children[index];
					this.bklists.removeChild(this.bklists.children[index]);
					return temp;
				}
				
				
				
				
				
			}
			
			
			class Slider{
				constructor(pos = 0){
					this.pos = pos;
					this.init();
					this.posCheck(pos);


				}
				
				
				init(){
					this.target = document.getElementById("REVIEWTRANS");
					this.previousBtn = document.getElementById("previousBtn");
					this.nextBtn = document.getElementById("nextBtn");
					
					this.rvIndex = document.getElementById("rvIndex").children;
					
					var slider = this;
					this.previousBtn.addEventListener('click', this.previous.bind(slider) ,false);
					this.nextBtn.addEventListener('click', this.next.bind(slider) ,false);	
					
/*
					this.target.addEventListener('touchstart', );
					this.target.addEventListener('touchmove', );
					this.target.addEventListener('touchend', );
*/
					
					
					
					this.rvIndex[0].addEventListener('click', function(e){slider.move(0)},false);
					this.rvIndex[1].addEventListener('click', function(e){slider.move(1)},false);
					this.rvIndex[2].addEventListener('click', function(e){slider.move(2)},false);
					this.rvIndex[3].addEventListener('click', function(e){slider.move(3)},false);

					

				}
				

				
				next(){
					this.posCheck(++this.pos);
					this.move(this.pos);
				}
				
				previous(){
					this.posCheck(--this.pos);
					this.move(this.pos);
				}
				
				move(pos){
					this.posCheck(pos);
					this.target.style.transform = "translateX("+ this.pos * -25 +"%)";
				}
				
				posCheck(pos){
					if(pos <= 0){
						this.pos = 0;
						this.previousBtn.style.display = "none";
						this.nextBtn.style.display = "block";
					}else if(pos >= 3){
						this.pos = 3;
						this.nextBtn.style.display = "none";
						this.previousBtn.style.display = "block";
					}else{
						this.pos = pos;
						this.previousBtn.style.display = "block";
						this.nextBtn.style.display = "block";	
					}
					for(var index in this.rvIndex){
						if(Number(index) < 4){
						var scale = 0.5;
						var bgColor = "#3c79a5";
						if(index == pos){
							scale = 1;
							bgColor = "transparent";
						}
						
						this.rvIndex[index].children[0].style.transform = "scale("+scale+")";
						this.rvIndex[index].children[0].style.webkitTransform = "scale("+scale+")";
						this.rvIndex[index].children[0].style.MozTransform = "scale("+scale+")";
						this.rvIndex[index].children[0].style.msTransform = "scale("+scale+")";
						this.rvIndex[index].children[0].style.backgroundColor = bgColor;
						
						}else{
							continue;
						}
					}	
					
				}
				

				
				
			}
			
			
		</script>
		
	</head>
	<body>
		<main>
			<div>
				<div class="sub-wrapper">
					<div style="padding-top: 60px;">
						<div class="app-header">
							<div class="HEADBOX">
								<nav>
									<a class="LOGO" href="#"></a>
									<div class="APPLYBOX">
										<svg id="Capa_1" x="0px" y="0px" viewBox="0 0 486.736 486.736" style="float: left;margin: 21px 5px 0 0" xml:space="preserve" width="20px" height="20px"><path d="M481.883,61.238l-474.3,171.4c-8.8,3.2-10.3,15-2.6,20.2l70.9,48.4l321.8-169.7l-272.4,203.4v82.4c0,5.6,6.3,9,11,5.9   l60-39.8l59.1,40.3c5.4,3.7,12.8,2.1,16.3-3.5l214.5-353.7C487.983,63.638,485.083,60.038,481.883,61.238z" fill="#3c79a5"></path>
										</svg>
										<div style="height: 40px;overflow: hidden;">
											<ul id="BKLISTS" class="BKLISTS" style="height: 250%;list-style-type: none; margin-top: 24px;letter-spacing: -0.5;">
												<li class="BKLIST"><span>기아 2013년 K5 판매상담 부탁드립니다.</span></li>
												<li class="BKLIST"><span>k5 상담을 요청합니다.</span></li>
												<li class="BKLIST"><span>벤츠 빠른 상담을 요청합니다.</span></li>
												<li class="BKLIST"><span>기아 2014년 올 뉴 모닝 상담을 요청합니다.</span></li>
												<li class="BKLIST"><span>GM대우 2010년 라세티 프리미어 판매하고있습니다. 연락주세요.</span></li>
											</ul>
										</div>
									</div>
									<div></div>
								</nav>
							</div>
						</div>
						<div class="app-body">
							<div>
								<div>
									<div class="APPTITBOX" >
										<div class="APPTITINR">
											<div>
												<h1 style="font-family: 'Nanum Gothic Coding', serif !important ;font-weight: 700;">내차판매</h1>
												<p style="font-family: 'Nanum Gothic Coding', serif !important ;font-weight: 400;">타시던 차 그대로 수리없이 판매하세요.</p>
											</div>
										</div>
									</div>
									<div class="APPTITIMGBOX" style="position: relative;">
										<div class="APPTITIMG"></div>
										<div class="SELLMYCARBOX">
											<div>
												<div class="LAYOUT" style="padding: 14px;padding-top: 33px">
													<div class="SELLMYCARCNT">13.5K<br><span>전체상담수</span>
													</div>
													<div class="SELLMYCARCNT"><?php echo date("H")?><br><span>금일상담수</span>
													</div>
												</div>
											</div>
											<div class="SELLMYCAR">
												<a href="javascript:bkOpen();">내차판매신청
													<span style="transition: all 400ms ease; margin-left: 0px; display: inline-block; transform: translate(0px, 4px);" data-reactid="266">
													<svg viewBox="0 0 64 64" width="20px" height="20px" class=" _style_4wJp4e" data-reactid="267"><path fill-rule="evenodd" clip-rule="evenodd" d="M59.9270592,31.9847012L60,32.061058L43.7665291,49.1333275l-3.2469215-3.5932007 L51.3236885,34H4v-4h47.3943481L40.5196075,18.4069672l3.2469215-3.4938126L60,31.946312L59.9270592,31.9847012z" data-reactid="268"></path></svg>
													</span>
												</a>
											</div>
											
										</div>
									</div>
								</div>
								<!-- 카담 특징 소개 -->
								<div>
									<div class="APPINTRO">
										<div style="margin-bottom: 30px;" class="INTROBTM" style="position: relative">
											<div class="INTROIMGBOX">
												<div class="INTROIMG" style="background-image: url('https://img.cardam.co.kr/Content/desktop/trans.png');"></div>
											</div>
											<div class="INTROCONBOX">
												<h4>판매와 구입을 한번에</h4>
												<div>
													<p>차량판매와 구매를 따로하지 않고 한번에 진행하여 더욱 저렴하게 새로운차로 교체할 수 있습니다. 인터넷에서 미리 봐둔 차량을도 상관없습니다.</p>
												</div>
											</div>
										</div>
										<div class="INTROBTM" style="position: relative">
											<div class="INTROIMGBOX">
												<div class="INTROIMG" style="background-image: url('https://img.cardam.co.kr/Content/desktop/sell-option.png');"></div>
											</div>
											<div class="INTROCONBOX">
												<h4>내차옵션 확인하기</h4>
												<div>
													<p>자신의 차량에 대해 잘 알고계신가요? 상담 시 여러가지 추가 옵션 및 연식을 미리 말씀해주세요. 등급부터 색상까지 모두 가격에 반영될 수 있습니다.</p>
												</div>
											</div>
										</div>
										<div style="position: relative">
											<div class="INTROIMGBOX">
												<div class="INTROIMG" style="background-image: url('https://img.cardam.co.kr/Content/desktop/carguy.png');"></div>
											</div>
											<div class="INTROCONBOX">
												<h4>편리한 방문견적</h4>
												<div>
													<p>상담 시 연락처 및 주소를 통해 바로 현장방문 예약을 도와드립니다. 현장에서 차량을 정확히 파악하고 상담부터 판매 및 구입까지 진행하실 수 있습니다.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Hybird 추천 -->
								<div>
									<div style="background-image: url('https://img.cardam.co.kr/Content/desktop/ioniq_hd.jpg'); background-position: center center;background-size: cover;width: 100%;background-repeat: no-repeat;" id="HYBIRDIMG"></div>
									<div class="APPRECMDCAR">
										<div class="RECMDCARCON" >
											<h4>도시의 환경을 생각하는 Hybrid<br>친환경차 어떠세요?</h2>
											<p>부담되는 신차보단 새차같은 중고차로 바꿔보세요</p>
										</div>
									<div>
								</div>
								<!-- 리뷰 -->
								<div>
									<div class="APPREVIEW">
										<div class="REVIEWTOP">
											<p>차를 팔기전</p>
											<h2>판매후기 만나기</h2>
										</div>
										<div class="REVIEWCENTER" style="position: relative;overflow: hidden">
											<div style="margin-left: -12px;">
												<div id="REVIEWTRANS" style="transform: translateX(0%) translateZ(0px);transition: all 500ms cubic-bezier(0.9,0,0.1,1);">
													<div style="float: left;width: 25%;padding-left: 8px;">
														<div>
															<div class="REVIEWIMGBOX">
																<div class="REVIEWIMG" style="background-image: url(https://img.cardam.co.kr/Content/desktop/review_4.jpg);background-position: center center;"></div>	
															</div>															
															<div class="REVIEWTXT">
																<p>"자동차 매매에 무지했던 주부인지라 막상 차를 팔려고 보니 이것저것 걱정이 많았는데요 주변 지인의 소개로 알게된 잇카에 상담을 요청해보니 친절하게 상담해주시고 가격도 남편한테 물어보니 그정도면 얼른 팔라고 해서 판매를 결정했네요"</p>
															</div>
														
														</div>
													</div>
													<div style="float: left;width: 25%;padding-left: 8px;">
														<div>
															<div class="REVIEWIMGBOX">
																<div class="REVIEWIMG" style="background-image: url(https://img.cardam.co.kr/Content/desktop/review_3.jpg);background-position: center right"></div>	
															</div>															
															<div class="REVIEWTXT">
																<p>"2009년 구입해서 무사고고 거의 3만 키로 탔어요.직장도 가깝고 유지비 많이 들고 해서 팔았어요. 가격도 잘 쳐주셨고, 전반적으로 괜춤하네요.시원 섭섭하네요 차 없이 잘 살 수 있겠죠???"</p>
															</div>
														</div>
													</div>
													<div style="float: left;width: 25%;padding-left: 8px;">
														<div>
															<div class="REVIEWIMGBOX">
																<div class="REVIEWIMG" style="background-image: url(https://img.cardam.co.kr/Content/desktop/review_5.jpg);background-position: center center"></div>	
															</div>															
															<div class="REVIEWTXT">
																<p>"덕분에 좋은 견적으로 차량 판매 완료 하였습니다.2014년도에 살짝 경미한 접촉 사고가 있었는데 이 부분도 들어주고 확인 하고 마무리 정검까지 잘해주셔서 더 믿음이 갔고 다음에 또 이용을 할거 같아요. 좋은 가격 제시해주셔서 감사합니다~ 주변 사람들에게도 많이 소개시켜드릴게요!"</p>
															</div>
														</div>
													</div>
													<div style="float: left;width: 25%;padding-left: 8px;">
														<div>
															<div class="REVIEWIMGBOX">
																<div class="REVIEWIMG" style="background-image: url(https://img.cardam.co.kr/Content/desktop/review_6.jpg);background-position: center center"></div>	
															</div>															
															<div class="REVIEWTXT">
																<p>"상담이 너무 친절 했습니다. 3달 된 제 애마를 어쩔 수 없이 처분해야 하는 상황이라 난감했는데요... 친절하게 위로도 해 주시네요^^ 딜러 분들도 금액만 저렴하게 매입하려고만 하지않고 다양한 가능성의 조언도 주셔서 정말 만족 했습니다.^^"</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<button style="left: 0px;" id="previousBtn">
												<svg viewBox="0 0 64 64" width="24px" height="24px">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M4,31.946312l16.233469-17.0331573l3.2469234,3.4938126L12.6056538,30H60v4 H12.6763134l10.8040791,11.5401268l-3.2469234,3.5932007L4,32.061058l0.0729389-0.0763569L4,31.946312z"></path>
												</svg>
											</button>
											<button style="right: 0px;" id="nextBtn">
												<svg viewBox="0 0 64 64" width="24px" height="24px"  data-reactid="419">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M59.9270592,31.9847012L60,32.061058L43.7665291,49.1333275l-3.2469215-3.5932007 L51.3236885,34H4v-4h47.3943481L40.5196075,18.4069672l3.2469215-3.4938126L60,31.946312L59.9270592,31.9847012z" data-reactid="420"></path>
												</svg>
											</button>
										</div>
										<div class="REVIEWBOTTOM">
											<div style="padding: 0 24px 24px 24px">
												<ul style="padding:24px;padding-bottom: 0;list-style-type: none;text-align: center" id="rvIndex">
													<li style="display:inline-block;margin-right:10px;margin-bottom:0;"><button style="-webkit-transition:all 250ms ease-in-out;-webkit-transform:scale(1);-ms-transform:scale(1);height:12px;padding:0;transform:scale(1);transition:all 250ms ease-in-out;color:transparent;background-color:transparent;border:1px solid #3c79a5;border-radius:50%;font-size:1px;width:12px;" id="rvIndex0" index="0" ></button></li>
													<li style="display:inline-block;margin-right:10px;margin-bottom:0;"><button style="-webkit-transition:all 250ms ease-in-out;-webkit-transform:scale(0.5);-ms-transform:scale(0.5);height:12px;padding:0;transform:scale(0.5);transition:all 250ms ease-in-out;color:transparent;background-color:#3c79a5;border:1px solid #3c79a5;border-radius:50%;font-size:1px;width:12px;" id="rvIndex1" index="1"></button></li>
													<li style="display:inline-block;margin-right:10px;margin-bottom:0;"><button style="-webkit-transition:all 250ms ease-in-out;-webkit-transform:scale(0.5);-ms-transform:scale(0.5);height:12px;padding:0;transform:scale(0.5);transition:all 250ms ease-in-out;color:transparent;background-color:#3c79a5;border:1px solid #3c79a5;border-radius:50%;font-size:1px;width:12px;" id="rvIndex2" index="2"></button></li>
													<li style="display:inline-block;margin-right:10px;margin-bottom:0;"><button style="-webkit-transition:all 250ms ease-in-out;-webkit-transform:scale(0.5);-ms-transform:scale(0.5);height:12px;padding:0;transform:scale(0.5);transition:all 250ms ease-in-out;color:transparent;background-color:#3c79a5;border:1px solid #3c79a5;border-radius:50%;font-size:1px;width:12px;" id="rvIndex3" index="3"></button></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<footer>
							<div class="APPFOOTER">
								<div class="FOOTERLI" style="padding-top: 40px;border-bottom: 1px solid #282727;">
									<div class="LAYOUT">
										<div style="display: inline-block;width: 50%;vertical-align: top">
											<a class="FOOTERLOGO"></a>
										</div>
										<div style="display: inline-block;width: 50%;color: white;">
											<div class="LAYOUT" style="padding-left: 10px;">
												<div style="padding-bottom: 16px;">
													<div class="FOOTERBTN" style="background-color: #fff;color: #000">차량오너로 가입하기</div>
												</div>
												<div>
													<div class="FOOTERBTN" >카담 파트너 지원하기</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="FOOTERLI" style="padding-top: 40px;">
									<div class="LAYOUT">
										<div style="display: inline-block;width: 50%;vertical-align: top">
											<span style="color: #C0C0C0;font-size: 12px;font-weight: 500;">© 2017 Cardam Technologies Inc.</span>
										</div>
										<div style="display: inline-block;width: 50%;color: white;">
											<div class="LAYOUT" style="padding-left: 10px;">
												<div style="padding-bottom: 10px;">
													<div class="FOOTERTXT">대표자 : 김태홍</div>
												</div>
												<div style="padding-bottom: 10px;">
													<div class="FOOTERTXT">사업자번호 : 290-41-00154</div>
												</div>
												<div style="padding-bottom: 10px;">
													<div class="FOOTERTXT">시흥시 산기대학로 비즈니스센터 12층</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</footer>
					</div>
					
				</div>
			</div>
		</main>
		
		<script type="text/javascript">
			var review = new Slider();
			var booklist = new BookList();
			
		</script>
		
<style>


	.book{
		width: 100%;
		height: 100%;
		min-height: 550px;
		background-color: white;
		z-index: 5000;
		position: fixed;
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
		list-style: none;
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
		border-bottom-color: #3c79a5;
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
		background-color: #3c79a5;
		
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
	
		<div class="book" id="book">
		<div class="book-header">
			<a class="book-close" onclick="javascript:bkClose();">
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
	
	<script>
		function bkOpen(){
			document.getElementById("book").style.display = "block";
		}
		function bkClose(){
			document.getElementById("book").style.display = "none";
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
	</body>
	
	
	
</html>
<html lang="ko">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<meta charset="utf-8">
	<head>
		<style>
			*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;
				-webkit-overflow-scrolling: auto;
				-webkit-font-smoothing: antialiased;outline:none}
			a{text-decoration: none;color: inherit;cursor: pointer}
			p{word-break: keep-all;}
			li{list-style: none;}
			input{-webkit-appearance: none;}
			button {
			    overflow: visible;
			    border: none;
			    background: transparent none;
			    box-shadow: none;
			    line-height: 1;
			    cursor: pointer;
			}
			body{width: 100%;}
			
			.layerOpened{overflow: hidden;}
			
		
			#wrap {width: 100%}
			
			#wrap .top.bg{
				width: 100%;
				background-color: #3c9283;
				position: relative;
			}
			
			#wrap .top.bg:before{			
				content: '';
				display: block;
				clear: both;
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				height: 100%;
				background: #30c07d;
				animation: AnimationOpacity 3s ease infinite;
			}
			
			#wrap header{
				width: 100%;
				height: 55px;
				border-bottom: 1px solid rgba(255, 255, 255, 0.3);
				
			}
			
			#wrap header .logo{
				background: url('https://img.cardam.co.kr/Content/desktop/footer-logo.png') no-repeat center center;
				background-size: contain;
				width: 55px;
				height: 55px;
				position: absolute;
				left: 20px;
			}
			
			#wrap .fm_body{
				position: relative;

				overflow: hidden;
				box-shadow: 0 1px 0 0 rgba(199,199,199,0.7);
			}
			
			#wrap .fm_body .top{
				padding: 11px 0;
				text-align: center;
				color: #fff;
				
			}
			
			#wrap .fm_body .top .h1_tit{
				display: block;
			    font-size: 0.95rem;
			    line-height: 1.3;
			    transition: all 0.5s;
			    font-weight: 400;
			}
			
			#wrap .fm_body .top .h2_tit{
				display: block;
			    margin-top: 5px;
			    font-size: 1.25rem;
			    line-height: 1.3;
			    transition: all 0.5s;
			    font-weight: 400;
			}
			
			#wrap .fm_body .fm_card{
				margin: 0 10px 10px;
			    padding: 25px 20px 35px;
			    background-color: #ffffff;
			    border-radius: 4px;
			}
			
			#wrap .fm_body .fm_card .card_tit:first-child {
				    margin-top: 0;
			}
			
			#wrap .fm_body .fm_card .card_tit{
				margin: 15px 0 15px;
			    color: #20925d;
			    font-size: 1.05rem;
			}
			
			#wrap .fm_body .fm_card .info_items .item{
				margin-top: 10px;
			}
			
			
			#wrap .fm_body .fm_card .info_items .sel_bg{
				
				border-radius: 4px;
				width: 100%;
				display: block;
			}
			#wrap .fm_body .fm_card .info_items select{
				width: 100%;
				padding-left: 15px;
				padding-right: 30px;
				border: 1px solid #e6e6e6;
				border-radius: 4px;
				color: #333;
				overflow: hidden;
				display: block;
				font-size: 1rem;
				white-space: nowrap;
				text-overflow: ellipsis;
				height: 44px;
				-webkit-appearance: none;
				background: transparent url('https://img.issuepoll.net/card/am/bg_select.png') no-repeat right center;
				background-size: 24px 12px;
				background-color: #f6f6f6;
			}
			
			#wrap .fm_body .fm_card .info_items select:focus{
				border-color: #60c898;
				background-color: #fff;
			}
			#wrap .fm_body .fm_card .info_items .item .lb{			
			    display: block;
			    color: #888888;
			    font-size: 0.85rem;
			    line-height: 1.2em;
			    padding-bottom: 8px;
			}
			#wrap .fm_body .fm_card .info_items .inp_txt{
			    overflow: hidden;
			    width: 100%;
			    padding-left: 15px;
			    padding-right: 30px;
			    padding-top: 6px;
			    padding-bottom: 6px;
			    height: 44px;
			    border: 1px solid #e6e6e6;
			    border-radius: 4px;
			    background-color: #f6f6f6;
			    color: #333333;
			    font-size: 1rem;
			    display: block;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    
			}
			
			#wrap .fm_body .fm_card .info_items .inp_txt:focus{
				border-color: #60c898;
				background-color: #fff;
			}
			
			
			
			
			#wrap .fm_body .fm_card .info_items .item .radio_box{
				position: relative;
				background: #f6f6f6;
				border-radius: 4px;
			}
			
			#wrap .fm_body .fm_card .info_items .item .radio_box:before{
				    content: '';
				    position: absolute;
				    left: 0;
				    top: 0;
				    width: 100%;
				    height: 100%;
				    border-radius: 4px;
				    border: 1px solid #e6e6e6;
				    box-sizing: border-box;
			}
			#wrap .fm_body .fm_card .info_items .item .radio_box:after{
				content: '';
				display: table;
				clear: both;
			}
			
			#wrap .fm_body .fm_card .info_items .item .radio_box .itm{
				    position: relative;
				    float: left;
				    height: 44px;
				    border-radius: 4px;
				    overflow: visible;
				    font-size: 1rem;
				    width: 50%;
			}
			#wrap .fm_body .fm_card .info_items .item .radio_box .itm input{
		        position: absolute;
			    top: 0;
			    left: 0;
			    opacity: 0;
			    width: 100%;
			    height: 100%;
			    overflow: hidden;
			}
			
			
			#wrap .fm_body .fm_card .info_items .item .radio_box .itm input + .txt {
				display: block;
			    width: 100%;
			    height: 100%;
			    text-align: center;
			    line-height: 44px;
			    color: #888888;
				}
			
			#wrap .fm_body .fm_card .info_items .item .radio_box .itm input:checked + .txt {
			    border: 1px solid #e6e6e6;
			    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.08);
			    background: #ffffff;
			    color: #60c898;
			}
			#wrap .fm_body .fm_card .info_items .item .radio_box .itm span:not(.input_chk) {
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    border-radius: 4px;
			}
						
			#wrap .fm_body .fm_card .info_items .item .ph{
				height: 44px;
			}
			
			#wrap .fm_body .fm_card .info_items .item .ph:focus-within > .pl > select, 
			#wrap .fm_body .fm_card .info_items .item .ph:focus-within > .pr > input{
				border-color: #60c898;
				background-color: #fff;
			}
			
			#wrap .fm_body .fm_card .info_items .item .pl {
			    width: 35%;
			    position: absolute;
			}
			#wrap .fm_body .fm_card .info_items .item .pl > select{
				border-right: 0;
				border-radius: 4px 0px 0px 4px;
				text-align-last:center; 
				text-align: justify; 
				
			}
			
			#wrap .fm_body .fm_card .info_items .item .pr {
			    width: 100%;
			    padding-left: 35%;
			    float: right;
			}
			
			#wrap .fm_body .fm_card .info_items .item .pr > input {
			   	padding-left: 30px;
			}
			
			
			#wrap .fm_body .fm_card .line{
				display: block;
				border: 0;
			    width: 98%;
			    height: 1px;
			    margin: 23px 1% 23px 1%;
			    padding-right: 20px;
			    background: #e6e6e6;
			    line-height: 0;
			}
			
			
/*
			#wrap .fm_body .fm_card .agree_items .item .ag input:checked + .txt::before{
				background-size: 16px 12px;
			}
*/
			#wrap .fm_body .fm_card .agree_items{
			    width: 100%;
			    padding: 0 0 0 15px;
			    border-radius: 4px;
			    border: 1px solid #eeeeee;
			    background: #ffffff;
			    box-shadow: 0 1px 2px rgba(0,0,0,0.08);
			}
			
			#wrap .fm_body .fm_card .agree_items .item{
				position: relative;
			    padding: 8px 40px 7px 0;
			    border-top: 1px solid #e6e6e6;
			    font-size: 0.9rem;
			    border: 0;
			    padding-top: 10px;
				padding-bottom: 8px;
			}
			
			#wrap .fm_body .fm_card .agree_items .item .ag{
				position: relative;
				display: block;
				white-space: nowrap;
				line-height: 1.5;
			}
			
			#wrap .fm_body .fm_card .agree_items .item .ag input{
				position: absolute;	    
			    opacity: 0;
			    width: 100%;
			    height: 100%;
			}
			#wrap .fm_body .fm_card .agree_items .item .ag input + .txt{
				padding-left: 25px;
				color: #888;
				display: block;
			}
			
			#wrap .fm_body .fm_card .agree_items .item .ag input:checked + .txt{
				color: #20925d;
			}
						
			#wrap .fm_body .fm_card .agree_items .item .ag input:checked + .txt:before{
				background: url('https://img.issuepoll.net/card/am/ico_checked.png') no-repeat center center;
				background-size: 16px 12px;
			}
			
			#wrap .fm_body .fm_card .agree_items .item .ag input + .txt:before {
			    content: '';
			    position: absolute;
			    left: 0;
			    top: 0;
			    width: 16px;
			    height: 19px;
			    background: url('https://img.issuepoll.net/card/am/ico_check.png') no-repeat center center;
			    background-size: 16px 12px;
			}
			
			
			#wrap .fm_body .fm_card .agree_items .item .agree_open_detail{
				position: absolute;
				top: 50%;
				right: 0;
				width: 31px;
				height: 31px;
				margin-top: -16px;
				
			}
			#wrap .fm_body .fm_card .agree_items .item .agree_open_detail:before{
				content: '';
			    position: absolute;
			    left: 10px;
			    top: 50%;
			    overflow: hidden;
			    width: 11px;
			    height: 11px;
			    margin-top: -4.5px;
			    background: url('https://img.issuepoll.net/card/am/ico_agree_detail.png') no-repeat 0 0;
			    background-size: auto 11px;
			}
			
			#wrap .fm_body .fm_card .agree_txt{
				font-size: 0.8rem;
				text-indent: -8px;
				color: #888;
				margin-left: 12px;
			}
			#wrap .fm_body .fm_card .agree_txt > ul > li:first-child{
				margin-top: 15px;
				margin-bottom: 5px;
			}
			
			
			#wrap .fm_body .fm_card .apply_box{
				text-align: center;
				margin-top: 25px;
			}
			
			#wrap .fm_body .fm_card .apply_box .apply{
				padding: 15px 35px;
			}
			
			
			
			
			#wrap footer{
				background-color: #eceff1;
				text-align: center;
				color: rgb(136, 136, 136);
			}
			
			#wrap footer .layout{
				padding: 20px 0;
			}
			
			#wrap footer .ft_customer{
				font-size: 1.05rem;
			}
			
			#wrap footer .ft_info{
				margin-top: 15px;
				font-size: 0.8rem;

				
			}
			
			#wrap footer .ft_info p span{
				display: inline-block;
			    position: relative;
			    margin: 2px 8px;
			}
			
			#wrap footer .ft_info p span + span::before{
				content: '|';
			    display: block;
			    position: absolute;
			    margin-left: -10px;
			    color: #dddddd;
			}
			




			
.btn {
	border: 1px solid #eee;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
	line-height: 1;
	display: inline-block;
	background-color: #fff;
	color: #20925d;
	border-radius: 5px;
	padding: 20px;
	font-size: 1.2rem;
	
}
		

		
@-moz-keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}

@keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}

@-webkit-keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}
		</style>
		


<!-- sub/buy style -->
<style>
	
</style>
		
<script>
	function init(){
			console.log(document.getElementById('city').focus());
	}
</script>

<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
<script type="text/javascript">
	if( (document.referrer).match(/KC/)){
      kakaoPixel('1924823491651584035').pageView('sell');
    }
</script>
	</head>
	<body onload="init()">
		<div id="wrap">
			<div class="top bg">
				<header>
					<div class="layout">
						<a class="logo" href="./"></a>
					</div>
				</header>
				<div class="fm_body">
					<div class="top">
						<h1 class="h1_tit">다이렉트 내차판매</h1>
						<h2 class="h2_tit">지역·판매정보입력 및 견적신청</h2>
					</div>
					<div class="fm_card">
						<form action="/json_cardam" method="post" target="_blank">
							<input type="hidden" name="type" value="<?=$_GET['type']?>">
							<input type="hidden" name="whence" value="<?php if(isset($_GET['whence'])) echo $_GET['whence']; ?>">
							<input type="hidden" name="day" value="<?=$_GET['day']?>">
							<div class="card_tit">지역 및 판매자정보입력</div>
							<div class="info_items">
								<div class="item">
									<span class="sel_bg">
										<select class="sel" id="city" name="city" id="sidoCombo" required="">
										<option value="">광역시/도 선택</option>
										<option value="1">서울특별시</option>
										<option value="2">경기도</option>
										<option value="3">인천광역시</option>
										<option value="4">부산광역시</option>
										<option value="5">대전광역시</option>
										<option value="6">대구광역시</option>
										<option value="7">광주광역시</option>
										<option value="8">울산광역시</option>
										<option value="9">강원도</option>
										<option value="10">충청남도</option>
										<option value="11">충청북도</option>
										<option value="11">경상남도</option>
										<option value="12">경상북도</option>
										<option value="13">전라남도</option>
										<option value="14">전라북도</option>
										<option value="15">제주특별자치도</option>
										<option value="16">세종특별자치시</option>
									</select>
									<span>
								</div>
								<div class="item">
									<p class="lb">보유차랑정보</p>
									<p>
										<span>
											<input class="inp_txt" type="text" id="carInfo" name="carInfo" placeholder="예시) 아반떼AD 17년식" maxlength="40" required=""/>
										</span>
									</p>
								</div>
								
								<div class="item">
									<p class="lb">사고유무</p>
									<p class="radio_box">
										<span class="itm" for="accident_false">
											<input type="radio" name="accident" value="0" id="accident_false" checked="" />
											<span class="txt">무사고</span>
										</span>
										<span class="itm" for="accident_true">
											<input type="radio" name="accident" value="1" id="accident_true" />
											<span class="txt">사고</span>
										</span>										
									</p>
								</div>
								
								<div class="item">
									<p class="lb">본인명의 휴대폰번호</p>
									<p class="ph">
										<span class="pl">
											<select name="local" id="" class="sel">
												<option value="1">내국인</option>
												<option value="0">외국인</option>
<!--
												<option value="010">SKT</option>
												<option value="010">KT</option>
												<option value="010">LG U+</option>
												<option value="010">SKT알뜰폰</option>
												<option value="010">KT알뜰폰</option>
												<option value="010">LGT알뜰폰</option>
-->
											</select>
										</span>
										<span class="pr">
											<input class="inp_txt" type="tel" name="phone" minlength="11" placeholder="'-' 없이 입력" maxlength="11" required=""/>
										</span>
									</p>
								</div>
							</div>
							
							
							
							<hr class="line"></hr>
							
							<div class="agree_items">
								<p class="item">
									<span class="ag" for="chk_agree">
										<input type="checkbox" id="chk_agree" name="chk_agree" checked=""/>
										<span class="txt">개인정보 수집·이용 동의(필수)</span>
									</span>
									<a href="javascript:void(0);" class="agree_open_detail"></a>
								</p>
							</div>
							<div class="agree_txt">
								<ul>
									<li>- 개인정보 수집 이용 동의는 차량견적 외 목적으로는 이용하지 않습니다.</li>
									<li>- 보다 정확한 차량시세 및 견적을 도와드리기 위해 상담원이 전화드릴 수 있습니다.</li>
								</ul>
							</div>
							<div class="apply_box">
								<button type="submit" class="btn apply">시세 및 견적신청</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<footer>
				<div class="layout">
					<div class="ft_customer">
						<p>
							<a href="tel:1500-0000">고객센터 1500-0000</a>
						</p>
						<p>
							<a href="tel:1500-0000">사업제휴센터 1500-0000</a>
						</p>
					</div>
					<div class="ft_info">
						<p>경기도 시흥시 산기대학로 비즈니스센터 12층</p>
						<p>
							<span>대표이사 김태홍</span>
							<span>사업자등록번호 290-41-00154</span>
						</p>
						<p>ⓒ CARDAM & GIEOK INC.</p>
					</div>
				</div>
			</footer>
		</div>



	</body>
</html>
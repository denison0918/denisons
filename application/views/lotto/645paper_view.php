<html>
	<head>

	<style>	
		
	/* common */	
		*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: auto;-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
		a{text-decoration: none;color: inherit;cursor: pointer}
		input{-webkit-appearance: none;}
		p{word-break: keep-all;}
		li, ol{list-style: none;}
		button {overflow: visible;border: none;background: transparent none;box-shadow: none;line-height: 1;cursor: pointer;}
		select::-ms-expand {display: none;}
		body{width: 100%;font-family: 'Noto Sans KR','맑은 고딕','Malgun Gothic','돋움', Dotum, sans-serif;    letter-spacing: -0.05em;}
		h1, h2, h3, h4, span, strong{line-height: 1em;}
				
	/* common end */

		p, li, dd{font-weight: 300; color: #767676;line-height: 22px;}

			
		.container{display: flex;  align-items: center;justify-content: center;height: 100%;background-color: #e2e2e2}
		.paper-border{border: none;padding: 8px;background-color: #fff}
		.paper645{width: 335px;padding: 23px 25px 25px}
		.paper645 h2{font-size: 16px;color: #2d2d2d;border-bottom: 1px solid #ddd;padding-bottom: 15px}
		.paper645 .date{padding: 20px 25px 17px;border-bottom: 1px dashed #ddd;}
		.paper645 .date h3 span {float: left;background-image: url('/Images/Content/lotto/logo-paper.png');width: 92px;height: 39px;text-indent: -999em}
		.paper645 .date h3 strong{float: right;padding-top: 14px;font-size: 25px;color: #333;}
		.paper645 .date h3::after{clear: both;display: block;content: "";}
		.paper645 .date ul {margin-top: 18px}
		.paper645 .date ul li{    font-size: 14px;}
		.paper645 .date ul li span{ display: inline-block;letter-spacing: 0.15em;}
		.paper645 .date ul li:last-child span{letter-spacing: 0.35}
		.paper645 .date ul li ~ li {margin-top: 3px;}
		
		.paper645 .date .barcode{margin-top: 8px;font-size: 13px}

		.paper645 .selected{padding-top: 15px}
		
		
		.paper645 .selected ul{padding-bottom: 8px;border-bottom: 1px dashed #ddd}
		
		.paper645 .selected ul li{font-size: 15px}
		.paper645 .selected ul li strong{color: #1d1d1d;font-weight: normal;height: 24px;display: inline-block}
		.paper645 .selected ul li strong span{width: 16px;display: inline-block}
		.paper645 .selected ul li strong span ~ span{width: 60px;}
		
		.paper645 .selected ul li .nums{float: right;height: 24px;padding-top: 2.5px}
		.paper645 .selected ul li .nums span{width: 23px;float: left;margin-right: 11px}
		.paper645 .selected ul li .nums::after{clear: both;content: "";display: block}
		
		.paper645 .selected .total{padding-top: 19px;text-align: right;font-size: 15px;}
		.paper645 .selected .total .won{padding-right: 2px;font-family: '돋움', Dotum, sans-serif;}
		.paper645 .selected .total strong ~ strong{padding: 15px}
		
		
		.ball_645 {display:inline-block; position: relative; left: -4px; top: -3px; border-radius:100%; text-align:center; vertical-align:middle; color:#fff; font-weight:500; /* text-shadow: 0px 0px 2px rgba(0, 0, 0, 1); */}
		.ball_645.lrg {width:60px; line-height:56px; font-size:28px}
		.ball_645.sml {width:24px; line-height:21px; font-size:13px}
		.ball_645.not {color:#777}
		.ball_645.sml.not {font-weight:300}
		.ball_645.ball1 {background:#fbc400; text-shadow: 0px 0px 3px rgba(73, 57, 0, .8)}
		.ball_645.ball2 {background:#69c8f2; text-shadow: 0px 0px 3px rgba(0, 49, 70, .8)}
		.ball_645.ball3 {background:#ff7272; text-shadow: 0px 0px 3px rgba(64, 0, 0, .8)}
		.ball_645.ball4 {background:#aaa; text-shadow: 0px 0px 3px rgba(61, 61, 61, .8)}
		.ball_645.ball5 {background:#b0d840; text-shadow: 0px 0px 3px rgba(41, 56, 0, .8)}
	</style>


<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157922949-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157922949-2');
</script>
		
	</head>
	<body>
		
		<div class="container">
					
			<div class="paper-border">
				<div class="paper645">
					<h2>인터넷 로또 6/45 구매번호</h2>
				<div class="date">
					<h3>
						<span>복권 로또 365</span>
						<strong>제 <?=$buyRound?>회</strong>
					</h3>
					<ul>
						<li><span>발 행 일</span> : <?=$issueDay?></li>
						<li><span>추 첨 일</span> : <?=$drawDate?></li>
						<li><span>지급 기한</span> : <?=$payLimitDate?></li>
					</ul>
					<p class="barcode">
						<span><?=$barCode1?></span>
						<span><?=$barCode2?></span>
						<span><?=$barCode3?></span>
						<span><?=$barCode4?></span>
						<span><?=$barCode5?></span>
						<span><?=$barCode6?></span>
					</p>
				</div>
				<div class="selected">
					<ul>
						
						<?php foreach($arrGameChoiceNum as $GameChoiceNum ){
							
							if($GameChoiceNum == false){
								break;
							}
							$nums = explode('|', $GameChoiceNum);
							
						?>
						<li><strong><span><?=$nums[0]?></span><span><?=$nums[7]?></span></strong>
						<div class="nums"><?=$nums[1]?><?=$nums[2]?><?=$nums[3]?><?=$nums[4]?><?=$nums[5]?><?=$nums[6] ?></div>
						</li>
						<?php };?>
					</ul>
					<div class="total">
						<strong>합계</strong><strong><span class="won">￦</span><?=$nBuyAmount?></strong>
					</div>
				</div>
					
				</div>
			</div>	
		</div>
			
		
	</body>
</html>
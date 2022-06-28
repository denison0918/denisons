<html>
	<head>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
		<style>
			
	@import url(//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css);
	@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
	
	*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: auto;-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
	a{text-decoration: none;color: inherit;cursor: pointer}
	input{-webkit-appearance: none;}
	p{word-break: keep-all;}
	li{list-style: none;}
	button {overflow: visible;border: none;background: transparent none;box-shadow: none;line-height: 1;cursor: pointer;}
	select::-ms-expand {display: none;}
	body{width: 100%;}
	.sqa{font-family: 'Spoqa Han Sans', 'Sans-serif'; }
	.default-btn{font-size: 17px;border-radius: 5px;padding: 10px;width:100%;height: 45px;background-color: #686868;color: #fff;font-weight: 600;   }

	.container{display: flex;flex-direction: column;font-family: "Nanum Gothic", sans-serif;}
	
	.tit{padding: 0 20px;margin: 50px 0}
	
	.listBox{padding: 0 20px}
	.listBox .mon{z-index: 5;background-color: #fff;display: inline-block;position: relative;width: 40px;font-size: 15px;color: #7c7c7c}
	.listBox:before{display: block;width: 100%;height: 0.8px;content: "";background-color: #aeaeae;position: relative;top: 9px;left: 20px;z-index: 5;}
	
	.listBox ul{padding: 22px 0}
	.listBox li{padding: 15px 0}
	.listBox .list{position: relative;}	
	
	.listBox .list .ico_lotto{position: absolute; left: 0;top: 5px;background-image: url('/Images/Content/NanumLotto_BI_150x150.png');background-position: center center;background-size: 30px 30px;background-repeat: no-repeat;width: 40px;height: 40px;border: 0.5px  solid #aeaeae;border-radius: 40px;}
	.listBox .list .ico_520{position: absolute; left: 0;top: 5px;background-image: url('/Images/Content/520_BI_200x37.png');background-position: center center;background-size: 34px 7px;background-repeat: no-repeat;width: 40px;height: 40px;border: 0.5px  solid #aeaeae;border-radius: 40px;}
	.listBox .list .ico_lottery{position: absolute; left: 0;top: 5px;background-image: url('/Images/Content/Lottery_200x117.jpg');background-position: center center;background-size: 34px 21px;background-repeat: no-repeat;width: 40px;height: 40px;border: 0.5px  solid #aeaeae;border-radius: 40px;}
	.listBox .list .txt{padding-left: 60px}	
	
	.listBox .list .txt .price{margin-bottom: 5px}
	.listBox .list .txt .win{color: #597bd3;font-weight: 600;}
	.listBox .list .txt .lose{color: #ac5151;font-weight: 600;}
	
	
	.listBox .list .txt .des{color: #7c7c7c;font-size: 13px;letter-spacing: 0.0001em;pointer-events: none}
	.listBox .list .round{position: absolute;right: 0;top: 3.5px;color: #7c7c7c; font-size: 13px }
		</style>


<script data-ad-client="ca-pub-9188264620616753" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>		
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157922949-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157922949-2');
</script>

<script>
	function detailPop(orderNo, barcode, issueNo){
		window.open("/detailpop?orderNo="+orderNo+"&barcode="+barcode.toString()+"&issueNo="+issueNo);
	}
	
</script>
		
	</head>
	<body>
		<div class="container">

			<div class="tit"><h2>구매/당첨내역 (구매일자순)</h2></div>
						
				<?php foreach($GAME as $MONTH => $ROUND_NUM){ 

				?>
					<div class="listBox">	
					<p class="mon"><?=$MONTH?>월</p>
					<ul>
				
					<?php foreach($ROUND_NUM as $KEY => $VALUE){ 
						
						if($VALUE['ORDERNO']){
					?>
						<li onclick="javascript:detailPop('<?=$VALUE['ORDERNO']?>','<?=$VALUE['BARCODE']?>','<?=$VALUE['ISSUENO']?>');">					
					<?php
						}else{
					?>		
						<li>	
					<?php
						}
					?>		
							<div class="list">
								<span class="<?=$VALUE['LOTTERY_TYPE']?>"></span>
								<div class="txt">	
									<p class="price sqa <?=$VALUE['CLASS']?>"> <?=$VALUE['REPORT']?></p>
									<p class="des">추첨일 : <?=$VALUE['DRAW_DATE']?></p>
								</div>
								<span class="round"><?=$KEY?>회</span>
							</div>
						</li>
					<?php
						 }
					?>
				
					</ul>
					</div>	
					
				<?php
					 }
				?>
			
		</div>		
	</body>
</html>
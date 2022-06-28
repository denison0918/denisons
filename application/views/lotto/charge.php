<html>
	<head>

	<style>	
		*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: auto;-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
		a{text-decoration: none;color: inherit;cursor: pointer}
		input{-webkit-appearance: none;}
		p{word-break: keep-all;}
		li{list-style: none;}
		button {overflow: visible;border: none;background: transparent none;box-shadow: none;line-height: 1;cursor: pointer;}
		
		select::-ms-expand {display: none;}
		body{width: 100%;}
		
		
		
		.df-pd{padding: 0 20px;}
		
		.container{display: flex;flex-direction: column;}
		
		.container .main{height: 300px}
		.tit{text-align: center;}
		
		.charge-box{margin-top: 20px}
		.charge-box .top{margin-bottom: 20px}
		
		.charge-box input{height: 30px}
		.charge-box .bottom{margin-top: 20px;text-align: center }
		.charge-box .buyBtn{font-size: 17px;border-radius: 5px;padding: 10px;width: 100%;height: 45px;background-color: #686868;color: #fff;font-weight: 600}
		
		
		
		
		
		.charge-box .sel-box{position: relative; }
		.charge-box .sel-box .amt-txt{font-size: 13px;position: absolute;top: 15px;text-indent: 20px}
		.charge-box .sel-box .amt-select{-webkit-appearance: none;appearance: none;color: #4c4c4c;width: 100%;height: 75px;font-size: 25px;background-color: transparent;border: 1px solid #a2a2a2;padding-left: 20px;padding-top: 15px}
		.charge-box .sel-box .ico{position: absolute;top: 36px;right: 20px;}
		
		
		.container .bottom{}
		
		.container .bottom ul li{font-size: 13px}
		
	</style>


<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">

<script data-ad-client="ca-pub-9188264620616753" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>		
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

		
		<main>
			
			<div class="container">
				
				<div style="height: 50px" class="nav">
					
					
				</div>
				
				<div class="main df-pd">
					
					<h2 class="tit">예치금 충전</h2>
					<div class="charge-box">
					<form name="frm" method="post" target="_self" action="/payInit">
					
					<div class="sel-box">
						<p class="amt-txt">충전금액</p>
						<svg class="ico" viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 15px; width: 15px; display: block; fill: currentcolor;"><path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z" fill-rule="evenodd"></path></svg>
						<select id="Amt" name="Amt" class="amt-select" title="예치금 충전 금액 선택">
							<option value="5000" selected="">5,000</option>
							<option value="10000">10,000</option>
							<option value="20000">20,000</option>
							<option value="30000">30,000</option>
							<option value="50000">50,000</option>
							<option value="100000">100,000</option>
							<option value="200000">200,000</option>
							<option value="300000">300,000</option>            							
						</select>	
					</div>
					
					
					
						<div class="top">
						
						</div>
						
						<div>
							이름 : <?=$username?>						
						</div>
						
						<div>
							보유 예치금 : <?=$deposit?>	
						</div>
						<div class="bottom">
								<button class="buyBtn btn-box" name="charge" value=1>결제하기</button>		
						</div>
						</form>
					</div>
					
					
				</div>
				<div class="bottom df-pd">				
					<ul>
						<li>지정계좌 입금안내</li>
						<li>- 1회성 입금계좌이며, 케이뱅크의 가상계좌가 발급됩니다.</li>
						<li>- 발급된 계좌번호로 입금확인이 완료되면 예치금이 충전됩니다.</li>
						<li>- 예금주는 주식회사 동행복권 입니다.</li>
						<li>- 가상계좌로 입금 후 예치금 확인까지는 최대 5분 정도 소요될 수 있습니다.</li>
						<li>- 입금계좌는 케이뱅크의 가상계좌가 제공됩니다. (케이뱅크 고객은 이체 수수료가 무료입니다.)</li>
					</ul>
				</div>		

				
		</div>
		</main>
		
	</body>
</html>
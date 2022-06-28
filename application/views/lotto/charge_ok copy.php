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
		.charge-box .sel-box .amt-select{-webkit-appearance: none;appearance: none;color: #4c4c4c;width: 100%;height: 75px;font-size: 25px;background-color: transparent;border: 1px solid #a2a2a2;padding-left: 20px;padding-top: 30px;border-radius: 5px;pointer-events: none}
		.charge-box .sel-box .ico{position: absolute;top: 36px;right: 20px;}
		
		
		.container .bottom{}
		
		.container .bottom ul li{font-size: 13px}
		
	</style>


<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
		
	</head>
	<body>

		
		<main>
			
			<div class="container">
				
				<div style="height: 50px" class="nav">
					
					
				</div>
				
				<div class="main df-pd">
					
					<h2 class="tit">지정계좌(1회성) 입금</h2>
					<div class="charge-box">
					<form name="frm" method="post" target="_self" action="/payInit">
					
					<div class="sel-box">
						<p class="amt-txt">케이뱅크 ( 예금주 : 동행복권 )</p>
						<svg xmlns="http://www.w3.org/2000/svg" class="ico" x="0px" y="0px"
width="20" height="20"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M28.66667,14.33333c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v93.16667c0,3.956 3.21067,7.16667 7.16667,7.16667c3.956,0 7.16667,-3.21067 7.16667,-7.16667v-93.16667h93.16667c3.956,0 7.16667,-3.21067 7.16667,-7.16667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667zM57.33333,43c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v86c0,7.91917 6.41417,14.33333 14.33333,14.33333h86c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-86c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM57.33333,57.33333h86v86h-86z"></path></g></g></svg>
						<p id="Amt" name="Amt" class="amt-select" >7010 - 3012 - 0115 - 59</p>	
					</div>
					
					
					
						<div class="top">
						
						</div>
						
						<div>
							주문번호 : 201908161738568735567						
						</div>
						<div>
							거래번호 : dhlot0010m03011908161739009442						
						</div>
						<div>
							회원명(ID) : 	홍길동(ktm9024)					
						</div>
						<div>
							결제금액 : 20,000원					
						</div>
						<div>
							발급일시 : 2019-08-16 17:39:01						
						</div>
						<div>
							계좌사용만료일 : 2019-08-17						
						</div>
						<div>
							발급계좌번호 : [케이뱅크] 7010 - 3006 - 8424 - 31						
						</div>
						
						<div class="bottom">
								<button class="buyBtn btn-box" name="charge" style="margin-top: 70px">메인으로 돌아가기</button>		
						</div>
						</form>
					</div>
					
					
				</div>
	

				
		</div>
		</main>
		
	</body>
</html>
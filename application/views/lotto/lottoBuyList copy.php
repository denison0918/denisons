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
	
	.listBox .list .ico{position: absolute; left: 0;top: 5px;background-image: url('http://img.cardam.co.kr/Content/NanumLotto_BI_150x150.png');background-position: center center;background-size: 30px 30px;background-repeat: no-repeat;width: 40px;height: 40px;border: 0.5px  solid #aeaeae;border-radius: 40px;}
	.listBox .list .txt{padding-left: 60px}	
	
	.listBox .list .txt .price{font-weight: 600;margin-bottom: 5px}
	.listBox .list .txt .win{color: #597bd3;}
	.listBox .list .txt .lose{color: #ac5151;}
	
	
	.listBox .list .txt .des{color: #7c7c7c;font-size: 14px;letter-spacing: 0.0001em;pointer-events: none}
	.listBox .list .round{position: absolute;right: 0;top: 3.5px;color: #7c7c7c; font-size: 13px }
		</style>
		
	</head>
	<body>
		<div class="container">

			<div class="tit"><h2>구매/당첨내역</h2></div>
			
			<div class="listBox">
				<p class="mon">8월</p>
				<ul>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa">미추첨</p>
								<p class="des">추첨일 : 2019-08-24</p>
							</div>
							<span class="round">873회</span>
						</div>
					</li>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa win">+5,000 원 (당첨)</p>
								<p class="des">추첨일 : 2019-08-17</p>
							</div>
							<span class="round">872회</span>
						</div>
					</li>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa lose"> - 원 (낙첨)</p>
								<p class="des">추첨일 : 2019-08-10</p>
							</div>
							<span class="round">871회</span>
						</div>
					</li>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa lose"> - 원 (낙첨)</p>
								<p class="des">추첨일 : 2019-08-03</p>
							</div>
							<span class="round">870회</span>
						</div>
					</li>
					
				</ul>
			</div>
			
			<div class="listBox">
				<p class="mon">7월</p>
				<ul>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa lose"> - 원 (낙첨)</p>
								<p class="des">추첨일 : 2019-07-27</p>
							</div>
							<span class="round">869회</span>
						</div>
					</li>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa lose"> - 원 (낙첨)</p>
								<p class="des">추첨일 : 2019-07-20</p>
							</div>
							<span class="round">868회</span>
						</div>
					</li>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa win">+50,000 원 (당첨)</p>
								<p class="des">추첨일 : 2019-07-13</p>
							</div>
							<span class="round">867회</span>
						</div>
					</li>
					<li>
						<div class="list">
							<span class="ico"></span>
							<div class="txt">	
								<p class="price sqa lose"> - 원 (낙첨)</p>
								<p class="des">추첨일 : 2019-07-06</p>
							</div>
							<span class="round">866회</span>
						</div>
					</li>
				</ul>
			</div>
			
			
		</div>		
	</body>
</html>
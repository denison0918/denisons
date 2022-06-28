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

		
		<script>
			function goMain(){
				window.location.href = '/get_lmyinfo';
			}
			
		</script>
	</head>
	<body>

		
		<main>
			
			<div class="container">
				
				<div style="height: 50px" class="nav">
					
					
				</div>
				
				<div class="main df-pd">
					
					<h2 class="tit">지정계좌(1회성) 입금</h2>
					<div class="charge-box">
					
					
					<div class="sel-box" >
						<p class="amt-txt">케이뱅크 ( 예금주 : 동행복권 )</p>
						<svg xmlns="http://www.w3.org/2000/svg" class="ico" x="0px" y="0px"
width="20" height="20"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#666666"><path d="M28.66667,14.33333c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v93.16667c0,3.956 3.21067,7.16667 7.16667,7.16667c3.956,0 7.16667,-3.21067 7.16667,-7.16667v-93.16667h93.16667c3.956,0 7.16667,-3.21067 7.16667,-7.16667c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667zM57.33333,43c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v86c0,7.91917 6.41417,14.33333 14.33333,14.33333h86c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-86c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM57.33333,57.33333h86v86h-86z"></path></g></g></svg>
						<p id="Amt" name="Amt" class="amt-select"><?=$account?></p>

					</div>
					
<script>
	
	
function fallbackCopyTextToClipboard(text) {
  var textArea = document.createElement("textarea");
  textArea.value = text;
  textArea.style.position="fixed";  //avoid scrolling to bottom
  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
 //   console.log('Fallback: Copying text command was ' + msg);
    alert('<?=$account?> 복사완료!');
  } catch (err) {
 //   console.error('Fallback: Oops, unable to copy', err);
  }

  document.body.removeChild(textArea);
}
function copyTextToClipboard(text) {
  if (!navigator.clipboard) {
    fallbackCopyTextToClipboard(text);
    return;
  }
  navigator.clipboard.writeText(text).then(function() {
 //   console.log('Async: Copying to clipboard was successful!');
    alert('<?=$account?> 복사완료!');
  }, function(err) {
 //   console.error('Async: Could not copy text: ', err);
  });
}

var copyAmtBtn = document.querySelector('.sel-box');


copyAmtBtn.addEventListener('click', function(event) {

  copyTextToClipboard('<?= str_replace(" - ", "", $account)?>');
});


</script>		

<script data-ad-client="ca-pub-9188264620616753" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157922949-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157922949-2');
</script>			
					
						<div class="top">
						
						</div>
						
						<div>
							주문번호 : <?=$orderNum?>						
						</div>
						<div>
							거래번호 : <?=$tradeNum?>						
						</div>
						<div>
							회원명(ID) : 	<?=$userName?>(<?=$userId?>)					
						</div>
						<div>
							결제금액 : <?=$price?>원					
						</div>
						<div>
							발급일시 : <?=$issueDay?>						
						</div>
<!--
						<div>
							계좌사용만료일 : <?=$expDay?>						
						</div>
-->
						<div>
							결제방식 : 고정계좌 입금						
						</div>

						<div>
							발급계좌번호 : [케이뱅크] <?=str_replace(' - ','',$account)?>						
						</div>
						
							<div class="bottom">
									<button class="buyBtn btn-box" name="charge" style="margin-top: 70px" onclick="javascript:goMain();">메인으로 돌아가기</button>		
							</div>
						
					</div>
					
					
				</div>
	

				
		</div>
		</main>
		
	</body>
</html>
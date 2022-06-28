<html>
	<head>
<script>
	function abc(){document.frm.submit();}
</script>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">

	</head>
	<body onload="abc()">
		<div class="container">
			<form name="frm" method="post" target="_self" action="https://web.nicepay.co.kr/smart/paySmart.jsp">
					<input type="hidden" name="PayMethod" value="<?=$PayMethod?>">			<!-- 결제 수단 -->
					<input type="hidden" name="GoodsName" value="<?=$GoodsName?>"> 		<!-- 결제 상품명 -->
					<input type="hidden" name="GoodsCnt" value="<?=$GoodsCnt?>"> 			<!-- 결제 상품개수 -->
					<input type="hidden" name="BuyerTel" value="<?=$BuyerTel?>"> 			<!-- 구매자 연락처 -->
					<input type="hidden" name="Moid" value="<?=$Moid?>"> 				<!-- 상품 주문번호 -->
					<input type="hidden" name="MID" value="<?=$MID?>"> 				<!-- 상점 아이디 -->
           
					<!-- IP -->
					<input type="hidden" name="UserIP" value="<?=$UserIP?>">    		<!-- 회원사고객IP -->
					<input type="hidden" name="MallIP" value="<?=$MallIP?>">      		<!-- 상점서버IP -->
					              
					<!-- 옵션 -->
					<input type="hidden" name="MallUserID" value="<?=$MallUserID?>"> 		<!-- 회원사고객아이디 -->
					<input type="hidden" name="VbankExpDate" value="<?=$VbankExpDate?>"> 	<!-- 가상계좌입금만료일 -->
					<input type="hidden" name="BuyerEmail" value="<?=$BuyerEmail?>">       <!-- 구매자 이메일 -->         
					<input type="hidden" name="GoodsCl" value="<?=$GoodsCl?>">          <!-- 상품구분(실물(1),컨텐츠(0)) -->
					<input type="hidden" name="CharSet" value="<?=$CharSet?>">    <!-- 인코딩 설정 -->
					<input type="hidden" name="ReturnURL" value="<?=$ReturnURL?>">         <!-- Return URL -->
					
					<!-- 변경 불가능 -->
					<input type="hidden" name="ediDate" value="<?=$ediDate?>">          <!-- 전문 생성일시 -->
					<input type="hidden" name="EncryptData" value="<?=$EncryptData?>">      <!-- 해쉬값 -->
					<input type="hidden" name="TrKey" value="<?=$TrKey?>">            <!-- 필드만 필요 -->
					<select id="Amt" name="Amt" title="예치금 충전 금액 선택">
									    <option value="5000">5,000원</option>
									    <option value="10000">10,000원</option>
            							<option value="20000" selected="">20,000원</option>
            							<option value="30000">30,000원</option>
            							<option value="50000">50,000원</option>
            							<option value="100000">100,000원</option>
            							<option value="200000">200,000원</option>
            							<option value="300000">300,000원</option>
            		</select>
            		<input type="hidden" name="BuyerName" value="<?=$BuyerName?>">  
						<button>결제하기</button>
				</form>
			
			
		</div>
			
		
	</body>
</html>
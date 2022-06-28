<div class="slide-layer" id="buy-include-html">
<div class="layer-bg"></div>
<h2 class="ly-title">
	<span class="tit">내게 맞는 서비스 마법사</span>
</h2>
<button type="button" class="layer_closer" onclick="goBack();" title="close">
	<span class="blind">close</span>
</button>
<style>
.carno{
	border: 0;
	border-radius: 0;
	background-color: transparent;
	padding: 8px;
	border-bottom: 1px solid #fff;
	color: #fff;
	font-size: 18px;
	font-weight: 600;
	width: 100%;
	text-align: center;
}
</style>
<div class="ly_body">
	<div class="ly_wrap">
		<h3 class="subTitle">내차판매</h3>
		<div class="question">
			<div id="want" class="opt on">
				<p class="tit" style="font-size: 1.82em">차량번호를 입력해주세요</p>
				<div class="cont">
					<div class="txtfield" style="text-align: center;">
						<input type="text" class="carno" id="carno" onkeypress="buy.CarNoNext(this);">
					</div>
					<div class="btns">
						<button type="button" class="btn" onclick="buy.CarNoNext(document.getElementById('carno'));" value="s">조회</button>
<!--
						<button type="button" class="btn" onclick="buy.typeNext('s', this);" value="sell">판매</button>
						<button type="button" class="btn" onclick="buy.typeNext('t', this);" value="change">대차교환</button>
-->
					</div>
				</div>
			</div>
			<div id="memo" class="opt">
				<p class="tit">진행 예정시기는<br>언제인가요?</p>
				<div class="cont">
					<div class="btns">
						<button type="button" class="btn" value="3d" onclick="buy.dayNext(this.value);">바로</button>
						<button type="button" class="btn" value="1w" onclick="buy.dayNext(this.value);">일주일 내</button>
						<button type="button" class="btn" value="15d" onclick="buy.dayNext(this.value);">보름 내</button>
<!--
						<button type="button" class="btn" value="15d" onclick="buy.dayNext(this.value);">보름 내</button>
						<button type="button" class="btn" value="1m" onclick="buy.dayNext(this.value);">1개월 내</button>							
-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
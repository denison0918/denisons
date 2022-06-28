<div class="slide-layer" id="sell-include-html">
<div class="layer-bg"></div>
<h2 class="ly-title ">
	<span class="tit">내게 맞는 매물 찾기 마법사</span>
<!--
<span class="_search" style="display: flex">
	<input class="_txt" type="text" >
	<span class="_option">상세조건</span>	
</span>	
-->
</h2>
<button type="button" class="layer_closer" onclick="goBack();" title="close">
	<span class="blind">close</span>
</button>

<div class="ly_body">
	<div class="ly_wrap">
		<h3 class="subTitle">내차구매</h3>
		<div class="question">
			<div id="want" class="opt on">
				<p class="tit">어떤 차량을 원하세요?</p>
				<div class="cont">
					<div class="btns">
						<button type="button" class="btn" onclick="buy.typeNext('bd', this);" value="sell">국산차</button>
						<button type="button" class="btn" onclick="buy.typeNext('bg', this);" value="change">수입차</button>
					</div>
				</div>
			</div>
			<div id="memo" class="opt">
				<p class="tit">진행 예정시기는<br>언제인가요?</p>
				<div class="cont">
					<div class="btns">
						<button type="button" class="btn" value="3d" onclick="buy.dayNext2(this.value);">2~3일 내</button>
						<button type="button" class="btn" value="1w" onclick="buy.dayNext2(this.value);">일주일 내</button>
						<button type="button" class="btn" value="15d" onclick="buy.dayNext2(this.value);">보름 내</button>
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
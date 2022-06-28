<div class="slide-layer" id="buy-include-html">
<div class="layer-bg"></div>
<h2 class="ly-title">
	<span class="tit">내게 맞는 서비스 마법사</span>
</h2>
<button type="button" class="layer_closer" onclick="goBack();" title="close">
	<span class="blind">close</span>
</button>

<div class="ly_body">
	<div class="ly_wrap">
		<h3 class="subTitle">자동차보험</h3>
		<div class="question">
			<div id="want" class="opt on">
				<p class="tit">다이렉트로 가입하기</p>
<!--
				<div class="cont">
					<div class="btns">
						<button type="button" class="btn" onclick="buy.typeNext('sell', this);" value="sell">판매</button>
						<button type="button" class="btn" onclick="buy.typeNext('change', this);" value="change">대차교환</button>
					</div>
				</div>
-->
			</div>
			<div id="ensure" >
				<ul>
					<li>
						<a href="javascript:alert('준비중입니다');" class="link">
							<span class="ico kb"></span>
							<span class="txt">국민의 자동차보험<br>KB손해보험 다이렉트</span>
						</a>
					</li>
				</ul>
			</div>
			<div id="memo" class="opt">
				<p class="tit">진행 예정시기는<br>언제인가요?</p>
				<div class="cont">
					<div class="btns">
						<button type="button" class="btn" value="now" onclick="buy.dayNext(this.value);">금일즉시</button>
						<button type="button" class="btn" value="3d" onclick="buy.dayNext(this.value);">2~3일 내</button>
						<button type="button" class="btn" value="1w" onclick="buy.dayNext(this.value);">일주일 내</button>
						<button type="button" class="btn" value="15d" onclick="buy.dayNext(this.value);">보름 내</button>
						<button type="button" class="btn" value="1m" onclick="buy.dayNext(this.value);">1개월 내</button>							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
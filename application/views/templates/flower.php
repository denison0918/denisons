		
	<div class="m-flower-container" ng-show="flowerModal" ng-controller="modalCtrl">	
		<div class="m-flower">
			<div class="modal-dismiss" ng-click="$emit('flower-toggle')"></div>
			<div class="m-top">
				<ul>
					<li class="offline" ><label for="offline">
						<h2>오프라인</label></h2>
						<div><input type="radio" name="type" id="offline" value="offline"></div>
						<div class="description">실제 화환 전달 <br>및<br> 온라인 화환 표시</div>
						<div>(인증샷 제공)</div>
					</label>
					</li>
					
					<li class="line"></li>
					
					<li class="online"><label for="online">
						<h2>온라인</h2>
						<div><input type="radio" id="online" name="type" value="online"></div>
						<div class="description">온라인 화환 표시</div>
						<div>(수익금 상주 전달)</div>
					</label>
					</li>
				</ul>
			</div>
			<div class="m-bottom">
					<input type="submit" value="다음">
			</div>
			
			
		</div>
	
	
	</div>

<html>
	<head>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
		<style>
		
	@import url(//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css);	
	
	*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;-webkit-overflow-scrolling: auto;-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
	a{text-decoration: none;color: inherit;cursor: pointer}
	input{-webkit-appearance: none;}
	p{word-break: keep-all;}
	li{list-style: none;}
	button {overflow: visible;border: none;background: transparent none;box-shadow: none;line-height: 1;cursor: pointer;}
	select::-ms-expand {display: none;}
	body{width: 100%;}
	
	
	.tab{display: flex;}
	.tab li{flex: 1 0 auto;text-align: center; border-left:1px solid #ddd; }
	
	
	.paper{padding: 5px 5px;font-family: 'Spoqa Han Sans','맑은고딕','MalgunGothic','돋움',Dotum, sans-serif}
	.top{width: 100%;display: flex;}
	.top .tab li{height: 55px;color: #f56d6d;width: 50px;text-align: center;line-height: 50px;font-size: 25px;border:  1.5px solid #fab6b6;border-right: 0;}
	.top .tab li.on{background: linear-gradient(180deg, #F56D6F 50%, #F87575 50%);color: #fff;border-bottom: 0;border-top: 0;border-left: 0}
	.top .tab li.on + li{border-left: 0}
	.top .bg{background: linear-gradient(180deg, #F56D6F 50%, #F87575 50%);color: #fff;flex: 1;display: inline-block;text-align: center;line-height: 50px}
	.top .bg span{font-size: 25px;}
	
	
	.checkNumGroup{padding: 5px 0px 10px 0;width: 100%;border:  1.5px solid #fab6b6;border-top: 0;font-family: 'Spoqa Han Sans','맑은고딕','MalgunGothic','돋움',Dotum, sans-serif;}
	.numLine{display: flex;height: 35px;justify-content: space-between;width: 90%;margin: 20px auto;}
	.numLine span{text-align: center;position: relative;width: 34px;height: 38px}
	.numLine input{position: absolute;opacity: 0;}
	.numLine label{text-indent: 1.5px;position: relative;display: inline-block;width: 34px;height: 38px;text-align: center;line-height: 38px;font-weight: 600;font-size: 20px;color: #f56d6d;}
	.numLine label::before{content: "";position: absolute;top:0;left: -2;border-top: 2px solid #fab6b6;width: 100%;height: 20%;border-left: 2px solid #fab6b6;border-right: 2px solid #fab6b6}
	.numLine label::after{content: "";position: absolute;bottom:0;left: -2;border-bottom: 2px solid #fab6b6;width: 100%;height: 20%;border-left: 2px solid #fab6b6;border-right: 2px solid #fab6b6}
	.numline label.checkNum{color: #fab6b6;background-color: #4d4d4d}
	
	.ranSelect{}
	.etcLine{display: flex;height: 35px;justify-content: space-between;width: 90%;margin: 20px auto;}
	.etcLine label::before{content: "";position: absolute;top:-2 !important;left: 0 !important;border-left: 2px solid #fab6b6;width: 10%;height: 32px;border-top: 2px solid #fab6b6;border-bottom: 2px solid #fab6b6;border-right: none;}
	.etcLine span.last label::after{content: "";position: absolute;left: none !important;top:-2;right: -2 !important;border-right: 2px solid #fab6b6;width: 10%;height: 32px;border-top: 2px solid #fab6b6;border-bottom: 2px solid #fab6b6}
	.etcLine label{width: 100px !important;text-indent: 3px;position: relative;display: inline-block;height: 32px;text-align: center;line-height: 32px;font-weight: 600;font-size: 20px;color: #f56d6d;}	
	.etcLine input{position: absolute;opacity: 0;}
	.etcLine label.checkNum{color: #fff;background-color: #4d4d4d}
	
	.bottom{padding: 0 5px 5px 5px}
	
	.bottom .btn{font-size: 16.5px;border-radius: 3px;padding: 15px;width: 100%;height: 50px;background: linear-gradient(180deg, #F56D6F 50%, #F87575 50%);color: #fff;text-indent: 10px;font-weight: 500;box-shadow: 0 0 15px 0 rgba(0,0,0,.2);}
	
	
		</style>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157922949-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157922949-2');
</script>
	
		<script>
	
	
			
	//		let groupA = array();
			
			const paperA = [];
			const paperB = [];
			const paperC = [];
			const paperD = [];
			const paperE = [];
			const lotto = {};
			
			let curTab;
			let prevTab;
			let paper;
			let gameCnt = {};
			
			
			
			// 46있으면 무조건 통과
			
			function init(){

				const tab = document.getElementById('tab');
				
				prevTab = tab.children[0];			
				paper = paperA;
				curTab = "A";
				
				tab.addEventListener('click', function(e){

					eval("paper = paper"+e.target.textContent);
					curTab = ""+e.target.textContent;
					tabChangePaper(e.target);
					prevTab = e.target;
				});
				
			}
			
			function clearPaper(){
				for(let i = 1; i < 47; i++){
					document.getElementById('check645num' + i).labels[0].className = '';
				}
			}
			
			
			
			 function tabChangePaper(tab){
				tab.className = 'on';
				prevTab.className = '';	
				clearPaper();
				if(paper.length > 0){
					paper.forEach(function(item){
						target = document.getElementById('check645num' + item);
						target.labels[0].className = 'checkNum';
					});
					document.getElementById('check645num46').labels[0].className = 'checkNum';  //자동체크
				}
			}
			
			
			 function insertNum(target){
				
				const idx = paper.indexOf(target.value);  // 페이퍼A에 해당값이 있는지 체크, 없으면 -1
				const lbl = target.labels[0];
				
				
				
				
				if(idx > -1){
					lbl.className = '';
					paper.splice(idx, 1);
					
					
				}else if(paper.length > 9){     // 제외수를 10개까지 지정할 수 있도록 한다. 한개라도 지정했으면 checkPrice 가능		
					alert('최대 10개까지 제외가능합니다.');		
					return false
				}else if(idx == -1){
					paper.push(target.value);
					lbl.className = 'checkNum';
				}
				checkPrice();

			}
			
			
			
			
			function checkPrice(){

/*
				if((paper.length == 6) || (paper.indexOf('46') > -1)){
					lotto[curTab] = eval("paper"+curTab);
				}
*/
				if(paper.length > 0){
					lotto[curTab] = eval("paper"+curTab);   // 조건이 맞으면 로또배열에 탭추가
					document.getElementById('check645num46').labels[0].className = 'checkNum';  //자동체크
				}else{
					delete lotto[curTab];
					document.getElementById('check645num46').labels[0].className = '';   // 자동체크제거
				}
					document.getElementById('gameCnt').innerHTML = Object.keys(lotto).length ? Object.keys(lotto).length + ",000" : 0; //추가된 탭만큼 금액표시
				  
			}
			
			
			function submitCheck(){
				
				console.log(Object.keys(lotto).length);
				
				if(Object.keys(lotto).length < 1){
					alert('체크완료된 로또용지가 없습니다.');
					return false;
				}
				
				const formElm = document.forms[0];
				const formData = {};
				
				Object.keys(lotto).forEach(function(key){
					formData[key] = lotto[key];					
				});


				
				const data = document.createElement("input");
					  data.setAttribute("type", "hidden");
					  data.setAttribute("name", "data");
					  data.setAttribute("value", JSON.stringify(formData));
					 
					  formElm.appendChild(data);

			

				return true;	


			}
			

			
		</script>
	
		
	</head>
	
	<body onload="init()">
		
		
		
		<div class="container">
			
			

				<div class="paper">
					<div class="top">
						<ul class="tab" id="tab" >
							<li class="on">A</li>
							<li>B</li>
							<li>C</li>
							<li>D</li>
							<li>E</li>
						</ul>
						
						<span class="bg">
							<span id="gameCnt">0</span><span>원</span>
						</span>
					</div>
					<div class="checkNumGroup">
						<div class="numLine">
							
							<span>
							<input type="checkbox" id="check645num1" name="check645num" value="1" onchange="insertNum(this)" />
							<label for="check645num1">1</label>
							</span>
						
							<span>
							<input type="checkbox" id="check645num2" name="check645num" value="2" onchange="insertNum(this)" />
							<label for="check645num2">2</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num3" name="check645num" value="3" onchange="insertNum(this)" />
							<label for="check645num3">3</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num4" name="check645num" value="4" onchange="insertNum(this)" />
							<label for="check645num4">4</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num5" name="check645num" value="5" onchange="insertNum(this)" />
							<label for="check645num5">5</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num6" name="check645num" value="6" onchange="insertNum(this)" />
							<label for="check645num6">6</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num7" name="check645num" value="7" onchange="insertNum(this)" />
							<label for="check645num7">7</label>
							</span>
							
								
						</div>
						<div class="numLine">
							
							<span>
							<input type="checkbox" id="check645num8" name="check645num" value="8" onchange="insertNum(this)" />
							<label for="check645num8">8</label>
							</span>
						
							<span>
							<input type="checkbox" id="check645num9" name="check645num" value="9" onchange="insertNum(this)" />
							<label for="check645num9">9</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num10" name="check645num" value="10" onchange="insertNum(this)" />
							<label for="check645num10">10</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num11" name="check645num" value="11" onchange="insertNum(this)" />
							<label for="check645num11">11</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num12" name="check645num" value="12" onchange="insertNum(this)" />
							<label for="check645num12">12</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num13" name="check645num" value="13" onchange="insertNum(this)" />
							<label for="check645num13">13</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num14" name="check645num" value="14" onchange="insertNum(this)" />
							<label for="check645num14">14</label>
							</span>
							
								
						</div>
						<div class="numLine">
							
							<span>
							<input type="checkbox" id="check645num15" name="check645num" value="15" onchange="insertNum(this)" />
							<label for="check645num15">15</label>
							</span>
						
							<span>
							<input type="checkbox" id="check645num16" name="check645num" value="16" onchange="insertNum(this)" />
							<label for="check645num16">16</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num17" name="check645num" value="17" onchange="insertNum(this)" />
							<label for="check645num17">17</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num18" name="check645num" value="18" onchange="insertNum(this)" />
							<label for="check645num18">18</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num19" name="check645num" value="19" onchange="insertNum(this)" />
							<label for="check645num19">19</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num20" name="check645num" value="20" onchange="insertNum(this)" />
							<label for="check645num20">20</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num21" name="check645num" value="21" onchange="insertNum(this)" />
							<label for="check645num21">21</label>
							</span>
							
								
						</div>
						<div class="numLine">
							
							<span>
							<input type="checkbox" id="check645num22" name="check645num" value="22" onchange="insertNum(this)" />
							<label for="check645num22">22</label>
							</span>
						
							<span>
							<input type="checkbox" id="check645num23" name="check645num" value="23" onchange="insertNum(this)" />
							<label for="check645num23">23</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num24" name="check645num" value="24" onchange="insertNum(this)" />
							<label for="check645num24">24</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num25" name="check645num" value="25" onchange="insertNum(this)" />
							<label for="check645num25">25</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num26" name="check645num" value="26" onchange="insertNum(this)" />
							<label for="check645num26">26</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num27" name="check645num" value="27" onchange="insertNum(this)" />
							<label for="check645num27">27</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num28" name="check645num" value="28" onchange="insertNum(this)" />
							<label for="check645num28">28</label>
							</span>
							
								
						</div>
						<div class="numLine">
							
							<span>
							<input type="checkbox" id="check645num29" name="check645num" value="29" onchange="insertNum(this)" />
							<label for="check645num29">29</label>
							</span>
						
							<span>
							<input type="checkbox" id="check645num30" name="check645num" value="30" onchange="insertNum(this)" />
							<label for="check645num30">30</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num31" name="check645num" value="31" onchange="insertNum(this)" />
							<label for="check645num31">31</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num32" name="check645num" value="32" onchange="insertNum(this)" />
							<label for="check645num32">32</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num33" name="check645num" value="33" onchange="insertNum(this)" />
							<label for="check645num33">33</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num34" name="check645num" value="34" onchange="insertNum(this)" />
							<label for="check645num34">34</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num35" name="check645num" value="35" onchange="insertNum(this)" />
							<label for="check645num35">35</label>
							</span>
							
								
						</div>
						<div class="numLine">
							
							<span>
							<input type="checkbox" id="check645num36" name="check645num" value="36" onchange="insertNum(this)" />
							<label for="check645num36">36</label>
							</span>
						
							<span>
							<input type="checkbox" id="check645num37" name="check645num" value="37" onchange="insertNum(this)" />
							<label for="check645num37">37</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num38" name="check645num" value="38" onchange="insertNum(this)" />
							<label for="check645num38">38</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num39" name="check645num" value="39" onchange="insertNum(this)" />
							<label for="check645num39">39</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num40" name="check645num" value="40" onchange="insertNum(this)" />
							<label for="check645num40">40</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num41" name="check645num" value="41" onchange="insertNum(this)" />
							<label for="check645num41">41</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num42" name="check645num" value="42" onchange="insertNum(this)" />
							<label for="check645num42">42</label>
							</span>
							
								
						</div>
						<div class="numLine">
							
							<span>
							<input type="checkbox" id="check645num43" name="check645num" value="43" onchange="insertNum(this)" />
							<label for="check645num43">43</label>
							</span>
						
							<span>
							<input type="checkbox" id="check645num44" name="check645num" value="44" onchange="insertNum(this)" />
							<label for="check645num44">44</label>
							</span>
							
							<span>
							<input type="checkbox" id="check645num45" name="check645num" value="45" onchange="insertNum(this)" />
							<label for="check645num45">45</label>
							</span>
							
							<span></span><span></span><span></span><span></span>
						</div>

						<div class="etcLine">
							<span></span><span></span><span></span><span></span>
							<span></span>
							<span class="last">
							<input type="checkbox" id="check645num46" name="check645num" value="46" />
							<label for="check645num46">자동선택</label>
							</span>
							
							
						</div>
						
						
					</div>
				</div> <!-- paper end -->
				<div class="bottom">
					<form action="/lotto_buy_absence" method="post" onsubmit="return submitCheck()">
					<button class="btn" value=1 name="buyLotto">구매하기</button>
					</form>
				</div>

			
			
			
		</div>
	</body>
	
	
</html>

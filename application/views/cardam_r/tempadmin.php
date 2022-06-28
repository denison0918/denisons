<html>
	<head>
		
		<meta charset="utf-8">
		<style>
			*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;
				-webkit-overflow-scrolling: auto;
				-webkit-font-smoothing: antialiased;outline:none;-webkit-overflow-scrolling: touch;}
			a{text-decoration: none;color: inherit;cursor: pointer}
			p{word-break: keep-all;}
			li{list-style: none;}
			button {
			    overflow: visible;
			    border: none;
			    background: transparent none;
			    box-shadow: none;
			    line-height: 1;
			    cursor: pointer;
			}
			header{
				position: fixed;
				top:0;
				width: 100%;
				border-bottom: 1px solid #eee;
			}
			header .gnb{
				margin: 0 auto 2px;
				padding-top: 16px;
				width: 1080px;
				height: 34px;
			}
			header .header-inner{
				height: 95px;
				width: 1080px;
				margin: 0 auto;
				
			}
			main {
				top: 137px;
				position: relative
			}
			table{
				width: 100%;
				border-top: 1px solid #444;
				border-collapse: collapse
			}
			th,td{
				border-bottom: 1px solid #444;
				padding: 3px;
				text-align: center;
			}
		</style>
		
		<script>
			
			var getJSON = function(url) {
		    var xhr = new XMLHttpRequest();
		    xhr.open('GET', url, true);
		    xhr.responseType = 'json';
		   
		    xhr.send();
		};

			
			function memoEdit(code, target){

//				console.log(target.value);
				getJSON("//"+window.location.hostname+'/set_adm_memo/'+code+'/'+target.value);
				alert('변경되었습니다');
				
			}
			
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div class="container">
				<header>
					<div class="gnb"></div>
					<div class="header-inner">
						<a href="javascript:void(0);">	
							상단 메뉴 구성 자리						
						</a>
						<nav>
							<ul></ul>
							<ul></ul>
						</nav>
					</div>
				</header>
				<main>
					<table>
						<caption>순서 : 내림차순(20개 까지)</caption>
						<thead>
							<th>코드</th>
							<th>차량정보</th>
							<th>차량번호</th>
							<th>연락처</th>
							<th>타입</th>
							<th>등록일</th>
							<th>상담여부</th>
							<th>출처</th>
						</thead>
						<tbody>
							<?php
								
								foreach($purchase as $k => $v){
									if($v['type'] == "s"){
										$v['type'] = "판매";
									}else if($v['type'] == "bd"){
										$v['type'] = "구매";
									}else{
										$v['type'] = "대차";
									}
							?>
							<tr>
								<td><?=$v['cs_code']?></td>
								<td><?=$v['carinfo']?></td>
								<td><?=$v['carNo']?></td>
								<td><?=$v['phone']?></td>
								<td><?=$v['type']?></td>
								<td><?=$v['regdate']?></td>
								<td><input type="text" value="<?=$v['memo']?>"/><button onclick="memoEdit('<?=$v['cs_code']?>',this.previousSibling)">확인</button></td>
								<td><?=$v['whence']?></td>
							
							</tr>
							
							<?php
								}
							?>
							
						</tbody>
					</table>
					
				</main>
				<footer></footer>
			</div>
		</div>
	</body>
</html>
<html>
	
	<head>
		<meta charset="utf-8"/>
		<style>
			html{min-width: 320px;min-height: 468px;}
			
			li{
/* 				text-decoration: none !important; */
				list-style: none;
			}
html, body, div, p, h1, h2, h3, ul, ol, li, label,input,span, footer{
		margin: 0;
		padding: 0;
		border: 0;
		font-family: "나눔 고딕", "Nanum Gothic", "맑은 고딕", "Malgun Gothic", "Apple Gothic", "돋움", Dotum, "Helvetica Neue", Helvetica, Arial, sans-serif !important;
	} 
	
	body{
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/admin-login2.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
	}
	
	.main{
		width: 100%;
		height: 100%;
			   	display: -ms-flexbox;
   	-ms-flex-align: center;
   	 
   	display: -webkit-flex;
   	-webkit-flex-align: center;
   	-webkit-align-items: center;
   	 
   	display: flex;
   	align-items: center;
   	display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-pack: center;
  -webkit-box-align: center;

   display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-pack: center;
  -moz-box-align: center;

   display: box;
  box-orient: vertical;
  box-pack: center;
  box-align: center;
  
  
		display: -webkit-box;
		display: -moz-box;
	   	display: -ms-flexbox;
	   	display: -webkit-flex;
	   	display: flex;
-webkit-align-items: center;
	   align-items: center;
	}
	.login{
		width: 320px;
		height: 468px;
		border-radius: 5px;
		margin: 0px auto;
/* 		box-shadow: 1px 1px 20px 1px rgba(0, 0, 0, 0.4); */
 		background-color: rgba(241, 241, 241, 0.45); 
	}
	
	.login .logo{
		width: 80px;
		height: 59px;
	background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/cardam8_2.png);
	background-size: 89px 50px;
	background-repeat: no-repeat;
	background-position: center center;
	margin: 0 auto;
	margin-top: 30px;
	}
	
	
	.login-form{
		margin-top: 10px;
	}
	
/*
	.login-form li:first-child{
		
		margin-bottom: 10px;
	}
*/
	.login-form li{
		width: 280px;
		height: 43px;
		background-color: rgba(255, 255, 255, 0.8);
		margin: 0 auto;
		box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.4);
		border-radius: 5px;
		margin-bottom: 10px;
	}
	
	.login-form li input{
		width: 88%;
		height: 100%;
		float: left;
/* 		text-align: center; */
		border-radius: 5px;
		font-size: 10.5pt;
		background-color: rgba(255, 255, 255, 0);
		-webkit-appearance: textfield;
	       -moz-box-sizing: content-box;
	    -webkit-box-sizing: content-box;
	    		box-sizing: content-box;
	    		outline: none;
	}
	
	.login-form li .icon-id{
		width: 12%;
		height: 100%;
		float: left;
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/id.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 24px 24px;
		opacity: 0.9;
	}
	
	.login-form li .icon-password{
		width: 12%;
		height: 100%;
		float: left;
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/password.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 20px 20px;
		opacity: 0.9;
	}
	.login-form li .icon-name{
		width: 12%;
		height: 100%;
		float: left;
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/name.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 22px 22px;
		opacity: 0.9;
	}
	.login-form li .icon-og{
		width: 12%;
		height: 100%;
		float: left;
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/og.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 20px 20px;
		opacity: 0.9;
	}
	
	.login-form li .icon-emnum{
		width: 12%;
		height: 100%;
		float: left;
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/emnum.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 20px 20px;
		opacity: 0.9;
	}
	
	.login-form li .icon-email{
		width: 12%;
		height: 100%;
		float: left;
		background-image: url(https://cardam.s3-accelerate.amazonaws.com/Images/Content/email.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 18px 18px;
		opacity: 0.9;
	}
		
	
	
	.login .join{
		width: 270px;
		height: 20px;

		padding-top: 10px;
		margin: 0 auto;
/* 		text-align: right; */
	}
	
	.login .join a{
		text-decoration: none;
		font-weight: 600;
		color: #333cb8;
	}
	
	.login .back{
		float: left;
	}
	.login .registry{
		float: right;
	}
	
	

		</style>
	
	<script>
		var lumiKey = new Object();

	
	function formSubmit(obj){
		//var no = obj.id;
		
		//console.log(obj);
		
		var no = 1;
		
		if(isCheck("input", no)){
			var jsonObj = Object.assign(
			getKey(),	
			isValue("input", no)
		);		
//	console.log(jsonObj);
		
//			sendForm(jsonObj, "http://test");
//			alert("submit!");		
		}
		
		delete no;
				
	}


	var sendForm = function(jsonObj, url){
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("POST", url, true);
		xmlhttp.setRequestHeader("Content-type", "application/json");
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				alert(xmlhttp.responseText);
			//	alert("등록이 완료되었습니다.")
			}
		};
		
		xmlhttp.send(JSON.stringify(jsonObj));
		
//		console.log(JSON.stringify(jsonObj));
	}
	
	
	var setKey = function(cValue,lValue){
		
		
		lumiKey = new Object();
		
		lumiKey['title'] = cValue;
		lumiKey['auth'] = lValue;	
			
//		console.log(lumiKey['code']);

	}
	
	
	
	var getParam = function(key){
        var _parammap = {};
        document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
            function decode(s) {
                return decodeURIComponent(s.split("+").join(" "));
            }
 
            _parammap[decode(arguments[1])] = decode(arguments[2]);
        });
 
        return _parammap[key];
    };
 
	
	
	
	
  //  alert("code : " + getParam("code"));  // a
  //  alert("lc2c_code : " + getParam("lc2c_code"));  // a
    
	
	var getKey = function(){	
		return lumiKey;
	}
	


	var isCheck = function(obj, no){
		var result = true;
		for(var i = 1 ; ;i++){
			var attr = document.getElementById(obj+no+i);
//					console.log(attr.required);
				if(!isNull(attr) && isNull(attr.value.trim()) && attr.required){
					
					attr.focus(); result = false; attr.style.borderColor = "red";
					alert(attr.title + " 항목을 다시 채워주세요!");			
					break;
				}else if(!isNull(attr) && !isNull(attr.value.trim())){
					continue;
				}else{
					break;
				}
				
			delete attr;
		}		
		return result;
	}
	
	var isValue = function(obj, no){
		var result = new Object;		
		try{		
			for(var i = 1;  ;i++){	
				var attr = document.getElementById(obj+no+i);						
					if(!isNull(attr)){
						if(obj == "radio" && !attr.checked){
							continue;  // 체크안된것들 점프
						}else if(obj == "checkbox" && !attr.checked){
							continue;  // 체크안된것들 점프
						}else{
							result[attr.name] = attr.value;
						}
					}else{
						break;   // 무한루프 종료
					}				
				delete attr;
			}			
		}catch(e){
			console.log(e.message);
		}
		if(Object.keys(result).length == 0) delete result;	// 객체의 키값이 비었으면 파괴	
		return result;
	}
	
	var isNull = function(obj){
		if( obj == "" || obj == null || obj == undefined ){
			return true
		}else{
			return false;
		}
		
	}

	setKey(getParam("title"),getParam("auth"));
		
	</script>
	
		
	</head>
	<body>
		<header>
			
		<header>
		<div class="main">
			
			<div class="login">
				<div class="logo"></div>
				<ul class="login-form">
					<li><div class="icon-id"></div><input type="text" name="id" title="아이디" placeholder="ID" maxlength="28" id="input11"  required=""></li>
					<li><div class="icon-password"></div><input id="input12" name="passwd" title="비밀번호" type="password" placeholder="PASSWORD" maxlength="18" required=""></li>
					<li><div class="icon-name"></div><input id="input13" name="username" title="이름" type="text" placeholder="NAME" maxlength="18" required=""></li>
					<li><div class="icon-og"></div><input id="input14" name="og" title="소속" type="text" placeholder="OG(소속)" maxlength="18" required=""></li>
					<li><div class="icon-emnum"></div><input id="input15" name="emnum" title="사원번호" type="text" placeholder="EN(사원번호)" maxlength="18" required=""></li>
					<li><div class="icon-email"></div><input id="input16" name="phone" title="핸드폰" type="text" placeholder="PHONE(-제외)" maxlength="18" required=""></li>
					
				</ul>
				<div class="join"><a class="back" href="/car_admin">뒤로가기</a><a class="registry" href="javascript:formSubmit(this);">등록하기</a></div>
				
			</div>	
		
		</div>
		
		<footer>
			
		</footer>
	</body>
</html>
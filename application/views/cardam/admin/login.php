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
	margin-top: 100px;
	}
	
	
	.login-form{
		margin-top: 30px;
	}
	
	
	
	.login-form li{
		
		width: 280px;
		height: 43px;
		background-color: rgba(255, 255, 255, 0.8);
		margin: 0 auto;
		box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.4);
		border-radius: 5px;
		margin-bottom: 10px;
		
	}
/*
	.login-form li:last-child{
		
		margin-bottom: 0px;
	}
	
*/
	
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
	
	.login .join{
		width: 280px;
		height: 20px;
		padding-top: 0px;

		margin: 0 auto;
		text-align: right;
	}
	
	.login .join a{
		text-decoration: none;
		font-weight: 600;
		color: #333cb8;
	}
	
	


		</style>
		
		<script type="text/javascript">
			 
			function submit_form(event){
				
				var keyPressed = event.keyCode || event.which || charCode;
				
				if(keyPressed == 13 ){
					var	form = document.getElementById("myform");
					
					loadJSON(form, 'http://cardam.co.kr/json/login_check',
				         function(data) { 
					    //     console.log(data.result); 
					      	
					      		if(data.result == 'true'){
						      		form.submit();
					      		}else{
						      		alert("아이디 또는 비밀번호를 다시 확인해주세요!");
					      		}   
				         },
				         function(xhr) { 
					         console.error(xhr);
					          }
					 );
			
				}
			}
			
			
			function loadJSON(form, path, success, error)
			{
			    var xhr = new XMLHttpRequest();
			    xhr.onreadystatechange = function()
			    {
			        if (xhr.readyState === XMLHttpRequest.DONE) {
			            if (xhr.status === 200) {
			                if (success)
			                    success(JSON.parse(xhr.responseText));
			            } else {
			                if (error)
			                    error(xhr);
			            }
			        }
			    };
			    
			    var formData = new FormData();		    
			    formData.append("open", form.open.value);
				formData.append("id", form.id.value);
				formData.append("pwd", form.pwd.value);
			
			    xhr.open("POST", path, true);
			    xhr.send(formData);
			    
			    
			};
			
		</script>
		
	</head>
	<body>
		<header>
			
		<header>
		<div class="main">
			
			<div class="login">
				<div class="logo"></div>
				
				<ul class="login-form">
					<?php 
					$attributes = array('id' => 'myform');
					$hidden = array('open' => 'cardamManager');
					echo form_open('car_admin',$attributes ,$hidden);  
				?>
					<li><div class="icon-id"></div><input type="text" placeholder="ID" maxlength="28" id="id" name="id"></li>
					<li><div class="icon-password"></div><input type="password" placeholder="PASSWORD" maxlength="18" id="pwd" name="pwd" onkeypress="javascript:submit_form(event)"></li>
				</ul>
				<?php echo form_close();?>
				<div class="join"><a href="car_jadmin?title=cardam&auth=manager">회원가입</a></div>
				
			</div>	
			
		</div>
		
		<footer>
			
		</footer>
	</body>
</html>
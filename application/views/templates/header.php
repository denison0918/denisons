<html  ng-app="myApp">	
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="google-site-verification" content="XZ73oq2ETN41mumNy3LH7f-1tIl0YdxyRyZ8X59OKsQ" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
			<link rel="stylesheet" media="only screen and (min-width:480px)" href="/css/common.css"  type="text/css" charset="utf-8"/>
	
	
			<link rel="stylesheet" media="only screen and (min-width:480px)" href="/css/<?php echo $css ?>.css"  type="text/css" charset="utf-8"/>
			
			<link rel="stylesheet" media="only screen and (-webkit-device-pixel-ratio: 1.5)" href="/css/<?php echo $css_m1 ?>.css" />
			<link rel="stylesheet" media="only screen and (max-width:479px)" href="/css/<?php echo $css_m2 ?>.css" />


			<link rel="shortcut icon" href="http://www.gieok.xyz/Images/Content/logot.png">
  			<meta property="og:type" content="website"> 
			<meta property="og:title" content="故 <?php echo $name ?>">
<!-- 			<meta property="og:url" content="링크걸릴주소"> --> 
			<meta property="og:description" content="<?php echo $description ?>">
 			<meta property="og:image" content="<?php echo $image ?>"> 

			
			
			<!-- 페이지별 css 다르게 가져오기 -->
			
			
			<?php foreach ($js as $js_arr): ?>
<script src="<?php echo $js_arr ?>" type="text/javascript"> </script>
			<?php endforeach ?>
    		<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    		
			<title><?php echo $title ?></title>
	</head>
	<body>
		<div class="header">
			
			<div><h1 class="logo"></h1></div>
		
		</div>
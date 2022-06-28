<html lang="ko">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
<meta charset="utf-8">
	<head>
		<style>
			*{margin: 0;padding: 0;box-sizing: border-box;-webkit-text-size-adjust: 100%;
				-webkit-overflow-scrolling: auto;
				-webkit-font-smoothing: antialiased;outline:none;
				-webkit-overflow-scrolling: touch;
				}
			a{text-decoration: none;color: inherit;cursor: pointer}
			p{word-break: keep-all;}
			li{list-style: none;}
			input{-webkit-appearance: none;}
			button {
			    overflow: visible;
			    border: none;
			    background: transparent none;
			    box-shadow: none;
			    line-height: 1;
			    cursor: pointer;
			}
			body{width: 100%;}
			
			.layerOpened{overflow: hidden;}
			#wrap {width: 100%}
			
			#wrap .top.bg{
				width: 100%;
				background-color: #3c9283;
				position: relative;
			}
			
			#wrap .top.bg:before{			
				content: '';
				display: block;
				clear: both;
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				height: 100%;
				background: #30c07d;
				animation: AnimationOpacity 3s ease infinite;
			}
			
			#wrap header{
				width: 100%;
				height: 55px;
				border-bottom: 1px solid rgba(255, 255, 255, 0.3);
				
			}
			
			#wrap header .logo{
				background: url('http://img.cardam.co.kr/Content/desktop/footer-logo.png') no-repeat center center;
				background-size: contain;
				width: 55px;
				height: 55px;
				position: absolute;
				left: 20px;
			}
			
			#wrap .search_body{
				position: relative;
				overflow: hidden;
				box-shadow: 0 1px 0 0 rgba(199,199,199,0.7);
			}
			
			#wrap .search_body .top{
				padding: 11px 0;
				text-align: center;
				color: #fff;
				
			}
			
			#wrap .search_body .top .h1_tit{
				display: block;
			    font-size: 0.95rem;
			    line-height: 1.3;
			    transition: all 0.5s;
			    font-weight: 400;
			}
			
			#wrap .search_body .top .h2_tit{
				display: block;
			    margin-top: 16px;
			    font-size: 1.55rem;
			    line-height: 1.3;
			    transition: all 0.5s;
			    font-weight: 400;
			    padding: 0 20px;
			}
			#wrap .search_body .top .caution{
				display: block;
			    margin-top: 20px;
			    font-size: 1.15rem;
			    line-height: 1.3;
			    transition: all 0.5s;
			    font-weight: 400;
			    padding: 0 20px;
			}
			
			#wrap .search_body .top .caution > img{
				width: 50px;
				height: 50px;
				margin: 0 3px;
			}
			
			
			#wrap .search_body .tip_card{
				margin: 0;
/* 			    padding: 25px 20px 35px; */
			    background-color: #eceff1;
			    
			}
			
			#wrap .search_body .search .inp_txt{
				width: 70%;
				padding: 6px 15px;
			    text-indent: 12px;
			    height: 44px;
			    border: 1px solid #e6e6e6;
			    border-radius: 4px;
			    background-color: #f6f6f6;
			    color: #333333;
			    font-size: 1rem;
			    display: block;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    margin: 0 auto;
			    text-align: center;
			    background: transparent url('https://img.issuepoll.net/card/am/ico_search.png') no-repeat 12px center;
				background-size: 20px auto;
				background-color: #fff;
				margin-bottom: 30px;
				margin-top: 20px;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
			}
			
			#wrap .search_body .search .inp_btn{
				
				width: 60%;
				padding: 6px 15px;
/* 			    text-indent: 12px; */
			    height: 44px;
			    border: 1px solid #e6e6e6;
/* 			    border-radius: 4px; */
/* 			    background-color: #f6f6f6; */
			    color: #333333;
			    font-size: 1rem;
			    display: block;
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    margin: 0 auto;
			    text-align: center;
/* 			    background: transparent url('https://img.issuepoll.net/card/am/ico_search.png') no-repeat 12px center; */
				background-size: 20px auto;
				background-color: #fff;
				margin-bottom: 30px;
				margin-top: 20px;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
				
				border: 1px solid #eee;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
				line-height: 1;
/* 				display: inline-block; */
/* 				background-color: #fff; */
				color: #20925d;
				border-radius: 5px;
				padding: 20px;
				font-size: 1.2rem;
/*
				
				border: none;
				box-shadow: none;
*/
				min-width: 30px;
				height: 48px;
				line-height: 40px;
				padding: 0 10px;
				font-size: 1rem;
/* 				transition: all .3s ease; */
			}
			
			
			
			
			#wrap #container .usage .usage_step1_ico{
				background-image: url('https://img.issuepoll.net/card/am/searching-for-car.png');
				background-size: auto 24px;
				width: 24px;
				height: 24px; 
				top: 26px;
			}
			
			#wrap #container .usage .usage_step2_ico{
				background-image: url('https://img.issuepoll.net/card/am/payment-method.png');
				background-size: auto 22px;
				width: 22px;
				height: 22px; 
				top: 27px;
			}
			#wrap #container .usage .usage_step3_ico{
				background-image: url('https://img.issuepoll.net/card/am/talking.png');
				background-size: auto 23px;
				width: 23px;
				height: 23px; 
				top: 27.5px;
			}
			
			
			#wrap #container .usage .usage_box{	
				padding: 17px 20px;
				margin-top: 15px;
			}
			
			#wrap #container .usage .ug_ico{
				position: absolute;				
			}
			
			
			#wrap #container .usage .step_wrap{
				line-height: 1.5;
			}
			
			#wrap #container .usage .step_wrap span{
				padding-left: 38px;
				text-align: left;
				display: block;
				line-height: 1.3;
				font-size: 0.95rem;

			}
			#wrap #container .usage .step_wrap .step_h{
				color: #20925d;
				
			}
			
			#wrap #container .usage .step_wrap .step_txt{
				margin-top: 3px;
				color: #6f6f6f;
			}

			
	
			#wrap #container .example .example_box{	
				padding: 17px 20px 27px;
				
			}

			#wrap #container .example .example_box .example_wrap{
				padding: 22px 20px;
			}
			
			#wrap #container .example .example_box .example_wrap .ex_img{
				text-align: center;
				vertical-align: middle;
			}
			
			
			#wrap #container .example .example_box .example_wrap .ex_tit{
				margin-bottom: 16px;
				font-size: 1.15rem;
				color: #333;
			}
			
			#wrap #container .example .example_box .example_wrap .ex_list{
				
				width: 100%;
				font-size: 15px;
				line-height: 150%;
			}
			#wrap #container .example .example_box .example_wrap .ex_list th{
				text-align: left;
				padding: 10px 0px;
				border-bottom: 1px solid #eeeeee;
				color: #888;
			}
			#wrap #container .example .example_box .example_wrap .ex_list td{
				text-align: right;
				padding: 10px 0px;
				border-bottom: 1px solid #eeeeee;
				color: #333;
			}
			
			#wrap #container .example .example_box .example_wrap .ex_list tbody tr:last-child td, #wrap #container .example .example_box .example_wrap .ex_list tbody tr:last-child th {
			    border: 0;
			}
			
			
/*
			#wrap .search_body .tip_card .cmnt{
				font-size: 0.95rem;
				line-height: 1.4;
				color: #888;
			}
*/
			
/*
			#wrap .search_body .tip_card .line:after{
				content: '';
				display: block;
				border: 0;
			    width: 100%;
			    height: 1px;
			    margin: 20px 0 20px 0;
			    background: #e6e6e6;
			    line-height: 0;
			}
*/
			
			#wrap .search_body .tip_card .tip_items{
				background-color: #fff;
				
			}
			
			#wrap .search_body .tip_card .tip_items .item{
				
			}
			
/*
			#wrap .search_body .tip_card .tip_items:first-child{
				margin-bottom: 10px;
			}
*/
			
			#wrap .search_body .tip_card .tip_items .item li{
				padding: 15px;
			}
			
			#wrap .search_body .tip_card .tip_items .item > ul > li .news_img{
				width: 110px;
			}
			#wrap .search_body .tip_card .tip_items .item .news_img{
				position: relative;
				width: 110px;
				display: table-cell;
			}
			
			#wrap .search_body .tip_card .tip_items .item .news_img:before{
				content: '';
				position: absolute;
				display: block;
				left: 0;
				right: 0;
				bottom: 0;
				top:0;
				border: 1px solid rgba(0,0,0,0.08);
			}
			
			#wrap .search_body .tip_card .tip_items .item .news_img > img{
				width: 110px;
				height: 75px;
				vertical-align: top;
			}
			
			#wrap .search_body .tip_card .tip_items .item .news_txt{
				display: table-cell;
				height: 75px;
				vertical-align: middle;
			}
			
			#wrap .search_body .tip_card .card_tit:first-child {
				    margin-top: 0;
			}
			
			#wrap .search_body .tip_card .card_tit{
/* 				margin: 15px 0 15px; */
				padding: 15px 0;
			    color: #20925d;
			    font-size: 1.05rem;
			}
			

			
			#wrap .search_body .tip_card .info_items .item{
				margin-top: 10px;
			}
			
			
			#wrap .search_body .tip_card .info_items .sel_bg{
				
				border-radius: 4px;
				width: 100%;
				display: block;
			}
			#wrap .search_body .tip_card .info_items select{
				width: 100%;
				padding-left: 15px;
				padding-right: 30px;
				border: 1px solid #e6e6e6;
				border-radius: 4px;
				color: #333;
				overflow: hidden;
				display: block;
				font-size: 1rem;
				white-space: nowrap;
				text-overflow: ellipsis;
				height: 44px;
				-webkit-appearance: none;
				background: transparent url('https://img.issuepoll.net/card/am/bg_select.png') no-repeat right center;
				background-size: 24px 12px;
				background-color: #f6f6f6;
			}
			
			#wrap .search_body .tip_card .info_items select:focus{
				border-color: #60c898;
				background-color: #fff;
			}
			#wrap .search_body .tip_card .info_items .item .lb{			
			    display: block;
			    color: #888888;
			    font-size: 0.85rem;
			    line-height: 1.2em;
			    padding-bottom: 8px;
			}
			#wrap .search_body .tip_card .info_items .inp_txt{
			    overflow: hidden;
			    width: 100%;
			    padding-left: 15px;
			    padding-right: 30px;
			    padding-top: 6px;
			    padding-bottom: 6px;
			    height: 44px;
			    border: 1px solid #e6e6e6;
			    border-radius: 4px;
			    background-color: #f6f6f6;
			    color: #333333;
			    font-size: 1rem;
			    display: block;
			    overflow: hidden;
			    white-space: nowrap;
			    text-overflow: ellipsis;
				
			}
			
			#wrap .search_body .tip_card .info_items .inp_txt:focus{
				border-color: #60c898;
				background-color: #fff;
			}
			
			
			
			
			#wrap .search_body .tip_card .info_items .item .radio_box{
				position: relative;
				background: #f6f6f6;
				border-radius: 4px;
			}
			
			#wrap .search_body .tip_card .info_items .item .radio_box:before{
				    content: '';
				    position: absolute;
				    left: 0;
				    top: 0;
				    width: 100%;
				    height: 100%;
				    border-radius: 4px;
				    border: 1px solid #e6e6e6;
				    box-sizing: border-box;
			}
			#wrap .search_body .tip_card .info_items .item .radio_box:after{
				content: '';
				display: table;
				clear: both;
			}
			
			#wrap .search_body .tip_card .info_items .item .radio_box .itm{
				    position: relative;
				    float: left;
				    height: 44px;
				    border-radius: 4px;
				    overflow: visible;
				    font-size: 1rem;
				    width: 50%;
			}
			#wrap .search_body .tip_card .info_items .item .radio_box .itm input{
		        position: absolute;
			    top: 0;
			    left: 0;
			    opacity: 0;
			    width: 100%;
			    height: 100%;
			    overflow: hidden;
			}
			
			
			#wrap .search_body .tip_card .info_items .item .radio_box .itm input + .txt {
				display: block;
			    width: 100%;
			    height: 100%;
			    text-align: center;
			    line-height: 44px;
			    color: #888888;
				}
			
			#wrap .search_body .tip_card .info_items .item .radio_box .itm input:checked + .txt {
			    border: 1px solid #e6e6e6;
			    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.08);
			    background: #ffffff;
			    color: #60c898;
			}
			#wrap .search_body .tip_card .info_items .item .radio_box .itm span:not(.input_chk) {
			    white-space: nowrap;
			    text-overflow: ellipsis;
			    border-radius: 4px;
			}
						
			#wrap .search_body .tip_card .info_items .item .ph{
				height: 44px;
			}
			
			#wrap .search_body .tip_card .info_items .item .ph:focus-within > .pl > select, 
			#wrap .search_body .tip_card .info_items .item .ph:focus-within > .pr > input{
				border-color: #60c898;
				background-color: #fff;
			}
			
			#wrap .search_body .tip_card .info_items .item .pl {
			    width: 35%;
			    position: absolute;
			}
			#wrap .search_body .tip_card .info_items .item .pl > select{
				border-right: 0;
				border-radius: 4px 0px 0px 4px;
				text-align-last:center; 
				text-align: justify; 
				
			}
			
			#wrap .search_body .tip_card .info_items .item .pr {
			    width: 100%;
			    padding-left: 35%;
			    float: right;
			}
			
			#wrap .search_body .tip_card .info_items .item .pr > input {
			   	padding-left: 30px;
			}
			
			
/*
			#wrap .search_body .tip_card .line{
				display: block;
				border: 0;
			    width: 98%;
			    height: 1px;
			    margin: 23px 1% 23px 1%;
			    padding-right: 20px;
			    background: #e6e6e6;
			    line-height: 0;
			}
*/
			
			
/*
			#wrap .search_body .tip_card .agree_items .item .ag input:checked + .txt::before{
				background-size: 16px 12px;
			}
*/
			#wrap .search_body .tip_card .agree_items{
			    width: 100%;
			    padding: 0 0 0 15px;
			    border-radius: 4px;
			    border: 1px solid #eeeeee;
			    background: #ffffff;
			    box-shadow: 0 1px 2px rgba(0,0,0,0.08);
			}
			
			#wrap .search_body .tip_card .agree_items .item{
				position: relative;
			    padding: 8px 40px 7px 0;
			    border-top: 1px solid #e6e6e6;
			    font-size: 0.9rem;
			    border: 0;
			    padding-top: 10px;
				padding-bottom: 8px;
			}
			
			#wrap .search_body .tip_card .agree_items .item .ag{
				position: relative;
				display: block;
				white-space: nowrap;
				line-height: 1.5;
			}
			
			#wrap .search_body .tip_card .agree_items .item .ag input{
				position: absolute;	    
			    opacity: 0;
			    width: 100%;
			    height: 100%;
			}
			#wrap .search_body .tip_card .agree_items .item .ag input + .txt{
				padding-left: 25px;
				color: #888;
				display: block;
			}
			
			#wrap .search_body .tip_card .agree_items .item .ag input:checked + .txt{
				color: #20925d;
			}
						
			#wrap .search_body .tip_card .agree_items .item .ag input:checked + .txt:before{
				background: url('https://img.issuepoll.net/card/am/ico_checked.png') no-repeat center center;
				background-size: 16px 12px;
			}
			
			#wrap .search_body .tip_card .agree_items .item .ag input + .txt:before {
			    content: '';
			    position: absolute;
			    left: 0;
			    top: 0;
			    width: 16px;
			    height: 19px;
			    background: url('https://img.issuepoll.net/card/am/ico_check.png') no-repeat center center;
			    background-size: 16px 12px;
			}
			
			
			#wrap .search_body .tip_card .agree_items .item .agree_open_detail{
				position: absolute;
				top: 50%;
				right: 0;
				width: 31px;
				height: 31px;
				margin-top: -16px;
				
			}
			#wrap .search_body .tip_card .agree_items .item .agree_open_detail:before{
				content: '';
			    position: absolute;
			    left: 10px;
			    top: 50%;
			    overflow: hidden;
			    width: 11px;
			    height: 11px;
			    margin-top: -4.5px;
			    background: url('https://img.issuepoll.net/card/am/ico_agree_detail.png') no-repeat 0 0;
			    background-size: auto 11px;
			}
			
			#wrap .search_body .tip_card .agree_txt{
				font-size: 0.8rem;
				text-indent: -8px;
				color: #888;
				margin-left: 12px;
			}
			#wrap .search_body .tip_card .agree_txt > ul > li:first-child{
				margin-top: 15px;
				margin-bottom: 5px;
			}
			
			
			#wrap .search_body .tip_card .apply_box{
				text-align: center;
				margin-top: 25px;
			}
			
			#wrap .search_body .tip_card .apply_box .apply{
				padding: 15px 35px;
			}
			
			
			
			
			#wrap footer{
				background-color: #eceff1;
				text-align: center;
				color: rgb(136, 136, 136);
			}
			
			#wrap footer .layout{
				padding: 20px 0;
			}
			
			#wrap footer .ft_customer{
				font-size: 1.05rem;
			}
			
			#wrap footer .ft_info{
				margin-top: 15px;
				font-size: 0.8rem;

				
			}
			
			#wrap footer .ft_info p span{
				display: inline-block;
			    position: relative;
			    margin: 2px 8px;
			}
			
			#wrap footer .ft_info p span + span::before{
				content: '|';
			    display: block;
			    position: absolute;
			    margin-left: -10px;
			    color: #dddddd;
			}
			




			
.btn {
	border: 1px solid #eee;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
	line-height: 1;
	display: inline-block;
	background-color: #fff;
	color: #20925d;
	border-radius: 5px;
	padding: 20px;
	font-size: 1.2rem;
	
}
		

		
@-moz-keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}

@keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}

@-webkit-keyframes AnimationOpacity {
    0% {
        opacity: 0
    }

    50% {
        opacity: 0.5
    }

    100% {
        opacity: 0
    }
}
		</style>
		


<!-- common style -->
<style>
	.mt30{
		margin-top: 30px;
	}
	
	#wrap #container{
		background-color: #eceff1;
	}
			
	#wrap #container .section{
		box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
		background-color: #fff;
	}
	

	
	#wrap #container .section .box_tit{
		position: relative;
		margin: 0px -20px 0 0;
/* 		padding: 10px 20px 22px 0; */
		font-size: 1.05rem;
		line-height: 1.3em;

		color: #20925d;   
	}
	
	#wrap #container .section .inner_box{
		padding: 0 20px;
	    border: 1px solid #e6e6e6;
	    border-radius: 4px;
	    background-color: #ffffff;
	    box-shadow: 0 1px 2px 0 rgba(0,0,0,0.08);
	}
	
	#wrap #container .section .box_tit_desc{
		line-height: 1.5;
		color: #888;
		font-size: 13px;
		margin: 20px 0;
	}
	#wrap #container .section .bt{
		border-bottom: 1px solid #e6e6e6;
	}
	#wrap #container .step_box ol li{
		position: relative;
	    width: 100%;
	    border-bottom: 1px solid #eeeeee;
	    padding: 19px 10px 19px;
	    border-top: none;
	    text-align: left;
	}
	#wrap #container .step_box ol li:last-child{
		border-bottom: none;
	}
	
	#wrap #container .section .box_line:after{
		content: '';
	    display: block;
	    box-sizing: content-box;
	    width: 100%;
	    height: 1px;
	    margin: 20px 0 0 0;
	    padding-right: 20px;
	    background: #eeeeee;
	    line-height: 0;
	}
	h1, h2, h3, h4, h5, h6{
		font-weight: normal;
		line-height: 1.3;
	}
	table tbody tr th {
    font-weight: normal;
	}
	table {
    border-collapse: collapse;
	}
	
	.cl-gn{
		color: #20925d !important;
	}
	
</style>
<style>
	
	#wrap #container .review .review_box{	
				padding: 17px 0 17px 0px;
				margin-top: 10px;
				height: auto;
/* 				height: 314px; */
/* 				height: 325px; */
/*
				position: relative;
				display: flex;
				justify-content: space-between;
*/
			}
	
	#wrap #container .review .review_box .tit{
		
		font-size: 1.1rem;
	    color: rgba(255, 255, 255, .85);
	    color: #20925d;
	    font-weight: 400;
/* 	    margin-bottom: 10px;  */ 
/* 	    border-bottom: 1px solid #e6e6e6; */
	    
	}
	
	#wrap #container .review .review_box .sub_tit{
		padding: 0 20px 10px 0;
		font-size: 14px;
	    color: rgba(255, 255, 255, .85);
	    color: #888;;
	
	    margin-bottom: 18px;  
	    border-bottom: 1px solid #e6e6e6;
/* 	    margin-right: -20px;  */
	}
	
	#wrap #container .review .review_box .head{
		position: relative;
		line-height: 1.55em;
		padding-left: 20px;
	}
	
	.review_box .head .link_a{
		position: absolute;
		top: 0;
		right: 20px;
		font-size: 14px;
		
		display: inline-block;
	    padding-right: 13px;
	    color: #888888;
	    background: url('https://img.issuepoll.net/card/am/link_arr.png') no-repeat 100% 50%;
	    background-size: 5px auto;
	    background-position: center right;
	}
	#wrap #container .review .review_box .review-li{
		width: auto;
		height: 200px;
		
/* 		 box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);	 */
	    border-radius: 4px;
	    width: 170px;
	    overflow: hidden;
	    border: 1px solid #e6e6e6;
	}
/*
	#wrap #container .review .review_box .review-li:first-child{
		margin-left: 20px;
	}
	#wrap #container .review .review_box .review-li:last-child{
		margin-right: 20px;
	}
*/
	
	#wrap #container .review .review_box .review-li .thumb{
		height: 120px;
/* 		border-radius: 4px 4px 0 0; */
		overflow: hidden;
		position: relative;
	}
	#wrap #container .review .review_box .review-li .thumb > img{
		width: 100%;
		height: 100%;
	}
	#wrap #container .review .review_box .review-li .thumb .sticker{
		position: absolute;
		bottom: 10px;
		left: 10px;
	}
	
	.sticker .type{
		display: inline-block;
	    padding: 3.5px 3px 3px 3px;
	    border-radius: 2px;
	    color: #fff;
	    
	    font-size: 0.8rem;

	    
	}
	
	.sticker .type.t{
		background: #284c8f;
		border: 1px solid #284c8f;
	}
	.sticker .type.s{
		background: #3c9283;
		border: 1px solid #3c9283;
	}
	.sticker .type.b{
		background: #91873c;
		border: 1px solid #91873c;
	}
	
	
	
	#wrap #container .review .review_box .review-ul{
		overflow: hidden;
		padding: 0 20px;


	}
	#wrap #container .review .review_box .review-ul .review-li{
		width: 49% !important;
		float: left;
		height: auto;
		margin-bottom: 2.5%;
	}
	
	#wrap #container .review .review_box .review-ul .review-li:nth-child(2n-1){
		margin-right: 2%;
	}
	
	
	#wrap #container .review .review_box .review-li .carInfo{
		padding: 10px 10px 5px;
		height: 80px;
		position: relative;
		width: inherit;
		width: 170px;
	}
	#wrap #container .review .review_box .review-li .carInfo > p{
		text-align: left;
	}
	#wrap #container .review .review_box .review-li .carInfo .carName{
		font-size: 15px;
		
	}
	#wrap #container .review .review_box .review-li .carInfo .carRate{
		font-size: 13px;
		color: #888;
		padding: 5px 0;
	}
	#wrap #container .review .review_box .review-li .carInfo .carTxt{
		font-size: 17px;
		
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: pre;
		resize: horizontal;
		width: inherit;
		width: 150px;
		padding-top: 10px;
	}
	
	
	#wrap #container .review .review_box .review_more{
		margin: 10px 0 0;
		text-align: center;
	    font-size: 14.5px;
	}
	
	#wrap #container .review .review_box .review_more a{
		color: #888;
	}
	
	
	
	#wrap #container .call .call_box{	
		margin-top: 15px;
/* 				padding: 17px 20px 27px; */
		padding: 25px 20px 10px 20px;	
		position: relative;			
	}

	#wrap #container .call .call_box .call_wrap{
		padding: 22px 20px;
	}
	
	#wrap #container .call .call_box .call_wrap .ex_img{
		text-align: center;
		vertical-align: middle;
	}
	
	
	#wrap #container .call .call_box .call_wrap .ex_tit{
		margin-bottom: 16px;
		font-size: 1.15rem;
		color: #333;
	}
	
	#wrap #container .call .call_box .call_wrap .ex_list{
		
		width: 100%;
		font-size: 15px;
		line-height: 150%;
	}
	#wrap #container .call .call_box .call_wrap .ex_list th{
		text-align: left;
		padding: 10px 0px;
		border-bottom: 1px solid #eeeeee;
		color: #888;
	}
	#wrap #container .call .call_box .call_wrap .ex_list td{
		text-align: right;
		padding: 10px 0px;
		border-bottom: 1px solid #eeeeee;
		color: #333;
	}
	
	#wrap #container .call .call_box .call_wrap .ex_list tbody tr:last-child td, #wrap #container .call .call_box .call_wrap .ex_list tbody tr:last-child th {
	    border: 0;
	}
	
	
	
	#wrap #container .section .box_tit{
		color: #888;
		font-size: 13.5px;
	}
	
	#wrap #container .section .tel{
		color: #333;
		font-size: 20.5px;
		line-height: 1.8;
		letter-spacing: 1px;
	}
	
	#wrap #container .section .ico{
		position: absolute;
	    top: 50%;
	    right: 17px;
	    width: 50px;
	    height: 50px;
	    margin-top: -25px;
	    border: 1px solid #e6e6e6;
	    border-radius: 25px;
	    background: #ffffff url(https://img.issuepoll.net/card/am/call-answer.png) no-repeat center center;
	    background-size: 24px auto;
	    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);	
	}
	
	#wrap #container .section span{
		display: block;
	}
		
</style>
<script>
			var agent = navigator.userAgent.toLowerCase();
			var getJSON = function(url, callback) {
		    var xhr = new XMLHttpRequest();
		    xhr.open('GET', url, true);
		    xhr.responseType = 'json';
		    xhr.onload = function() {
		      var status = xhr.status;
		      if (status === 200) {
		        
		        if ( (navigator.appName == 'Netscape' && agent.indexOf('trident') != -1) || (agent.indexOf("msie") != -1)) {
				     // ie일 경우
					callback(null, JSON.parse(xhr.response));
					
				}else{
				     // ie가 아닐 경우
					callback(null, xhr.response);
				}

		        
		        
		      } else {
		        callback(status, xhr.response);
		      }
		    };
		    xhr.send();
		};
		</script>
<script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
<script type="text/javascript">
    if( (document.referrer).match(/KC/)){  
      kakaoPixel('1924823491651584035').pageView('rvlist');
	}
</script>
	</head>
	<body style="background-color: #eceff1">
		<div id="wrap" style="max-width: 650px;margin: 0 auto;">
			<div class="top bg">
				<header>
					<div class="layout">
						<a class="logo" href="/"></a>
					</div>
				</header>
				<div class="search_body">
					<div class="top">
						<h1 class="h1_tit">내차판매/구매 생생후기</h1>
						<h2 class="h2_tit">내 차 판매/구매 가격만족!<br>한줄평가 남기기</h2>
						<p class="caution"><img src="https://img.issuepoll.net/card/am/taxi_wh.png"><img src="https://img.issuepoll.net/card/am/car_wh.png"><img src="https://img.issuepoll.net/card/am/pickup_wh.png"><img src="https://img.issuepoll.net/card/am/refrigerator-truck_wh.png"><img src="https://img.issuepoll.net/card/am/van_wh.png"></p>
					</div>
					
					<div class="search">
						<form action="javascript:search_cno();">
						<button class="inp_btn" type="button" id="cno" name="cno" />이용 후기 등록하기</button>
						</form>
					</div>
					<div class="tip_card">
<!--
							<div class="cmnt line">
								<p class="txt">중고차를 구매전에 고객님들이 알아두면 유용한 관련 정보를 제공하는 공간입니다.</p>
							</div>
-->
							<div class="tip_items">
<!-- 								<div class="card_tit">자동차 관련 뉴스소식</div> -->
<!--
								<ul class="item">
									<li>
										<a href="javacript:void(0)">
											<div class="news_img">
												<img src="http://imgnews.naver.net/image/029/2018/05/31/0002466439_001_20180531180815325.jpg?type=w647">
											</div>
											<div class="news_txt">
												<p>미세먼지 나쁨날엔 "노후경유차 단속"</p>
											</div>
										</a>
									</li>
								</ul>
-->
							</div>
							
<!--
							<div class="tip_items">

								<ul class="item">
									<li>
										<a href="javacript:void(0)">
											<div class="news_img">
												<img src="http://mimgnews1.naver.net/image/origin/092/2018/05/31/2138808.jpg?type=nf220_150">
											</div>
											<div class="news_txt"></div>
										</a>
									</li>
								</ul>
							</div>
-->
							
							
							
<!--
							<div class="card_tit">지역 및 판매자정보입력</div>
							<div class="info_items">
								<div class="item">
									<span class="sel_bg">
										<select class="sel" name="sidoCombo" id="sidoCombo">
										<option value="">광역시/도 선택</option>
										<option value="서울특별시">서울특별시</option>
										<option value="경기도">경기도</option>
										<option value="인천광역시">인천광역시</option>
										<option value="부산광역시">부산광역시</option>
										<option value="대전광역시">대전광역시</option>
										<option value="대구광역시">대구광역시</option>
										<option value="광주광역시">광주광역시</option>
										<option value="울산광역시">울산광역시</option>
										<option value="강원도">강원도</option>
										<option value="충청남도">충청남도</option>
										<option value="충청북도">충청북도</option>
										<option value="경상남도">경상남도</option>
										<option value="경상북도">경상북도</option>
										<option value="전라남도">전라남도</option>
										<option value="전라북도">전라북도</option>
										<option value="제주특별자치도">제주특별자치도</option>
										<option value="세종특별자치시">세종특별자치시</option>
									</select>
									<span>
								</div>
								<div class="item">
									<p class="lb">보유차랑정보</p>
									<p>
										<span>
											<input class="inp_txt" type="text" name="carName" placeholder="예시) 아반떼AD 17년식" maxlength="40"/>
										</span>
									</p>
								</div>
								
								<div class="item">
									<p class="lb">사고유무</p>
									<p class="radio_box">
										<span class="itm" for="accident_false">
											<input type="radio" name="accident" value="0" id="accident_false" checked="" />
											<span class="txt">무사고</span>
										</span>
										<span class="itm" for="accident_true">
											<input type="radio" name="accident" value="1" id="accident_true" />
											<span class="txt">사고</span>
										</span>										
									</p>
								</div>
								
								<div class="item">
									<p class="lb">본인명의 휴대폰번호</p>
									<p class="ph">
										<span class="pl">
											<select name="" id="" class="sel">
												<option value="010">SKT</option>
												<option value="010">KT</option>
												<option value="010">LG U+</option>
												<option value="010">SKT알뜰폰</option>
												<option value="010">KT알뜰폰</option>
												<option value="010">LGT알뜰폰</option>
											</select>
										</span>
										<span class="pr">
											<input class="inp_txt" type="number" name="carName" placeholder="'-' 없이 입력" maxlength="40"/>
										</span>
									</p>
								</div>
							</div>
							
							
							
							<hr class="line"></hr>
							
							<div class="agree_items">
								<p class="item">
									<span class="ag" for="chk_agree">
										<input type="checkbox" id="chk_agree" name="chk_agree" checked=""/>
										<span class="txt">개인정보 수집·이용 동의(필수)</span>
									</span>
									<a href="javascript:void(0);" class="agree_open_detail"></a>
								</p>
							</div>
							<div class="agree_txt">
								<ul>
									<li>- 개인정보 수집 이용 동의는 차량견적 외 목적으로는 이용하지 않습니다.</li>
									<li>- 보다 정확한 차량시세 및 견적을 도와드리기 위해 상담원이 전화드릴 수 있습니다.</li>
								</ul>
							</div>
							<div class="apply_box">
								<button type="submit" class="btn apply">시세 및 견적신청</button>
							</div>
-->

					</div>
				</div>
			</div>
			<div id="container">

			<div class="section review">
					<div class="review_box">
						<div class="head">
							<h3 class="tit">이용후기</h3>
							<p class="sub_tit">카담을 이용한 고객님의 생생후기</p>
<!-- 							<a href="review.html" class="link_a">더보기</a> -->
						</div>
<!--
						<ul class="customer_list">
							<li>
								<a href="javascript:return false" class="txt">2010년식 아반떼 HD<span class="date">2018.12.23</span><span class="type">판매</span></a>
							</li>
							<li>
								<a href="javascript:return false" class="txt">아반떼 AD<span class="date">2018.12.23</span><span class="type">대차</span></a>
							</li>
							<li>
								<a href="javascript:return false" class="txt">2012년식 그랜저HG<span class="date">2018.12.23</span><span class="type">판매</span></a>
							</li>

						</ul>
-->
						
						<div>
							<ul class="review-ul" id="review">
								
								
							</ul>


						<div class="review_more">
							<a href="javascript:get_list()">더보기</a>
						</div>
<!--
						<div class="swiper-scrollbar_box">
								<div class="news-scrollbar"></div>
						</div>
-->
						</div>

						
						
					</div>
				</div>
				<script>
					
					function get_list(){
						var rv = document.getElementById('review');			
						var s = rv.children.length;
												
						getJSON('//'+window.location.hostname+'/get_rv/'+s+'/'+(s+10), review_list);	
//					getJSON('http://m.cardam.co.kr/get_rv/0/6', review_list);	
					function review_list(status,response){
						
						if(response.length < 1){
// 							alert('더 이상 없습니다');
							return false;
						}
														
						var rv = document.getElementById('review');												
						response.forEach(function(idx){							
							list = document.createElement('li');
							link = document.createElement('a');
							thumb = document.createElement('div');
							
							img = document.createElement('img');
							sticker = document.createElement('div');
							type = document.createElement('span');
							
							carInfo = document.createElement('div');
							carTxt = document.createElement('p');
							carRate = document.createElement('p');
							
							list.className = 'review-li';
							thumb.className = 'thumb';
							carInfo.className = 'carInfo';
							sticker.className = 'sticker';
							type.className = "type "+idx.sticker;
							
							
							carTxt.className = 'carTxt';
							carRate.className = 'carRate';
							
							carTxt.appendChild(document.createTextNode(idx.post));
							carRate.appendChild(document.createTextNode('[한줄평가]'));
							type.appendChild(document.createTextNode(idx.type));
							img.src = idx.img;

							list.appendChild(link);
							link.appendChild(thumb);
							link.appendChild(carInfo);	
							
							thumb.appendChild(img);
							thumb.appendChild(sticker);
							sticker.appendChild(type);
							
							carInfo.appendChild(carTxt);
							carInfo.appendChild(carRate);					
							
							rv.appendChild(list);
						});
						
					}
				}
				get_list();
				</script>
				
				

<!--
				<div class="section example">
					<div class="example_box">
						<h3 class="box_tit bt">비교방법</h3>
						<p class="box_tit_desc">차량번호 최저가제도란? <br>여러 사이트에서 다른가격으로 판매되는 동일차량을 가격비교</p>
						<div>
							<div class="inner_box example_wrap">
								<div class="ex_img box_line">
									<img src="http://image.carz.co.kr/upload_images/board/OrangeNews/OrangeNews13364_805547501.jpg" width="85%" />
								</div>
								<div class="mt30">
									<h4 class="ex_tit">예시</h4>
									<table class="ex_list">
										<colgroup>
											<col style="width: 50%"></col>
										</colgroup>
										<tbody>
											<tr>
												<th>A사</th>
												<td>1,042만원</td>
											</tr>
											<tr>
												<th>S사</th>
												<td>1,038만원</td>
											</tr>
											<tr>
												<th>K사</th>
												<td>1,033만원</td>
											</tr>
											<tr>
												<th class="cl-gn">카담</th>
												<td class="cl-gn">1,029만원</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>	
						</div>
					</div>
				</div>
-->
<!--
				<div class="section usage">
					<div class="usage_box">
						<h3 class="box_tit bt">이용방법</h3>
						<div class="step_box">
							<ol>
								<li>
									<span class="usage_step1_ico ug_ico"></span>
									<p class="step_wrap">
										<span class="step_h">1단계</span>
										<span class="step_txt">타사에서 찜한 중고차 매물의 차량번호를 확인</span>
									</p>
								</li>
								<li>
									<span class="usage_step2_ico ug_ico"></span>
									<p class="step_wrap">
										<span class="step_h">2단계</span>
										<span class="step_txt">카담 최저가제도를 통해 중고차 가격비교</span>
									</p>
								</li>
								<li>
									<span class="usage_step3_ico ug_ico"></span>
									<p class="step_wrap">
										<span class="step_h">3단계</span>
										<span class="step_txt">전화·온라인으로 상담 신청</span>
									</p>
								</li>
							</ol>
						</div>
					</div>
				</div>
-->
				
				<div class="section call">
					<div class="call_box">
						<a href="tel:032-297-8500">
							<span class="box_tit">고객상담센터</span>
							<span class="tel">032-297-8500</span>
							<span class="ico"></span>
						</a>
					</div>
				</div>
				
			</div>
			<footer>
				<div class="layout">
					<div class="ft_customer">
						<p>
							<a href="tel:032-297-8500">고객센터 032-297-8500</a>
						</p>
						<p>
							<a href="tel:032-297-8500">사업제휴센터 032-297-8500</a>
						</p>
					</div>
					<div class="ft_info">
						<p>경기도 시흥시 산기대학로 비즈니스센터 12층</p>
						<p>
							<span>대표이사 김태홍</span>
							<span>사업자등록번호 290-41-00154</span>
						</p>
						<p>ⓒ CARDAM & GIEOK INC.</p>
					</div>
				</div>
			</footer>
		</div>
	<div class="layer" lowprice-include-html="./sub/lowprice.html" ></div>	
	</body>
</html>
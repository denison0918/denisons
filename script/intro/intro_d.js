	
	var contentH = $("#content").height();
	var swith = false;
	$(".cherish").hide();



	$(".detail").click(function(){	
		view(); 
		scrollDwon();
    });
    
    $("#detail").click(function(){	
		view();
		scrollDwon();
    });
    
/*
    $(".cherish").click(function(){	
		view();
		scrollDwon();
    });
*/
    

	function view(){
		if(swith == false && contentH == '740'){
			 $(".cherish").slideUp( 100 ).delay( 300 ).fadeIn( 150 );
			 $( ".detail" ).text( "부고장 샘플 닫기" );	  	    
			 swith = true;
		}
		else if(swith == false && contentH < '740'){
			 $(".cherish").slideUp( 100 ).delay( 300 ).fadeIn( 150 );
			 $(".content").animate({height: '740px'});	
			 $( ".detail" ).text( "부고장 샘플 닫기" );	    
			 swith = true;
		}
		else if(swith == true && contentH == '740'){
			$(".cherish").hide();
			 $( ".detail" ).text( "부고장 샘플 보기" );	
			swith = false;
		}
		else{
			 $(".content").animate({height: contentH},650);   
		     $(".cherish").hide();
		      $( ".detail" ).text( "부고장 샘플 보기" );	
		     swith = false;
		}
	}    
    
    
    function scrollDwon(){
	  $("html,body").animate({
        scrollTop: 210}, 800);
		  
    }
   
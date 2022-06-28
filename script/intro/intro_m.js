	
	var viewH = $(".view").height();
	var swith = false;
	$(".cherish").hide();
// 	$( ".intro" ).text( "손쉽게 생성하는 품격있는 부고장" );


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
		if(swith == false && viewH < '669'){
			 $(".cherish").slideUp( 50 ).fadeIn( 50 );
			 $(".view").animate({height: '669px'});
			 $( ".detail" ).text( "부고장 샘플 닫기" );	    
			 swith = true;
		}
		else{
			 $(".view").animate({height: viewH},500);   
		     $(".cherish").hide();
		      $( ".detail" ).text( "부고장 샘플 보기" );	 
		     swith = false;
		}
	}    
    
    
    function scrollDwon(){
	  $("html,body").animate({
        scrollTop: 130}, 800);
		  
    }
   
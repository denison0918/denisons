initHistory();
		
var ua = navigator.userAgent;
ua = ua.toLowerCase();

function includeHTML(attr, idx) {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByClassName("layer");
  
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    
    
    file = elmnt.getAttribute(attr);
    
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
   //        elmnt.removeAttribute(attr);
          includeHTML();
        }
      } 
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
  setTimeout(function(){openLayer();}, 50);
 
}

function openLayer(){
	
//	document.getElementsByClassName('')[0].style.left = "0";
	document.querySelector('.slide-layer').style.left = "0";
	document.body.style.position = "fixed";
	
	
	history.replaceState({action:"layer_close"}, null, null);	
	history.pushState({action:"layer_open"}, null, null);
	
	
}

function closeLayer(){
	document.body.style.position = "relative";
	document.querySelector('.slide-layer').style.left = "100%";
	
//	document.getElementsByClassName('slide-layer')[0].style.left =  "100%";
}

/*
function buyTypeNext(type, target){
	console.log(document.querySelector('#want'));
	document.querySelector('#want').classList.remove('on');
	document.querySelector('#memo').classList.add('on');
	
	target.classList.add('on');
}
*/

function goBack(){
	history.go(-1);
}


var buy = {
	type : null,
	typeNext : function(type, target){
		document.querySelector('#want').classList.remove('on');
		document.querySelector('#memo').classList.add('on');
		this.type = type;
		target.classList.add('on');
	},
	dayNext : function(day){
		top.location.href = "./sell?type=" + this.type + "&day=" + day;
	},
	dayNext2 : function(day){
		top.location.href = "./buy?type=" + this.type + "&day=" + day;		
	}	
}


window.addEventListener('popstate', function(state){	
	

	if(/safari/.test(ua) && !!window.chrome ){   // 사라피가 아니면
			window.addEventListener('popstate', function(event){
				if(event.state.action == "layer_close"){
					closeLayer();
				}
			});
	}else if((/macintosh/.test(ua)) && (/safari/.test(ua))){			
		window.addEventListener('popstate', function(event){
			console.log(event);
				if(event.state.action == "layer_close"){
					closeLayer();
				}
			});
	}else if(navigator.userAgent.match('CriOS')){ // iOS Chrome not working initHistory
		history.go(1);
		closeLayer();	
	}else{   // 사라피이면
		window.setTimeout(function(){  // 사파리에서 작동 시간조절
			window.addEventListener('popstate', function(event){
				console.log(event);
				if(event.state.action == "layer_close"){
					closeLayer();
				}				
			});
		}, 350);
	}			
});
function initHistory(){
	history.pushState(null,null,null);
	if(!navigator.userAgent.match('CriOS')){ // iOS Chrome not working
		setTimeout(function(){goBack();}, 50);		
	}


}



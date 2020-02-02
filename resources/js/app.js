document.addEventListener("DOMContentLoaded", function(){
  // Handler when the DOM is fully loaded
	var url = window.location.pathname;
	console.log(url);
	var element;
	switch(url){
		case '/':
			console.log('homepage');
			element = document.getElementById('home');
			element.classList.add('active');
			break;
		case '/overmij':
			console.log('overmij');
			element = document.getElementById('over');
			element.classList.add('active');
			break;
		case '/portfolio':
			console.log('port');
			element = document.getElementById('port');
			element.classList.add('active');
			break;
		default:;
	}


	// var hoverElements = document.querySelectorAll('.has-hover');
	//  for(var i=0; i < hoverElements.length; i++){
	//  	hoverElements[i].addClass('addInnerHtml');
	//  }	\
	function getText(){
		var hoverClass = document.getElementsByClassName("has-hover");
		var projTitle;
		for (var i = 0; i < hoverClass.length; i++) {
			projTitle = hoverClass[i].getElementsByTagName('H3')[0].textContent;
			console.log(projTitle);
			hoverClass[i].setAttribute("hover-text", projTitle);
		 }
	};
	function addText(elem, text){

	};


	getText();
}); 

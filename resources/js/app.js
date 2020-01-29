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
}); 
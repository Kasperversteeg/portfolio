// create object
const makeElement = (type, attributes, ...children) => {
  const el = document.createElement(type)

  for (key in attributes) {
    el.setAttribute(key, attributes[key])
  }

  children.forEach(child => {
    if (typeof child === 'string') {
      el.appendChild(document.createTextNode(child))
    } else {
      el.appendChild(child)
    }
  })

  return el
}

// overlay layout object
var	overlay = makeElement('div',
	{ id: 'overlay' },
	makeElement('div', {class: 'container', id: 'overlay-container'},
		makeElement('div',{class: 'row'}, 
			makeElement('a', {class: 'button', id: 'overlay-close-button'}, 'Sluit')
			)
		)
  );



document.addEventListener("DOMContentLoaded", function(){
  // Handler when the DOM is fully loaded
	var url = window.location.pathname;
	// console.log(url);
	var element;
	switch(url){
		case '/':
			// console.log('homepage');
			element = document.getElementById('home');
			element.classList.add('active');
			break;
		case '/overmij':
			// console.log('overmij');
			element = document.getElementById('over');
			element.classList.add('active');
			break;
		case '/portfolio':
			// console.log('port');
			element = document.getElementById('port');
			element.classList.add('active');
			break;
		default:;
	}


	
	function setText(){
		var hoverClass = document.getElementsByClassName("has-hover");
		for (var i = 0; i < hoverClass.length; i++) {
			hoverClass[i].setAttribute("hover-text", "click for more info");
		 }
	};

	setText();

	// add eventlistener
	var check = document.getElementById('proj-1');
	if (check){
		check.addEventListener('click', openOverlay, false);
	}

	// for styling purposses
	openOverlay();


	
});



// open overlay
function openOverlay(){
	console.log ('open overlay');

	document.body.appendChild(overlay);
	fadeIn(overlay, 200);

	// some eventlisteners
	var button = document.getElementById('overlay-close-button');
	button.addEventListener('click', closeOverlay, false);
	window.onclick = function(event) {
	  if (event.target == overlay) {
	  	closeOverlay(); 
	  } else if (event.target == container){
	  	console.log('container clicked');
	  }
	}

}

// close overlay
function closeOverlay(){
	console.log('close overlay');
	overlay = document.getElementById('overlay');

	fadeOut(overlay, 20);
	var removeOverlay = function(){
		overlay.remove();
	}
	setTimeout(removeOverlay, 200);
}

// fade in a element with set transition time
function fadeIn(el, time) {
  el.style.opacity = 0;
  var last = +new Date();
  var tick = function() {
    el.style.opacity = +el.style.opacity + (new Date() - last) / time;
    last = +new Date();

    if (+el.style.opacity < 1) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
    }
  };

  tick();
}

function fadeOut(el, time) {
	var elem = el;
 var fadeEffect = setInterval(function () {
        if (!el.style.opacity) {
            el.style.opacity = 1;
        }
        if (el.style.opacity > 0) {
            el.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, time);
}
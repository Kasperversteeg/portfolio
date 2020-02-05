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
	setupClass();
	// openOverlay('1');	
});

// do stuff to hover class elements
function setupClass(){
	var hoverClass = document.getElementsByClassName("has-hover");
	for (var i = 0; i < hoverClass.length; i++) {
		hoverClass[i].setAttribute("hover-text", "Klik voor meer info");
		hoverClass[i].id = i;

		hoverClass[i].addEventListener('click', function(){openOverlay(this.id)}, false);
	 }
};


function makeOverlay(id){ 
	console.log (id);
	var curr = document.getElementById(id);
	var currentId = curr.id;
	var name;

	//set name
	var h3 = document.getElementById(id).querySelectorAll('h3');
	if(h3[0]){
		console.log('content found');
		name = h3[0].textContent;
	} else {
		switch(id){
			case '0':
				name = "Kasper Versteeg"
				break;
			case '1':
				name = "Pride and joy labradoodles"
				break;
			case '2':
				name = "Peluche"
				break;
			case '3':
				name = "Kasper Versteeg"
				break;
			default:
				name = "nothing"
			break;
		};	
	}


	//set url with title
	var url = setUrl(name);

	//set img with title
	var img = setImg(name);

	//set description with title
	var desc = setDescription(name);

	// overlay layout object
	var	overlay = makeElement('div',
		{ id: 'overlay' },
		makeElement('div', {class: 'container', id: 'overlay-container'},
			makeElement('div',{class: 'row justify-end'}, 
				makeElement('a', {id: 'overlay-close-button'}, "\xD7")
				),
			makeElement('div', {class:'row justify-center'},
				makeElement('div', {class : 'column column-90' ,id : 'overlay-img-wrap'}, 
					makeElement('img', {id : 'overlay-img', src : 'img/'+img })
					)
				),
			makeElement('div', {class:'row justify-center'},
				makeElement('h3', {class : 'column column-90' ,id : 'overlay-title'}, name)
				),
			makeElement('div', {class:'row justify-center'},
				makeElement('div', {class : 'column column-90'}, 
					makeElement('a', {id : 'overlay-url', href : '//'+url, class: 'a-inline'}, url)
					)
				),
			makeElement('div', {class:'row justify-center'},
				makeElement('p', {class : 'column column-90' ,id : 'overlay-description'}, desc)
				)
			)
	 	);
	return overlay;
	};

// open overlay
function openOverlay(i){
	console.log ('open overlay');

	//call overlay function to create
	var hoverId = i;

	var overlay = makeOverlay(hoverId);
	console.log('element clicked = ' + hoverId);

	// add it to body, default opacity = 0
	document.body.appendChild(overlay);
	// fade in the overlay
	fadeIn(overlay, 200);

	// add some eventlisteners
	var button = document.getElementById('overlay-close-button');
	button.addEventListener('click', closeOverlay, false);

	var container = document.getElementById('overlay-container');
	window.onclick = function(event) {
	  if (event.target == overlay) {
	  	closeOverlay(); 
	  } else if (event.target == container){
		//do nothing
	  }
	}
}

// untill i figure out php, description is set here
function setImg(name){
	var img 
	console.log ('setting img for ' + name);
	switch(name){
		case 'Kasper Versteeg':
			img = "port-1.png"
			break;
		case 'Peluche':
			img = "port-2.png"
			break;
		case 'Pride and joy labradoodles':
			img = "port-1.png"
			break;
		case 'Bernerdoodles':
			img = "port-1.png"
			break;
		default:
			img = "No img found, please contact the webmaster"
		break;
	}
	return img;
}
// untill i figure out php, description is set here
function setDescription(name){
	var text;
	console.log ('setting description for ' + name);
	switch(name){
		case 'Kasper Versteeg':
			text = "kasper versteeg"
			break;
		case 'Peluche':
			text = "peluche"
			break;
		case 'Pride and joy labradoodles':
			text = "pride and joy"
			break;
		case 'Bernerdoodles':
			text = "bernerdoodles"
			break;
		default:
			text = "No description found, please contact the webmaster"
		break;
	}
	return text;
}

// untill i figure out php, url is set here
function setUrl(name){
	var url;
	console.log ('setting description for ' + name);
	switch(name){
		case 'Kasper Versteeg':
			url = "www.kasperversteeg.com"
			break;
		case 'Peluche':
			url = "www.labradoodles.it"
			break;
		case 'Pride and joy labradoodles':
			url = "url"
			break;
		case 'Bernerdoodles':
			url = "under construction"
			break;
		default:
			text = "No url found,"
		break;
	}
	return url;
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
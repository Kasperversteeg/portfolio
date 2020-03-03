document.addEventListener("DOMContentLoaded", function(){
  // Handler when the DOM is fully loaded
	var url = window.location.pathname;
	var element;
	switch(url){
		case '/':
			element = document.getElementById('home');
			element.classList.add('active');
			break;
		case '/overmij':
			element = document.getElementById('over');
			element.classList.add('active');
			break;
		case '/portfolio':
			element = document.getElementById('port');
			element.classList.add('active');
			break;
		default:;
	}
	setupClass();

	// Setup typewrite effect
	var typewriter = document.getElementById('typewriter');
	if (typewriter){

		var elemText = ["< <span>Webdeveloper </span>/<span> Multimedia expert </span>> "];
		var period = 75;
		new TxtType(typewriter, elemText, period);
	};

    var sections = document.getElementsByClassName("content-section");
    var x = 400;
    for (var i = 0; i < sections.length; i++){
    	var elem = sections[i];
		// fade in the overlay
		fadeIn(elem, x);
		x = x+600;

    }   
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
	// console.log ('ID for overlaycontent: ' + id);
	var curr = document.getElementById(id);
	var currentId = curr.id;
	var name;

	//set name, make sure when php object to make title manditory
	var h3 = document.getElementById(id).querySelectorAll('h3');
	if(h3[0]){
		name = h3[0].textContent;
		// console.log('Title of project found, it is: ' + name);
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
				name = "Bernerdoodles"
				break;
			default:
			break;
		};	
	}
	
	// create portfolio object
	var portItem = setVar(name);

	// check if portfolio item is set
	if (portItem){
		for (var p in portItem){
			if (portItem[p] === "") {
				if (p == 'url')portItem.url = "Sorry er is geen url opgegeven";
				else if (p == 'description')portItem.description = "Sorry er is geen beschrijving opgegeven";
				else if (p == 'img')portItem.img = "noimg.png";
			}
		}
		// set variables for modal view 
		var url = portItem.url;
		var desc = portItem.description;
		var img = portItem.img;

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
				makeElement('div',{class: 'row justify-end'}, 
					makeElement('a', {id: 'overlay-close-button'}, "\xD7")
					),
				makeElement('div', {class:'row justify-center'},
					makeElement('div', {class : 'column column-90' ,id : 'overlay-img-wrap'},
						makeElement('a', {href : '//'+url,  target : '_blank'},
							makeElement('img', {id : 'overlay-img', src : 'img/'+img }) 
							) 
						)
					),
				makeElement('div', {class:'row justify-center'},
					makeElement('h3', {class : 'column column-90' ,id : 'overlay-title'}, name)
					),
				makeElement('div', {class:'row justify-center'},
					makeElement('div', {class : 'column column-90'}, 
						makeElement('a', {id : 'overlay-url', href : '//'+url, class: 'a-inline',  target : '_blank'}, url)
						)
					),
				makeElement('div', {class:'row justify-center'},
					makeElement('p', {class : 'column column-90' ,id : 'overlay-description'}, desc)
					)
				)
		 	);
	return overlay;

	} else {
		return false
	};
};

function setVar(name){
	function Item(name, url, description, img) {
		this.name = name;
		this.url = url;
		this.description = description;
		this.img = img;
	}
	var item;
	switch(name){
		case 'Kasper Versteeg':
			item = new Item(
				"Kasper Versteeg", 
				"www.kasperversteeg.com",
				"Dit is een lopend project wat eigen website betreft, ik neem de tijd om wat nieuwe functionaliteit van het laravel framework in combinatie met javascript te leren. De website is gemaakt in met het laravel framework en de animaties zijn pure javascript.",
				"port-3-img.png"				
				);
			break;
		case 'Peluche':
			item = new Item(
				"Peluche", 
				"www.labradoodles.it",
				"Dit is een project in opdracht van de eigenaar van 'pride and joy' het is een Italiaanse startup van de zelfde honden fokker. Het is een Wordpress site met wat custom aanpassingen.",
				"port-2-img.png"				
				);
			break;
		case 'Pride and joy labradoodles':
			item = new Item(
				"Pride and joy labradoodles", 
				"www.prideandjoyaustralianlabradoodles.nl",
				"Dit is een project in opdracht van de fokker van australian labradoodles. Het idee van de website is de gebruikers de sfeer van de fokker te geven, zodat het gelijk duidelijk is om wat voor soort fokker het gaat. Het is een wordpress website met aanpassingen.",
				"port-1-img.png"				
				);
			break;
		case 'Bernerdoodles':
			item = new Item(
				"Bernerdoodles", 
				"",
				"",
				""				
				);
			break;
		default:
		break;
	}
	return item;
}

// open overlay
function openOverlay(id){
	//call overlay function to create
	var overlay = makeOverlay(id);

	if (overlay){
		// console.log('overlay has been set; ' + overlay);
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
	} else {
		// console.log('no overlay set');
	}
}

// close overlay
function closeOverlay(){
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


// typewriter effect

var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
    };

 TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];


        var loopnum = this.loopNum++;
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        if (loopnum <= 64){
		    this.el.innerHTML = this.txt;
		 }
        var that = this;


        setTimeout(function() {
        that.tick();
        }, this.period);
    };
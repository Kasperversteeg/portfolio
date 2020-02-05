/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// create object
var makeElement = function makeElement(type, attributes) {
  var el = document.createElement(type);

  for (key in attributes) {
    el.setAttribute(key, attributes[key]);
  }

  for (var _len = arguments.length, children = new Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
    children[_key - 2] = arguments[_key];
  }

  children.forEach(function (child) {
    if (typeof child === 'string') {
      el.appendChild(document.createTextNode(child));
    } else {
      el.appendChild(child);
    }
  });
  return el;
}; // overlay layout object


var overlay = makeElement('div', {
  id: 'overlay'
}, makeElement('div', {
  "class": 'container',
  id: 'overlay-container'
}, makeElement('div', {
  "class": 'row'
}, makeElement('a', {
  "class": 'button',
  id: 'overlay-close-button'
}, 'Sluit'))));
document.addEventListener("DOMContentLoaded", function () {
  // Handler when the DOM is fully loaded
  var url = window.location.pathname; // console.log(url);

  var element;

  switch (url) {
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

    default:
      ;
  }

  function setText() {
    var hoverClass = document.getElementsByClassName("has-hover");

    for (var i = 0; i < hoverClass.length; i++) {
      hoverClass[i].setAttribute("hover-text", "click for more info");
    }
  }

  ;
  setText(); // add eventlistener

  var check = document.getElementById('proj-1');

  if (check) {
    check.addEventListener('click', openOverlay, false);
  } // for styling purposses


  openOverlay();
}); // open overlay

function openOverlay() {
  console.log('open overlay');
  document.body.appendChild(overlay);
  fadeIn(overlay, 200); // some eventlisteners

  var button = document.getElementById('overlay-close-button');
  button.addEventListener('click', closeOverlay, false);

  window.onclick = function (event) {
    if (event.target == overlay) {
      closeOverlay();
    } else if (event.target == container) {
      console.log('container clicked');
    }
  };
} // close overlay


function closeOverlay() {
  console.log('close overlay');
  overlay = document.getElementById('overlay');
  fadeOut(overlay, 20);

  var removeOverlay = function removeOverlay() {
    overlay.remove();
  };

  setTimeout(removeOverlay, 200);
} // fade in a element with set transition time


function fadeIn(el, time) {
  el.style.opacity = 0;
  var last = +new Date();

  var tick = function tick() {
    el.style.opacity = +el.style.opacity + (new Date() - last) / time;
    last = +new Date();

    if (+el.style.opacity < 1) {
      window.requestAnimationFrame && requestAnimationFrame(tick) || setTimeout(tick, 16);
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

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\users\kaspe\documents\projects\portfolio\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\users\kaspe\documents\projects\portfolio\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(2)({ polyfill: true });

/*
Variables
 */

var main = document.querySelector('.main');
var modalsContainer = document.querySelector('.modals');
var modals = document.querySelectorAll('.modal');
var postsContainer = document.querySelector('.posts');
var posts = document.querySelectorAll('.post');
var counter = 0;
var touchstartX = 0;
var touchendX = 0;

/*
Functions
 */

// Disable possibilty to scroll or swipe on slider for x time
function throttle(callback, limit) {
    var wait = false;
    return function (event) {
        if (!wait) {
            callback(event);
            wait = true;
            setTimeout(function () {
                wait = false;
            }, limit);
        }
    };
}

// Handle swipe gesture
function handleSwipe(element) {
    if (touchendX < touchstartX) {
        counter++;
        if (counter >= element.length - 1) counter = element.length - 1;
    }
    if (touchendX > touchstartX) {
        counter--;
        if (counter < 0) counter = 0;
    }
}

/*
(Slider) Switch slide on swipe
 */

// Posts
postsContainer.addEventListener('touchstart', throttle(function (event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 576) {
        touchstartX = event.changedTouches[0].screenX;
    }
}, 1000, false));

postsContainer.addEventListener('touchend', throttle(function (event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 576) {
        touchendX = event.changedTouches[0].screenX;
        handleSwipe(posts);
        postsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
    }
}, 1000, false));

// Filters
modalsContainer.addEventListener('touchstart', throttle(function (event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 960) {
        touchstartX = event.changedTouches[0].screenX;
    }
}, 1000, false));

modalsContainer.addEventListener('touchend', throttle(function (event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 960) {
        touchendX = event.changedTouches[0].screenX;
        handleSwipe(modals);
        modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
    }
}, 1000, false));

/*
(Slider) Switch slide on scroll (to experience mobile slider on desktop)
 */

window.addEventListener('wheel', throttle(function (e) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 960) {
        if (e.deltaY < 0) {
            counter--;
            if (counter < 0) counter = 0;
        }
        if (e.deltaY > 0) {
            counter++;
            if (postsContainer.classList.contains('.posts--hidden')) {
                if (counter >= modals.length - 1) counter = modals.length - 1;
            } else {
                if (counter >= posts.length - 1) counter = posts.length - 1;
            }
        }
        postsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
        modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
    }
}, 1500));

/*
Allow to slide the modals when clicking on the skip button
 */

var skipButton = document.querySelector('#skip-button');

skipButton.addEventListener('click', function () {
    var windowWidth = document.body.clientWidth;
    counter++;
    if (counter >= modals.length) {
        counter = 0;
        setTimeout(function () {
            skipButton.classList.add('button--fade');
            modalsContainer.classList.add('modals--fade');
        }, 400);
        setTimeout(function () {
            skipButton.classList.add('button--hidden');
            modalsContainer.classList.add('modals--hidden');
            main.classList.remove('main--hidden');
            showHeaderButtons();
        }, 800);
        return;
    }
    if (window.innerWidth < 576) {
        modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
    } else {
        modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth + 18) + 'px)';
    }
});

/*
Burger Menu
 */

var menu = document.querySelector('.menu');
var menuButton = document.querySelector('.button--burger');
var overlay = document.querySelector('.overlay');

menuButton.addEventListener('click', function () {
    if (menu.classList.contains('menu--active')) {
        menu.classList.remove('menu--active');
        menuButton.classList.remove('button--burger--active');
        overlay.classList.remove('overlay--fade');
        setTimeout(function () {
            overlay.classList.remove('overlay--active');
        }, 300);
    } else {
        menu.classList.add('menu--active');
        menuButton.classList.add('button--burger--active');
        overlay.classList.add('overlay--active');
        setTimeout(function () {
            overlay.classList.add('overlay--fade');
        }, 10);
    }
});

/*
Filters
 */

var filters0 = document.querySelectorAll('.filter--0');
var filters1 = document.querySelectorAll('.filter--1');
var filters2 = document.querySelectorAll('.filter--2');
var body = document.querySelector(body);

var _loop = function _loop(a) {
    filters0[a].addEventListener('click', function () {
        for (var i = 0; i < filters0.length; i++) {
            if (i !== a) {
                filters0[i].classList.remove('filter--active');
            } else {
                filters0[a].classList.add('filter--active');
            }
        }
        var windowWidth = document.body.clientWidth;
        counter++;
        if (window.innerWidth < 576) {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
        } else {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth + 18) + 'px)';
        }
    });
};

for (var a = 0; a < filters0.length; a++) {
    _loop(a);
}

var _loop2 = function _loop2(a) {
    filters1[a].addEventListener('click', function () {
        for (var i = 0; i < filters1.length; i++) {
            if (i !== a) {
                filters1[i].classList.remove('filter--active');
            } else {
                filters1[a].classList.add('filter--active');
            }
        }
        var windowWidth = document.body.clientWidth;
        counter++;
        if (window.innerWidth < 576) {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
        } else {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth + 18) + 'px)';
        }
    });
};

for (var a = 0; a < filters1.length; a++) {
    _loop2(a);
}

var _loop3 = function _loop3(a) {
    filters2[a].addEventListener('click', function () {
        for (var i = 0; i < filters2.length; i++) {
            if (i !== a) {
                filters2[i].classList.remove('filter--active');
            } else {
                filters2[a].classList.add('filter--active');
            }
        }
        counter++;
        if (counter >= modals.length - 1) counter = 0;
        setTimeout(function () {
            skipButton.classList.add('button--fade');
            modalsContainer.classList.add('modals--fade');
        }, 400);
        setTimeout(function () {
            skipButton.classList.add('button--hidden');
            modalsContainer.classList.add('modals--hidden');
            main.classList.remove('main--hidden');
            showHeaderButtons();
        }, 800);
    });
};

for (var a = 0; a < filters2.length; a++) {
    _loop3(a);
}

/*
Open article modal when clicking on thumbnail
 */

var article = document.querySelector('.article');
var articleButton = document.querySelector('.button--article');

for (var i = 0; i < posts.length; i++) {
    posts[i].addEventListener('click', function () {
        article.classList.remove('article--hidden');
        overlay.classList.add('overlay--active');
        setTimeout(function () {
            overlay.classList.add('overlay--fade');
        }, 10);
    });
}
articleButton.addEventListener('click', function () {
    article.classList.add('article--hidden');
    overlay.classList.remove('overlay--fade');
    setTimeout(function () {
        overlay.classList.remove('overlay--active');
    }, 300);
});
/*
Show headers buttons after completing filters
 */

var searchButton = document.querySelector('#button-search');
var filtersButton = document.querySelector('#button-filters');
var recruitersButton = document.querySelector('#button-recruiters');

function showHeaderButtons() {
    searchButton.classList.remove('button--hidden');
    if (window.innerWidth < 960) {
        menuButton.classList.remove('button--hidden');
        recruitersButton.classList.add('button--hidden');
    }
    if (window.innerWidth > 960) {
        filtersButton.classList.remove('button--hidden');
        recruitersButton.classList.remove('button--hidden');
    }
}

/*
Posts bullets active on click
 */

var bullets = document.querySelectorAll('.bullet');

var _loop4 = function _loop4(a) {
    bullets[a].addEventListener('click', function () {
        for (var i = 0; i < bullets.length; i++) {
            if (i !== a) {
                bullets[i].classList.remove('bullet--active');
            } else {
                bullets[a].classList.add('bullet--active');
            }
        }
    });
};

for (var a = 0; a < bullets.length; a++) {
    _loop4(a);
}

/*
Interview
 */

var applyButton = document.querySelector('#button-apply');
var interviewsContainer = document.querySelector('.interviews');
var backButton = document.querySelector('#button-back');

backButton.addEventListener('click', function () {
    counter = 0;
    setTimeout(function () {
        backButton.classList.add('button--hidden');
        interviewsContainer.classList.remove('interviews--fade');
    }, 400);
    setTimeout(function () {
        interviewsContainer.classList.add('interviews--hidden');
        main.classList.remove('main--hidden');
    }, 800);
});

applyButton.addEventListener('click', function () {
    counter = 0;
    main.classList.add('main--hidden');
    article.classList.add('article--hidden');
    overlay.classList.remove('overlay--active');
    interviewsContainer.classList.remove('interviews--hidden');
    backButton.classList.remove('button--hidden');
    setTimeout(function () {
        interviewsContainer.classList.add('interviews--fade');
    }, 150);
});

var interview0 = document.querySelector('#interview-0');
var touchButton = document.querySelector('.interview__touch');
var startButton = document.querySelector('#interview-start');

touchButton.addEventListener('click', function () {
    interview0.classList.remove('interview--active');
    counter++;
    var windowWidth = document.body.clientWidth;
    interviewsContainer.style.transition = '.4s ease';
    interviewsContainer.style.marginLeft = '-' + counter * windowWidth + 'px';
});

window.addEventListener('keydown', function () {
    if (interview0.classList.contains('interview--active')) {
        interview0.classList.remove('interview--active');
        counter++;
        var windowWidth = document.body.clientWidth;
        interviewsContainer.style.transition = '.4s ease';
        interviewsContainer.style.marginLeft = '-' + counter * windowWidth + 'px';
    }
});

startButton.addEventListener('click', function () {
    counter++;
    var windowWidth = document.body.clientWidth;
    interviewsContainer.style.transition = '.4s ease';
    interviewsContainer.style.marginLeft = '-' + counter * windowWidth + 'px';
});

/**
 * AJAX EXXAMPLE
 */

/*try {
    window.$ = window.jQuery = require('jquery');
    var posts = [];

    $.get('http://api.wearehubble.test', function (data) {
        console.log(data);
    });*/

/*
$('.button').submit(function () {
    $.get('https://wearehubble.test/assets/api.php', $('.form').serialize(), function (data) {
        posts = data;
        if ($(window).width() > 576) {
            appendPosts(6);
            // Generate the bullets
        } else if ($(window).width() > 960) {
            appendPosts(9);
            // Generate the bullets
        } else {
            appendPosts(posts.length);
        }
    });
});
*/

/*   function appendPosts(limit) {
       for (var i = 0; i < limit; i++) {
           $('.posts').append(`<article class="post post--${i}" data-id="${i}">
               <h1>${posts[i].title}</h1>
               ${posts[i].content}
           </article>`);
       }
   }
    $('.bullet').click(function () {
       var offset = $(this).data('offset');
       var limit = $(this).data('limit');
       var count = limit;
        for (var i = offset; i < (offset + limit); i++) {
           $('#post' + count + ' .post__title').text(posts[count].title);
           count--;
       }
   });
    $('.post').click(function () {
       var post = posts[$(this).data('id')];
        $('.article__title').text(post.title);
       $('.article__label').text(post.label);
       $('.article__text--term').text(post.term);
   });
} catch (e) {}*/

/****************

Recruiters

 ****************/

/*
var dashboardButton document.querySelector('.profil__button')

dashboardButton.addEventListener('click', function() {
    setTimeout(function() {
        interviewsContainer.classList.add('profil--fade');
    }, 400);
    setTimeout(function() {
        interviewsContainer.classList.add('profil--hidden');
        main.classList.remove('dashboard--hidden');
    }, 800);
});
*/

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;!function(root, factory) {
     true ? // AMD. Register as an anonymous module unless amdModuleId is set
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function() {
        return root.svg4everybody = factory();
    }).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : "object" == typeof module && module.exports ? // Node. Does not work with strict CommonJS, but
    // only CommonJS-like environments that support module.exports,
    // like Node.
    module.exports = factory() : root.svg4everybody = factory();
}(this, function() {
    /*! svg4everybody v2.1.9 | github.com/jonathantneal/svg4everybody */
    function embed(parent, svg, target) {
        // if the target exists
        if (target) {
            // create a document fragment to hold the contents of the target
            var fragment = document.createDocumentFragment(), viewBox = !svg.hasAttribute("viewBox") && target.getAttribute("viewBox");
            // conditionally set the viewBox on the svg
            viewBox && svg.setAttribute("viewBox", viewBox);
            // copy the contents of the clone into the fragment
            for (// clone the target
            var clone = target.cloneNode(!0); clone.childNodes.length; ) {
                fragment.appendChild(clone.firstChild);
            }
            // append the fragment into the svg
            parent.appendChild(fragment);
        }
    }
    function loadreadystatechange(xhr) {
        // listen to changes in the request
        xhr.onreadystatechange = function() {
            // if the request is ready
            if (4 === xhr.readyState) {
                // get the cached html document
                var cachedDocument = xhr._cachedDocument;
                // ensure the cached html document based on the xhr response
                cachedDocument || (cachedDocument = xhr._cachedDocument = document.implementation.createHTMLDocument(""), 
                cachedDocument.body.innerHTML = xhr.responseText, xhr._cachedTarget = {}), // clear the xhr embeds list and embed each item
                xhr._embeds.splice(0).map(function(item) {
                    // get the cached target
                    var target = xhr._cachedTarget[item.id];
                    // ensure the cached target
                    target || (target = xhr._cachedTarget[item.id] = cachedDocument.getElementById(item.id)), 
                    // embed the target into the svg
                    embed(item.parent, item.svg, target);
                });
            }
        }, // test the ready state change immediately
        xhr.onreadystatechange();
    }
    function svg4everybody(rawopts) {
        function oninterval() {
            // while the index exists in the live <use> collection
            for (// get the cached <use> index
            var index = 0; index < uses.length; ) {
                // get the current <use>
                var use = uses[index], parent = use.parentNode, svg = getSVGAncestor(parent), src = use.getAttribute("xlink:href") || use.getAttribute("href");
                if (!src && opts.attributeName && (src = use.getAttribute(opts.attributeName)), 
                svg && src) {
                    if (polyfill) {
                        if (!opts.validate || opts.validate(src, svg, use)) {
                            // remove the <use> element
                            parent.removeChild(use);
                            // parse the src and get the url and id
                            var srcSplit = src.split("#"), url = srcSplit.shift(), id = srcSplit.join("#");
                            // if the link is external
                            if (url.length) {
                                // get the cached xhr request
                                var xhr = requests[url];
                                // ensure the xhr request exists
                                xhr || (xhr = requests[url] = new XMLHttpRequest(), xhr.open("GET", url), xhr.send(), 
                                xhr._embeds = []), // add the svg and id as an item to the xhr embeds list
                                xhr._embeds.push({
                                    parent: parent,
                                    svg: svg,
                                    id: id
                                }), // prepare the xhr ready state change event
                                loadreadystatechange(xhr);
                            } else {
                                // embed the local id into the svg
                                embed(parent, svg, document.getElementById(id));
                            }
                        } else {
                            // increase the index when the previous value was not "valid"
                            ++index, ++numberOfSvgUseElementsToBypass;
                        }
                    }
                } else {
                    // increase the index when the previous value was not "valid"
                    ++index;
                }
            }
            // continue the interval
            (!uses.length || uses.length - numberOfSvgUseElementsToBypass > 0) && requestAnimationFrame(oninterval, 67);
        }
        var polyfill, opts = Object(rawopts), newerIEUA = /\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/, webkitUA = /\bAppleWebKit\/(\d+)\b/, olderEdgeUA = /\bEdge\/12\.(\d+)\b/, edgeUA = /\bEdge\/.(\d+)\b/, inIframe = window.top !== window.self;
        polyfill = "polyfill" in opts ? opts.polyfill : newerIEUA.test(navigator.userAgent) || (navigator.userAgent.match(olderEdgeUA) || [])[1] < 10547 || (navigator.userAgent.match(webkitUA) || [])[1] < 537 || edgeUA.test(navigator.userAgent) && inIframe;
        // create xhr requests object
        var requests = {}, requestAnimationFrame = window.requestAnimationFrame || setTimeout, uses = document.getElementsByTagName("use"), numberOfSvgUseElementsToBypass = 0;
        // conditionally start the interval if the polyfill is active
        polyfill && oninterval();
    }
    function getSVGAncestor(node) {
        for (var svg = node; "svg" !== svg.nodeName.toLowerCase() && (svg = svg.parentNode); ) {}
        return svg;
    }
    return svg4everybody;
});

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);
//# sourceMappingURL=app.js.map
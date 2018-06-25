require('svg4everybody')({ polyfill: true });

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
function throttle (callback, limit) {
  var wait = false;
  return function (event) {
    if (!wait) {
      callback(event);
      wait = true;
      setTimeout(function () {
        wait = false;
      }, limit);
    }
  }
}

// Handle swipe gesture
function handleSwipe(element) {
    if (touchendX < touchstartX) {
        counter++;
        if (counter >= element.length - 1)
            counter = element.length - 1;
    }
    if (touchendX > touchstartX) {
        counter--;
        if (counter < 0)
            counter = 0;
    }
}

/*
(Slider) Switch slide on swipe
 */

// Posts
postsContainer.addEventListener('touchstart', throttle(function(event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 576) {
        touchstartX = event.changedTouches[0].screenX;
    }
}, 1000, false));

postsContainer.addEventListener('touchend', throttle(function(event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 576) {
        touchendX = event.changedTouches[0].screenX;
        handleSwipe(posts);
        postsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
    }
}, 1000, false));

// Filters
modalsContainer.addEventListener('touchstart', throttle(function(event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 960) {
        touchstartX = event.changedTouches[0].screenX;
    }
}, 1000, false));

modalsContainer.addEventListener('touchend', throttle(function(event) {
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

window.addEventListener('wheel', throttle(function(e) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 960) {
        if (e.deltaY < 0) {
            counter--;
            if (counter < 0)
                counter = 0;
        }
        if (e.deltaY > 0) {
            counter++;
            if (postsContainer.classList.contains('.posts--hidden')) {
                if (counter >= modals.length - 1)
                counter = modals.length - 1;
            } else {
                if (counter >= posts.length - 1)
                counter = posts.length - 1;
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

skipButton.addEventListener('click', function() {
    var windowWidth = document.body.clientWidth;
    counter++;
    if (counter >= modals.length) {
        counter = 0;
        setTimeout(function() {
            skipButton.classList.add('button--fade');
            modalsContainer.classList.add('modals--fade');
        }, 400);
        setTimeout(function() {
            skipButton.classList.add('button--hidden');
            modalsContainer.classList.add('modals--hidden');
            main.classList.remove('main--hidden');
            showHeaderButtons()
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
        setTimeout(function() {
            overlay.classList.remove('overlay--active');
        }, 300);
    } else {
        menu.classList.add('menu--active');
        menuButton.classList.add('button--burger--active');
        overlay.classList.add('overlay--active');
        setTimeout(function() {
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

for (let a = 0; a < filters0.length; a++) {
    filters0[a].addEventListener('click', function() {
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
}

for (let a = 0; a < filters1.length; a++) {
    filters1[a].addEventListener('click', function() {
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
}

for (let a = 0; a < filters2.length; a++) {
    filters2[a].addEventListener('click', function() {
        for (var i = 0; i < filters2.length; i++) {
            if (i !== a) {
                filters2[i].classList.remove('filter--active');
            } else {
                filters2[a].classList.add('filter--active');
            }
        }
        counter++;
        if (counter >= modals.length - 1)
            counter = 0;
            setTimeout(function() {
                skipButton.classList.add('button--fade');
                modalsContainer.classList.add('modals--fade');
            }, 400);
            setTimeout(function() {
                skipButton.classList.add('button--hidden');
                modalsContainer.classList.add('modals--hidden');
                main.classList.remove('main--hidden');
                showHeaderButtons()
            }, 800);
    });
}

/*
Open article modal when clicking on thumbnail
 */

var article = document.querySelector('.article');
var articleButton = document.querySelector('.button--article');

for (var i = 0; i < posts.length; i++) {
    posts[i].addEventListener('click', function() {
        article.classList.remove('article--hidden');
        overlay.classList.add('overlay--active');
        setTimeout(function() {
            overlay.classList.add('overlay--fade');
        }, 10);
    });
}
articleButton.addEventListener('click', function() {
    article.classList.add('article--hidden');
    overlay.classList.remove('overlay--fade');
    setTimeout(function() {
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
    if (window.innerWidth > 960) {
        filtersButton.classList.remove('button--hidden');
        recruitersButton.classList.remove('button--hidden');
    }
}

/*
Posts bullets active on click
 */

var bullets = document.querySelectorAll('.bullet');

for (let a = 0; a < bullets.length; a++) {
    bullets[a].addEventListener('click', function() {
        for (var i = 0; i < bullets.length; i++) {
            if (i !== a) {
                bullets[i].classList.remove('bullet--active');
            } else {
                bullets[a].classList.add('bullet--active');
            }
        }
    });
}



/**
 * AJAX EXXAMPLE
 */
/*
try {
    window.$ = window.jQuery = require('jquery');
    var posts = [];

    $('.button').submit(function () {
        $.get('https://api.hubble.com/posts', $('.form').serialize(), function (data) {
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

    function appendPosts(limit) {
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
} catch (e) {}
*/

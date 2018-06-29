/***
VARIABLES
 ***/

// UI
var main = document.querySelector('.main');
var modalsContainer = document.querySelector('.modals');
var modals = document.querySelectorAll('.modal');
var postsContainer = document.querySelector('.posts');
var posts = document.querySelectorAll('.post');

// CODE
var counter = 0;
var touchstartX = 0;
var touchendX = 0;
/***
FUNCTIONS
 ***/

// DISABLE POSSIBILITY TO SWIPE / SCROLL FOR X AMOUNT OF TIME
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

// HANDLE SWIPE GESTURE
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

/***
SWIPE
 ***/

// SWIPE POSTS

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

// SWIPE FILTERS MODALS

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

/***
SCROLL (EXPERIENCE MOBILE NAVIGATION SWIPE ON DESKTOP)
 ***/

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
            if (main.classList.contains('.main--hidden')) {
                if (counter >= modals.length - 1)
                    counter = modals.length - 1;
            } else if (modalsContainer.classList.contains('.modals--hidden')) {
                if (counter >= posts.length - 1) {
                    counter = posts.length - 1;
                }
            }
        }
        modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
        postsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
    }
}, 1500));

/***
SKIP BUTTON : HIDE FILTERS MODALS AND SHOW THE POSTS ON CLICK
 ***/

var skipButton = document.querySelector('#skip-button');

skipButton.addEventListener('click', function() {
    counter = 0;
    setTimeout(function() {
        skipButton.classList.add('button--fade');
        modalsContainer.classList.add('modals--fade');
    }, 400);
    setTimeout(function() {
        modalsContainer.style.marginLeft = '0px';
        skipButton.classList.add('button--hidden');
        modalsContainer.style.marginLeft = '0px';
        modalsContainer.classList.add('modals--hidden');
        main.classList.remove('main--hidden');
        showHeaderButtons()
    }, 800);
});

/***
OPEN & CLOSE BURGER MENU ON CLICK
 ***/

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


/***
FILTERS
 ***/

var filters0 = document.querySelectorAll('.filter--0');
var filters1 = document.querySelectorAll('.filter--1');
var filters2 = document.querySelectorAll('.filter--2');
var body = document.querySelector(body);

// FILTERS MODAL #1
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

var modalBullets0 = document.querySelectorAll('.modal__bullet--0');

for (var i = 0; i < modalBullets0.length; i++) {
    modalBullets0[i].addEventListener('click', function() {
        var windowWidth = document.body.clientWidth;
        counter = 0;
        if (window.innerWidth < 576) {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
        } else {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth + 18) + 'px)';
        }
    });
}

// FILTERS MODAL #2
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

var modalBullets1 = document.querySelectorAll('.modal__bullet--1');

for (var i = 0; i < modalBullets1.length; i++) {
    modalBullets1[i].addEventListener('click', function() {
        var windowWidth = document.body.clientWidth;
        counter = 1;
        if (window.innerWidth < 576) {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
        } else {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth + 18) + 'px)';
        }
    });
}

// FILTERS MODAL #3
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
                modalsContainer.style.marginLeft = '0px';
                skipButton.classList.add('button--hidden');
                modalsContainer.classList.add('modals--hidden');
                main.classList.remove('main--hidden');
                showHeaderButtons()
            }, 800);
    });
}

var modalBullets2 = document.querySelectorAll('.modal__bullet--2');

for (var i = 0; i < modalBullets2.length; i++) {
    modalBullets2[i].addEventListener('click', function() {
        var windowWidth = document.body.clientWidth;
        counter = 2;
        if (window.innerWidth < 576) {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
        } else {
            modalsContainer.style.marginLeft = 'calc(-' + counter * (windowWidth + 18) + 'px)';
        }
    });
}

/***
SHOW FILTERS MODALS ON CLICK
 ***/

 var filtersButton = document.querySelector('#button-filters');

filtersButton.addEventListener('click', function() {
    counter = 0;
    setTimeout(function() {
        skipButton.classList.remove('button--hidden');
        filtersButton.classList.add('button--hidden');
        modalsContainer.classList.remove('modals--hidden');
        main.classList.add('main--hidden');
    }, 10);
    setTimeout(function() {
        postsContainer.style.marginLeft = '0px';
        skipButton.classList.remove('button--fade');
        modalsContainer.classList.remove('modals--fade');
    }, 400);
});

/***
OPEN & CLOSE ARTICLE MODAL ON CLICK
 ***/

var article = document.querySelector('.article');
var articleButton = document.querySelector('.button--article');

articleButton.addEventListener('click', function() {
    article.classList.add('article--hidden');
    overlay.classList.remove('overlay--fade');
    setTimeout(function() {
        overlay.classList.remove('overlay--active');
    }, 300);
});

/***
SHOW HEADERS BUTTONS AFTER SUBMITTING FILTERS
 ***/

var searchButton = document.querySelector('#button-search');
var recruitersButton = document.querySelector('#button-recruiters');



function showHeaderButtons(button1, button2, button3) {
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

/***
POSTS BULLETS ACTIVE ON CLICK
 ***/

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

/***
INTERVIEW
 ***/

var applyButton = document.querySelector('#button-apply');
var interviewsContainer = document.querySelector('.interviews');
var backButton = document.querySelector('#button-back');

backButton.addEventListener('click', function() {
    counter = 0;
    setTimeout(function() {
        backButton.classList.add('button--hidden');
        interviewsContainer.classList.remove('interviews--fade');
    }, 400);
    setTimeout(function() {
        interviewsContainer.style.marginLeft = '0px';
        interviewsContainer.classList.add('interviews--hidden');
        main.classList.remove('main--hidden');
        filtersButton.classList.remove('button--hidden');
    }, 800);
});

applyButton.addEventListener('click', function() {
    counter = 0;
    main.classList.add('main--hidden');
    article.classList.add('article--hidden');
    overlay.classList.remove('overlay--active');
    interviewsContainer.classList.remove('interviews--hidden');
    filtersButton.classList.add('button--hidden');
    backButton.classList.remove('button--hidden');
    setTimeout(function() {
        interviewsContainer.classList.add('interviews--fade');
    }, 150);
});

var interview0 = document.querySelector('#interview-0');
var touchButton = document.querySelector('.interview__touch');
var startButton = document.querySelector('#interview-start');

touchButton.addEventListener('click', function() {
    interview0.classList.remove('interview--active');
    counter++;
    var windowWidth = document.body.clientWidth;
    interviewsContainer.style.transition = '.4s ease';
    interviewsContainer.style.marginLeft = '-' + (counter * windowWidth) + 'px';
});

window.addEventListener('keydown', function() {
    if (interview0.classList.contains('interview--active')) {
        interview0.classList.remove('interview--active');
        counter++;
        var windowWidth = document.body.clientWidth;
        interviewsContainer.style.transition = '.4s ease';
        interviewsContainer.style.marginLeft = '-' + (counter * windowWidth) + 'px';
    }
});

startButton.addEventListener('click', function() {
    counter++;
    var windowWidth = document.body.clientWidth;
    interviewsContainer.style.transition = '.4s ease';
    interviewsContainer.style.marginLeft = '-' + (counter * windowWidth) + 'px';
});

var jayButton = document.querySelector('#interview-button-jay');

jayButton.addEventListener('click', function() {
    counter++;
    var windowWidth = document.body.clientWidth;
    interviewsContainer.style.transition = '.4s ease';
    interviewsContainer.style.marginLeft = '-' + (counter * windowWidth) + 'px';
});



/***
AJAX REQUEST FOR GENERATING POSTS
 ***/

var obreak = 0;
try {
    window.$ = window.jQuery = require('jquery');
    var dataPosts = [];

    $('.filter--2').click(function () {
        fetchDataPosts();
    });
    $('#skip-button').click(function () {
        fetchDataPosts();
    });

    function fetchDataPosts() {
        console.log($('#register').serialize());
        $.getJSON('http://hubble.test/api', $('#register').serialize(), function (data) {
            dataPosts = data;
            if ($(window).width() > 960 && obreak === 0) {
                let limit = 9;
                let offset = 0;
                obreak++;
                appendPosts(limit);
                for (var i = 0; i < dataPosts.length / limit; i++) {
                    $('.bullets').append(`<span class="bullet" data-offset="${offset}" data-limit="${limit}"></span>`);
                    offset += limit;
                }
                $('.bullet:first-child').addClass('bullet--active');
            } else if ($(window).width() > 576 && obreak === 0) {
                let limit = 6;
                let offset = 0;
                appendPosts(limit);
                for (var i = 0; i < dataPosts.length / limit; i++) {
                    $('.bullets').append(`<span class="bullet" data-offset="${offset}" data-limit="${limit}"></span>`);
                    offset += limit;
                }
                $('.bullet:first-child').addClass('bullet--active');
            } else if (obreak === 0) {
                appendPosts(dataPosts.length);
            }
        });
    }

    function appendPosts(limit) {
        console.log(dataPosts);
        for (var i = 0; i < limit; i++) {
            $('.posts').append(`<div class="post post--${i}" data-id="${i}">
            <img class="post__thumbnail" src="${dataPosts[i].image.src}" alt="${dataPosts[i].image.alt}">
            <div class="post__content">
                <span class="post__label">${dataPosts[i].label}</span>
                <h2 class="post__title">${dataPosts[i].title}</h2>
            </div>
        </div>`);
        }
    }

    $('body').on('click', '.bullet', function () {
        var offset = $(this).data('offset');
        var limit = $(this).data('limit');
        var count = limit;

        for (var i = offset; i < (offset + limit); i++) {
            $('#post' + count + ' .post__title').text(dataPosts[count].title);
            count--;
        }

        $('.bullet').each(function () {
            $(this).removeClass('bullet--active');
        });
        $(this).addClass('bullet--active');
    });

    $('body').on('click', '.post', function () {
        var post = dataPosts[$(this).data('id')];

        $('.article__label').html(post.label);
        $('.article__title').html(post.title);
        $('.article__image').attr('src', post.image.src);
        $('.article__image').attr('alt', post.image.alt);
        $('.article__image--desktop').attr('src', post.image.src);
        $('.article__image--desktop').attr('alt', post.image.alt);
        $('.article__item--term .article__text').html(post.term);
        $('.article__item--location .article__text').html(post.location);
        $('.article__item--salary .article__text').html(post.salary);
        $('.article__item--description .article__text').html(post.description);

        $('.article').removeClass('article--hidden');
        $('.overlay').addClass('overlay--active');
        setTimeout(function() {
            $('.overlay').addClass('overlay--fade');
        }, 10);
    });
} catch (e) {}



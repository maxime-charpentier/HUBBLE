/******************
Recruiters
******************/

/***
SHOW DASHBOARD & OFFERS ON CLICK ON DASHBOARD BUTTON
 ***/

var dashboardButton = document.querySelector('#dashboard-button');
var profilModal = document.querySelector('.profil');
var gestion = document.querySelector('.gestion');
var jobs = document.querySelectorAll('.job');

dashboardButton.addEventListener('click', function() {
    profilModal.classList.add('profil--fadeout');
    gestion.classList.remove('gestion--hidden');
    setTimeout(function() {
        profilModal.classList.add('profil--hidden');
        gestion.classList.add('gestion--fadein');
    }, 600);
});

var counter = 0;
var touchstartX = 0;
var touchendX = 0;

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

function handleSwipe(element) {
    if (touchendX < touchstartX) {
        counter++;
        if (counter >= element.length)
            counter = element.length;
    }
    if (touchendX > touchstartX) {
        counter--;
        if (counter < 0)
            counter = 0;
    }
}

gestion.addEventListener('touchstart', throttle(function(event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 576) {
        touchstartX = event.changedTouches[0].screenX;
    }
}, 1000, false));

gestion.addEventListener('touchend', throttle(function(event) {
    var windowWidth = document.body.clientWidth;
    if (window.innerWidth < 576) {
        touchendX = event.changedTouches[0].screenX;
        handleSwipe(jobs);
        gestion.style.marginLeft = 'calc(-' + counter * (windowWidth - 55) + 'px)';
    }
}, 1000, false));

// ADD ARTICLE MODAL

var addButtonMobile = document.querySelector('#add-button-mobile');
var addButtonDesktop = document.querySelector('#add-button-desktop');
var articleAdd = document.querySelector('#article-recruiter-add');

addButtonMobile.addEventListener('click', function() {
    articleAdd.classList.remove('article--hidden');
});
addButtonDesktop.addEventListener('click', function() {
    articleAdd.classList.remove('article--hidden');
});

var closeButtonAdd = document.querySelector('#close-button-add');

closeButtonAdd.addEventListener('click', function() {
    articleAdd.classList.add('article--hidden');
});

// EDIT ARTICLE MODAL

var editButtons = document.querySelectorAll('.job__button--edit');
var articleEdit = document.querySelector('#article-recruiter-edit');

for (var i = 0; i < editButtons.length; i++) {
    editButtons[i].addEventListener('click', function() {
        articleEdit.classList.remove('article--hidden');
    });
}

var closeButtonEdit = document.querySelector('#close-button-edit');

closeButtonEdit.addEventListener('click', function() {
    articleEdit.classList.add('article--hidden');
    articleShow.classList.add('article--hidden');
});

// SHOW ARTICLE MODAL

var jobs = document.querySelectorAll('.job');
var articleShow = document.querySelector('#article-recruiter-show');

for (var i = 0; i < jobs.length; i++) {
    jobs[i].addEventListener('click', function() {
        articleShow.classList.remove('article--hidden');
    });
}

var closeButtonShow = document.querySelector('#close-button-show');

closeButtonShow.addEventListener('click', function() {
    articleShow.classList.add('article--hidden');
});

var input = $(".article__input--image");

input.replaceWith(input.val('').clone(true));

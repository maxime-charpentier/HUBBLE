console.log('tamere');

/******************
Recruiters
******************/

/***
SHOW DASHBOARD & OFFERS ON CLICK ON DASHBOARD BUTTON
 ***/

var dashboardButton = document.querySelector('#dashboard-button');
var profilModal = document.querySelector('.profil');
var gestion = document.querySelector('.gestion');

dashboardButton.addEventListener('click', function() {
    profilModal.classList.add('profil--fadeout');
    gestion.classList.remove('gestion--hidden');
    setTimeout(function() {
        profilModal.classList.add('profil--hidden');
        gestion.classList.add('gestion--fadein');
    }, 600);
});



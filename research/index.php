<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hubble: Space Jobs</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">-->
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body class="body--background body--research" style="background-image: url('src/svg/wave.svg');">
        <div class="overlay"></div>
        <div class="wrapper wrapper--background" style="background-image: url('src/svg/background.svg');">
            <header class="header">
                <h1 class="brand z-index" style="background-image: url('src/svg/dots.svg');">
                    <a class="brand__link" href="index.php">hubble.</a>
                </h1>
                <div class="header__buttons">
                    <button class="button button--medium" id="skip-button">Skip</button>
                    <button class="button button--medium button--hidden" id="button-back">Back</button>
                    <div class="searchbar">
                        <form class="searchbar__form" action="get">
                            <input class="searchbar__input" type="search">
                            <input type="submit" id="button-search" class="searchbar__submit button button--small button--hidden" style="background-image: url('src/svg/search.svg');">
                            <button id="button-search" class="button button--small button--hidden" style="background-image: url('src/svg/search.svg');"></button>
                        </form>
                    </div>
                    <button id="button-burger" class="button button--burger button--small z-index button--hidden"></button>
                    <button id="button-filters" class="button button--big button--hidden">Filters</button>
                    <a id="button-recruiters" class="button button--big" href="../recruiter">Recruiters</a>
                </div>
            </header>
            <section class="modals">
                <div class="modal__container">
                    <div class="modal" id="modal-0">
                        <div class="modal__body">
                            <img class="modal__image" src="src/svg/profil.svg" alt="Profil placeholder">
                            <p class="modal__feedback">Okay !</p>
                            <p class="modal__question">Now, what's your favorite field ?</p>
                            <div class="filters">
                                <div class="filters__container">
                                    <label class="filter filter--big filter--0" for="jobs">Personal Branding</label>
                                    <label class="filter filter--small filter--0" for="jobs">Air Space</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--small filter--0" for="jobs">Tech</label>
                                    <label class="filter filter--big filter--0" for="jobs">Machine & Maintenance</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--big filter--0" for="jobs">Energy & Transport</label>
                                    <label class="filter filter--small filter--0" for="jobs">Food</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--medium filter--0" for="jobs">Security</label>
                                    <label class="filter filter--medium filter--0" for="jobs">Health</label>
                                    <label class="filter filter--medium filter--0" for="jobs">Business</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal__footer">
                            <div class="modal__bullets">
                                <div class="modal__bullet modal__bullet--0 modal__bullet--active"></div>
                                <div class="modal__bullet modal__bullet--1"></div>
                                <div class="modal__bullet modal__bullet--2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__container">
                    <div class="modal" id="modal-1">
                        <div class="modal__body">
                            <img class="modal__image" src="src/svg/profil.svg" alt="Profil placeholder">
                            <p class="modal__feedback">Copy that !</p>
                            <p class="modal__question">How long do you want to stay ?</p>
                            <div class="filters">
                                <label class="filter filter--1" for="jobs">6 Months</label>
                                <label class="filter filter--1" for="jobs">1 Year</label>
                                <label class="filter filter--1" for="jobs">+1 Year</label>
                            </div>
                        </div>
                        <div class="modal__footer">
                            <div class="modal__bullets">
                                <div class="modal__bullet modal__bullet--0"></div>
                                <div class="modal__bullet modal__bullet--1 modal__bullet--active"></div>
                                <div class="modal__bullet modal__bullet--2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__container">
                    <div class="modal" id="modal-2">
                        <div class="modal__body">
                            <img class="modal__image" src="src/svg/profil.svg" alt="Profil placeholder">
                            <p class="modal__feedback">I got you !</p>
                            <p class="modal__question">Tell me where ?</p>
                            <div class="filters">
                                <div class="filters__container">
                                    <label class="filter filter--2" for="tatooine">Tatooine</label>
                                    <label class="filter filter--2" for="neptune">Neptune</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--2" for="nibiru">Nibiru</label>
                                    <label class="filter filter--2" for="mongo">Mongo</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--2" for="moon">Moon</label>
                                    <label class="filter filter--2" for="omega">Omega</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--2" for="pandora">Pandora</label>
                                    <label class="filter filter--2" for="orilla">Orilla</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal__footer">
                            <div class="modal__bullets">
                                <div class="modal__bullet modal__bullet--0"></div>
                                <div class="modal__bullet modal__bullet--1"></div>
                                <div class="modal__bullet modal__bullet--2 modal__bullet--active"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <main class="main main--hidden">
                <section class="posts">
                </section>
                <div class="bullets">
                </div>
            </main>
            <div class="interviews interviews--hidden">
                <div class="interview__wrapper">
                    <div class="interview interview--active" id="interview-0">
                        <h3 class="interview__title">The Pre Interview</h3>
                        <p class="interview__text">So you want to work at <span class="interview__text--bold">General Electric</span> on <span class="interview__text--bold">Mongo Planet</span>? It’s not complicated. Just Talk the talk, there’s no big deal.</p>
                        <button class="interview__touch">
                            <img class="interview__icon" src="src/svg/touch.svg" alt="Digital detection">
                        </button>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview" id="interview-1">
                        <img class="interview__profil" src="src/images/profil.jpg" alt="Profil picture">
                        <h3 class="interview__title">Hello, <span class="interview__title interview__title--light">Jay Dogo</span></h3>
                        <h4 class="interview__text">Applying for <span class="interview__text--bold">Zero G Mechanics</span></h4>
                        <button class="interview__button" id="interview-start">Take the interview</button>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview" id="interview-2">
                        <div class="interview__infos">
                            <p class="interview__text">Agency Blue</p>
                            <p class="interview__text interview__text--bold">Najla Dyala Operations</p>
                        </div>
                        <div class="interview__messages">
                            <p class="interview__message interview__message--ia">Hey, I’m Najla! I’m a People Operations Generalist.</p>
                            <p class="interview__message interview__message--user">Hey Najla, I’m Joe, nice to meet you!</p>
                            <p class="interview__message interview__message--ia">Likewise! You’re here for the interview?</p>
                            <p class="interview__message interview__message--user">Yes, absolutely. I’ve been preparing for this moment all my life. I’m obsessive like that. Plus I’m super nervous.</p>
                            <p class="interview__message interview__message--ia">Cool! Sounds like you’re a perfect fit!</p>
                        </div>
                        <div class="interview__footer">
                            <button class="interview__button">Yawn...</button>
                            <button class="interview__button">Excited</button>
                        </div>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview" id="interview-win">
                        <div class="interview__container">
                            <p class="interview__title">Well Done ! 🎉</p>
                            <p class="interview__text">You just pass the pre-interview with our Bot. <br class="interview__text--br">Please take a holo appointment for the final interview.</p>
                            <p class="interview__text">The <span class="interview__text interview__text--bold">General Electrics</span>, Team</p>
                        </div>
                        <button class="interview__button">Job Offers</button>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview" id="interview-fail">
                        <div class="interview__container">
                            <p class="interview__title">Oh No ! 😕</p>
                            <p class="interview__text">I’m sure you are fitted for another job. <br class="interview__text--br">Please check out our other offers, keep going !</p>
                            <p class="interview__text">The <span class="interview__text interview__text--bold">General Electrics</span>, Team</p>
                        </div>
                        <button class="interview__button">Job Offers</button>
                    </div>
                </div>
            </div>
        </div>
        <article class="article article--hidden">
            <button class="button button--small button--article z-index"></button>
            <div class="article__container">
                <header class="article__header">
                    <img class="article__image" src="" alt="">
                    <div class="article__heading">
                        <span class="article__label"></span>
                        <h3 class="article__title"></h3>
                    </div>
                </header>
                <main class="article__content">
                    <ul class="article__items">
                        <li class="article__item article__item--term">
                            <h4 class="article__category">Term</h4>
                            <p class="article__text"></p>
                        </li>
                        <li class="article__item article__item--location">
                            <h4 class="article__category">Location</h4>
                            <p class="article__text"></p>
                        </li>
                        <li class="article__item article__item--salary">
                            <h4 class="article__category">Salary</h4>
                            <p class="article__text"></p>
                        </li>
                        <li class="article__item article__item--description">
                            <h4 class="article__category">Description</h4>
                            <p class="article__text"></p>
                        </li>
                    </ul>
                </main>
                <footer class="article__footer">
                    <button class="button button--big button--dark" id="button-apply">Apply</button>
                </footer>
            </div>
            <img class="article__image--desktop" src="src/images/1.jpg" alt="Job Image">
        </article>
        <nav class="menu">
            <button class="button button--big margin-top margin-bottom">Filters</button>
            <a class="button button--big" href="../recruiter">Recruiters</a>
        </nav>
        <form class="form" id="register" action="" method="post" role="form">
            <input name="term" value="6 Months" id="6_mounths" type="radio">
            <input name="term" value="1 Year" id="1_year" type="radio">
            <input name="term" value="+1 Year" id="+1_year" type="radio">

            <input name="field" value="Personnal Branding" id="jobs" type="radio">
            <input name="field" value="Air Space" id="companies" type="radio">
            <input name="field" value="Tech" id="profession" type="radio">
            <input name="field" value="Machine & Maintenace" id="profession" type="radio">

            <input name="location" value="tatooine" id="tatooine" type="radio">
            <input name="location" value="neptune" id="neptune" type="radio">
            <input name="location" value="nibiru" id="nibiru" type="radio">
            <input name="location" value="mongo" id="mongo" type="radio">
            <input name="location" value="moon" id="moon" type="radio">
            <input name="location" value="omega" id="omega" type="radio">
            <input name="location" value="pandora" id="pandora" type="radio">
            <input name="location" value="orilla" id="orilla" type="radio">
        </form>
        <script src="dist/app.js"></script>
    </body>
</html>






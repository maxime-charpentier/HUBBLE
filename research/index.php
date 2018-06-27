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
                    <a id="button-recruiters" class="button button--big" href="../recruiter">Recruiter</a>
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
                                    <label class="filter filter--big filter--0" for="jobs">Digital & Communication</label>
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
                                <div class="modal__bullet modal__bullet--active"></div>
                                <div class="modal__bullet"></div>
                                <div class="modal__bullet"></div>
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
                                <label class="filter filter--1" for="jobs">6 mounths</label>
                                <label class="filter filter--1" for="jobs">1 year</label>
                                <label class="filter filter--1" for="jobs">+1 year</label>
                            </div>
                        </div>
                        <div class="modal__footer">
                            <div class="modal__bullets">
                                <div class="modal__bullet"></div>
                                <div class="modal__bullet modal__bullet--active"></div>
                                <div class="modal__bullet"></div>
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
                                    <label class="filter filter--2" for="jobs">Mars</label>
                                    <label class="filter filter--2" for="jobs">Mercury</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--2" for="jobs">Resistance</label>
                                    <label class="filter filter--2" for="jobs">Venus</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--2" for="jobs">Midria</label>
                                    <label class="filter filter--2" for="jobs">Saturn</label>
                                </div>
                                <div class="filters__container">
                                    <label class="filter filter--2" for="jobs">Uranus</label>
                                    <label class="filter filter--2" for="jobs">Jupiter</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal__footer">
                            <div class="modal__bullets">
                                <div class="modal__bullet"></div>
                                <div class="modal__bullet"></div>
                                <div class="modal__bullet modal__bullet--active"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <main class="main main--hidden">
                <section class="posts">
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post" data-id="1088">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                    <div class="post">
                        <img class="post__thumbnail" src="src/images/1.jpg" alt="Job Image">
                        <div class="post__content">
                            <span class="post__label">Business</span>
                            <h2 class="post__title">Corporate<br>Disorganizer</h2>
                        </div>
                    </div>
                </section>
                <div class="bullets">
                    <button class="bullet bullet--active"></button>
                    <button class="bullet"></button>
                    <button class="bullet"></button>
                    <button class="bullet"></button>
                    <button class="bullet"></button>
                    <button class="bullet"></button>
                </div>
            </main>
            <div class="interviews interviews--hidden">
                <div class="interview__wrapper">
                    <div class="interview interview--active" id="interview-0">
                        <h3 class="interview__title">The Pre Interview</h3>
                        <h4 class="interview__title interview__title--light">Blue Agency</h4>
                        <p class="interview__text">So you want to work at Ueno?  It's not complicated. Just walk the walk. Talk the talk. Through and No big deal Space & Jobs.</p>
                        <button class="interview__touch">
                            <img class="interview__icon" src="src/svg/touch.svg" alt="Digital detection">
                        </button>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview" id="interview-1">
                        <img class="interview__profil" src="src/images/profil.jpg" alt="Profil picture">
                        <h3 class="interview__title">Hello, <span class="interview__title interview__title--light">Clark Griffin</span></h3>
                        <h4 class="interview__text">Corporate Designer</h4>
                        <button class="interview__button" id="interview-start">Start the interview</button>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview" id="interview-2">
                        <div class="interview__infos">
                            <p class="interview__text">Agency Blue</p>
                            <p class="interview__text interview__text--bold">Najla Dyala Operations</p>
                        </div>
                        <div class="interview__messages">
                            <p class="interview__message interview__message--ia">Hey, I’m Najla! I’m a People Operations</p>
                            <p class="interview__message interview__message--user">Um, why do I look like a hot dog?</p>
                            <p class="interview__message interview__message--ia">Cool! Sounds like you’re a perfect fit</p>
                            <p class="interview__message interview__message--ia">I’d like to add you on LinkedIn.</p>
                            <p class="interview__message interview__message--user">I’m ready let’s go</p>
                        </div>
                        <div class="interview__footer">
                            <button class="interview__button">Let's connect</button>
                            <button class="interview__button">Can I hug you ?</button>
                        </div>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview interview--hidden" id="interview-win">
                        <div class="interview__container">
                            <p class="interview__title">Well Done !</p>
                            <p class="interview__text">You just pass the pre-interview with our AI Bot. Please take a holo appointment for the final interview</p>
                            <p class="interview__text">Team, <span class="interview__text interview__text--bold">BlueAgency</span></p>
                        </div>
                        <button class="interview__button">Next Step</button>
                    </div>
                </div>
                <div class="interview__wrapper">
                    <div class="interview interview--hidden" id="interview-fail">
                        <div class="interview__container">
                            <p class="interview__title">Oh no !</p>
                            <p class="interview__text">I’m sure you are lifted for another job. Please check out our other offerts, keep going !</p>
                            <p class="interview__text">Team, BlueAgency</p>
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
                    <img class="article__image" src="src/images/1.jpg" alt="Job Image">
                    <div class="article__heading">
                        <span class="article__label">Business</span>
                        <h3 class="article__title">Corporate<br>Disorganizer</h3>
                    </div>
                </header>
                <main class="article__content">
                    <ul class="article__items">
                        <li class="article__item">
                            <h4 class="article__category article__category--term">Term</h4>
                            <p class="article__text article__text--term">1 year mission</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category">Location</h4>
                            <p class="article__text">Lunar Spaceship, Venus</p>
                            <p class="article__text">Right Ascension: 08h 37m</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category">Salary</h4>
                            <p class="article__text">40k ES / Year</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category">Description</h4>
                            <p class="article__text">The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common</p>
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
            <a class="button button--big" href="../recruiter">Recruiter</a>
        </nav>
        <form class="form" id="register" action="" method="post" role="form">
            <input name="category" value="jobs" id="jobs" form="register" type="checkbox">
            <input name="category" value="companies" id="companies" form="register" type="checkbox">
            <input name="category" value="profession" id="profession" form="register" type="checkbox">
            <input name="duration" value="6 months" id="jobs" form="register" type="checkbox">
            <input name="duration" value="1 year" id="companies" form="register" type="checkbox">
            <input name="duration" value="+1 year" id="profession" form="register" type="checkbox">
        </form>
        <script src="dist/app.js"></script>
    </body>
</html>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hubble: Space Jobs</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
        <link rel="stylesheet" href="../dist/app.css">
    </head>
    <body class="body--recruiter body--background">
        <div class="wrapper wrapper--purple wrapper--background--cercles" style="background-image: url('/src/svg/cercles.svg');">
            <header class="header">
                <h1 class="brand" style="background-image: url('/src/svg/dots.svg');">
                    <a class="brand__link" href="./../index.php">hubble.</a>
                </h1>
                <a class="button button--big button--purple--light button--shadow" href="./../index.php">Job Offers</a>
            </header>
            <section class="profil">
                <div class="profil__modal">
                    <img class="profil__image" src="../src/images/profil.jpg" alt="Company picture">
                    <h3 class="profil__title"><span class="profil__title--bold">Hello,</span> Uniliver</h3>
                    <ul class="profil__items">
                        <li class="profil__item">
                            <p class="profil__text">Manage Company Profile</p>
                            <img class="profil__icon" src="../src/svg/checked.svg" alt="Checked icon">
                        </li>
                        <li class="profil__item">
                            <p class="profil__text">Jobs offers of the Company</p>
                            <img class="profil__icon" src="../src/svg/checked.svg" alt="Checked icon">
                        </li>
                        <li class="profil__item">
                            <p class="profil__text">Edit billing Plans</p>
                            <img class="profil__icon" src="../src/svg/checked.svg" alt="Checked icon">
                        </li>
                    </ul>
                    <button class="profil__button" id="dashboard-button">Dashboard</button>
                </div>
            </section>
            <section class="gestion gestion--hidden">
                <div class="gestion__header">
                    <h3 class="gestion__title"><span class="gestion__title--bold">Hello,</span> Uniliver<br>Welcome to your Dashboard</h3>
                    <div class="gestion__buttons">
                        <button class="gestion__button" id="add-button-desktop">Add Jobs</button>
                    </div>
                </div>
                <div class="gestion__container">
                    <div class="dashboard">
                        <div class="dashboard__profil">
                            <img class="dashboard__image" src="../src/images/profil.jpg" alt="Company picture">
                            <h3 class="dashboard__title"><span class="dashboard__title--bold">Hello, Blue Agency</span><br>Welcome on your Dashboard</h3>
                        </div>
                        <ul class="dashboard__items">
                            <li class="dashboard__item">
                                <h4 class="dashboard__label">Location</h4>
                                <p class="dashboard__text">Orilla Planet</p>
                            </li>
                            <li class="dashboard__item">
                                <h4 class="dashboard__label">Field</h4>
                                <p class="dashboard__text">Food & Environment</p>
                            </li>
                            <li class="dashboard__item">
                                <h4 class="dashboard__label">WorkForce</h4>
                                <p class="dashboard__text">34 000 Employees</p>
                            </li>
                            <li class="dashboard__item">
                                <h4 class="dashboard__label">Creation</h4>
                                <p class="dashboard__text">1930</p>
                            </li>
                        </ul>
                        <div class="dashboard__buttons">
                            <button class="dashboard__button" id="add-button-mobile">Add Jobs</button>
                        </div>
                    </div>
                    <div class="job">
                        <div class="job__buttons">
                            <div class="job__button job__button--edit">
                                <img class="job__icon" src="../src/svg/edit.svg" alt="Edit icon">
                            </div>
                            <div class="job__button job__button--delete">
                                <img class="job__icon" src="../src/svg/delete.svg" alt="Edit icon">
                            </div>
                        </div>
                        <div class="job__infos">
                            <h4 class="job__title">Corporate<br>Disorganizer</h4>
                            <span class="job__label">Business</span>
                        </div>
                    </div>
                    <div class="job">
                        <div class="job__buttons">
                            <div class="job__button job__button--edit">
                                <img class="job__icon" src="../src/svg/edit.svg" alt="Edit icon">
                            </div>
                            <div class="job__button job__button--delete">
                                <img class="job__icon" src="../src/svg/delete.svg" alt="Edit icon">
                            </div>
                        </div>
                        <div class="job__infos">
                            <h4 class="job__title">Corporate<br>Disorganizer</h4>
                            <span class="job__label">Business</span>
                        </div>
                    </div>
                    <div class="job">
                        <div class="job__buttons">
                            <div class="job__button job__button--edit">
                                <img class="job__icon" src="../src/svg/edit.svg" alt="Edit icon">
                            </div>
                            <div class="job__button job__button--delete">
                                <img class="job__icon" src="../src/svg/delete.svg" alt="Edit icon">
                            </div>
                        </div>
                        <div class="job__infos">
                            <h4 class="job__title">Corporate<br>Disorganizer</h4>
                            <span class="job__label">Business</span>
                        </div>
                    </div>
                    <div class="job">
                        <div class="job__buttons">
                            <div class="job__button job__button--edit">
                                <img class="job__icon" src="../src/svg/edit.svg" alt="Edit icon">
                            </div>
                            <div class="job__button job__button--delete">
                                <img class="job__icon" src="../src/svg/delete.svg" alt="Edit icon">
                            </div>
                        </div>
                        <div class="job__infos">
                            <h4 class="job__title">Corporate<br>Disorganizer</h4>
                            <span class="job__label">Business</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <article class="article article--recruiter article--hidden" id="article-recruiter-show">
            <button class="button button--small button--article z-index button--purple--dark" id="close-button-show"></button>
            <div class="article__container">
                <header class="article__header">
                    <img class="article__image" src="../src/images/1.jpg" alt="Job Image">
                    <div class="article__heading">
                        <span class="article__label article__label--recruiter">Business</span>
                        <h3 class="article__title article__title--recruiter">Corporate<br>Disorganizer</h3>
                    </div>
                </header>
                <main class="article__content">
                    <ul class="article__items">
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter article__category--term">Term</h4>
                            <p class="article__text article__text--term">1 year mission</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter">Location</h4>
                            <p class="article__text">Lunar Spaceship, Venus</p>
                            <p class="article__text">Right Ascension: 08h 37m</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter">Salary</h4>
                            <p class="article__text">40k ES / Year</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter">Description</h4>
                            <p class="article__text">The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common</p>
                        </li>
                    </ul>
                </main>
                <footer class="article__footer">
                    <button class="button button--big button--dark button--purple--dark" id="button-apply">Apply</button>
                </footer>
            </div>
            <img class="article__image--desktop" src="../src/images/1.jpg" alt="Job Image">
        </article>
        <article class="article article--recruiter article--hidden" id="article-recruiter-add">
            <button class="button button--small button--article z-index button--purple--dark" id="close-button-add"></button>
            <form action="post" class="article__container">
                <header class="article__header">
                    <button class="article__placeholder">
                        <img class="article__icon" src="../src/svg/image-upload.svg" alt="Image upload icon">
                        <input type="file" class="article__input article__input--image">
                    </button>
                    <div class="article__heading">
                        <input class="article__input article__input--label" placeholder="Business"></input>
                        <input class="article__input article__input--title" placeholder="Corporate Disorganizer"></input>
                    </div>
                </header>
                <main class="article__content">
                    <ul class="article__items">
                        <li class="article__item">
                            <input placeholder="Term" class="article__input article__input--category"></input>
                            <input placeholder="Job's duration" class="article__input article__input--text"></input>
                        </li>
                        <li class="article__item">
                            <input placeholder="Location" class="article__input article__input--category"></input>
                            <input placeholder="Job's location" class="article__input article__input--text"></input>
                        </li>
                        <li class="article__item">
                            <input placeholder="Salary" class="article__input article__input--category"></input>
                            <input placeholder="0.00 SC" class="article__input article__input--text"></input>
                        </li>
                        <li class="article__item">
                            <input placeholder="Description" class="article__input article__input--category"></input>
                            <textarea rows="10" placeholder="Job's description" class="article__input article__input--text article__input--text--textarea"></textarea>
                        </li>
                    </ul>
                </main>
                <footer class="article__footer">
                    <button class="button button--big button--dark button--purple--dark" id="button-apply">Apply</button>
                </footer>
            </form>
            <button class="article__placeholder--desktop">
                <img class="article__icon" src="../src/svg/image-upload.svg" alt="Image upload icon">
                <input type="file" class="article__input article__input--image">
            </button>
        </article>
        <article class="article article--recruiter article--hidden" id="article-recruiter-edit">
            <button class="button button--small button--article z-index button--purple--dark" id="close-button-edit"></button>
            <div class="article__container">
                <header class="article__header">
                    <button class="article__placeholder">
                        <img class="article__icon" src="../src/svg/image-upload.svg" alt="Image upload icon">
                    </button>
                    <div class="article__heading">
                        <span class="article__label article__label--recruiter article__label--upload">Business</span>
                        <h3 class="article__title article__title--recruiter article__title--upload">Corporate<br>Disorganizer</h3>
                    </div>
                </header>
                <main class="article__content">
                    <ul class="article__items">
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter article__category--term">Term</h4>
                            <p class="article__text article__text--term">1 year mission</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter">Location</h4>
                            <p class="article__text">Lunar Spaceship, Venus</p>
                            <p class="article__text">Right Ascension: 08h 37m</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter">Salary</h4>
                            <p class="article__text">40k ES / Year</p>
                        </li>
                        <li class="article__item">
                            <h4 class="article__category article__category--recruiter">Description</h4>
                            <p class="article__text">The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common lorem ipsum text reads as follows Lorem ipsum dolor sit ametsThe most common lorem ipsum text reads as follows Lorem ipsum dolor sit amets.The most common</p>
                        </li>
                    </ul>
                </main>
                <footer class="article__footer">
                    <button class="button button--big button--dark button--purple--dark" id="button-apply">Apply</button>
                </footer>
            </div>
            <button class="article__placeholder--desktop">
                <img class="article__icon" src="../src/svg/image-upload.svg" alt="Image upload icon">
            </button>
        </article>
        <script src="/dist/recruiter.js"></script>
    </body>
</html>

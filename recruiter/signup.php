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
    <body class="body--recruiter body--background" style="background-image: url('/src/svg/wave-purple.svg');">
        <div class="wrapper wrapper--purple wrapper--background" style="background-image: url('/src/svg/background.svg');">
            <header class="header">
                <h1 class="brand" style="background-image: url('/src/svg/dots.svg');">
                    <a class="brand__link" href="../recruiter">hubble.</a>
                </h1>
                <a class="button button--big button--purple--light" href="./../index.php">Job Offers</a>
            </header>
            <section class="sign">
                <div class="sign__modal">
                    <h3 class="sign__title"><span class="sign__title--bold">Hello,</span> Sign up !</h3>
                    <form class="sign__form" action="/src/functions/sign_up.php" method="post">
                        <input class="sign__input" type="text" placeholder="Username" name="username" required>
                        <input class="sign__input" type="password" placeholder="Password" name="password" required>
                        <input class="sign__input sign__input--last" type="password" placeholder="Confirm Password" name="password" required>
                        <button class="sign__button" type="submit">Sign Up</button>
                    </form>
                </div>
            </section>
        </div>
        <script src="/dist/app.js"></script>
    </body>
</html>

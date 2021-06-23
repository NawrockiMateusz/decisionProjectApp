<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/start.css">
    <link rel="stylesheet" href="public/css/navigation.css">
    <link rel="stylesheet" href="public/css/hamburgerMenu.css">
    <script src="public/js/script.js" defer></script>
</head>

<body>
    <main class="main">
        <nav class="nav">
            <a href="public/views/start.html"><img src="public/img/logo.svg" alt="logo" class="nav__img"></a>
            <div class="hamburgerContainer">
                <button class="hamburger">
                    <span class="hamburger__box">
                        <span class="hamburger__inner"></span>
                    </span>
                </button>
                <div class="navigation">
                    <ul class="navigation__list">
                        <li class="navigation__item"><a href="public/views/start.php">HOME</a></li>
                        <li class="navigation__item"><a href="public/views/welcome.php">ABOUT US</a></li>
                        <li class="navigation__item"><a href="public/views/recipe.php">RECIPE</a></li>
                        <li class="navigation__item"><a href="public/views/team.php">TEAM</a></li>
                        <li class=" navigation__item"><a href="public/views/contact.php">CONTACT</a></li>
                        <li class="navigation__item"><a href="https://www.facebook.com/" target="_blank"
                                class="iconLink"><img src="public/img/nav icon/fb.svg" alt="facebook icon"
                                    class="icon"></a>
                        </li>
                        <li class="navigation__item"><a href="https://www.instagram.com/" target="_blank"><img
                                    src="public/img/nav icon/ig.svg" alt="instagram icon" class="icon"></a></li>
                        <li class="navigation__item"><a href="public/views/login.php">Log Out</a></li>

                    </ul>
                </div>
            </div>
            <ul class="list">
                <li class="listItem"><a href="public/views/start.php" class="listLink">Home</a></li>
                <li class="listItem"><a href="public/views/welcome.php" class="listLink">About Us</a></li>
                <li class="listItem"><a href="public/views/recipe.php" class="listLink">Recipe</a></li>
                <li class="listItem"><a href="public/views/team.php" class="listLink">Team</a></li>
                <li class="listItem"><a href="public/views/contact.php" class="listLink">Contact</a></li>
            </ul>
            <section class="iconContainer">
                <a href="https://www.facebook.com/" target="_blank" class="iconLink"><img
                        src="public/img/nav icon/fb.svg" alt="facebook icon" class="icon"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="public/img/nav icon/ig.svg"
                        alt="instagram icon" class="icon"></a>
                <li class="navigation__item"><a href="public/views/login.html" class="logOutLink">Log Out</a></li>
            </section>
        </nav>
        <div class="buttonContainer">
            <button class="button js-makeDecision">Make a decision</button>
        </div>
    </main>
</body>

</html>
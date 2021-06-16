<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/navigation.css">
    <link rel="stylesheet" href="public/css/hamburgerMenu.css">
    <script src="public/js/script.js" defer></script>
</head>

<body>
    <main class="main">
        <nav class="nav">
            <a href="public/views/start.php"><img src="public/img/logo.svg" alt="logo" class="nav__img"></a>
            <div class="hamburgerContainer">
                <button class="hamburger">
                    <span class="hamburger__box">
                        <span class="hamburger__inner"></span>
                    </span>
                </button>
                <div class="navigation">
                    <ul class="navigation__list">
                        <li class="navigation__item"><a href="public/views/start.php">HOME</a></li>
                        <li class="navigation__item"><a href="welcome.php">ABOUT US</a></li>
                        <li class="navigation__item"><a href="recipe.php">RECIPE</a></li>
                        <li class="navigation__item"><a href="team.php">TEAM</a></li>
                        <li class=" navigation__item"><a href="contact.php">CONTACT</a></li>
                        <li class="navigation__item"><a href="https://www.facebook.com/" target="_blank"
                                class="iconLink"><img src="public/img/nav icon/fb.svg" alt="facebook icon" class="icon"></a>
                        </li>
                        <li class="navigation__item"><a href="https://www.instagram.com/" target="_blank"><img
                                    src="public/img/nav icon/ig.svg" alt="instagram icon" class="icon"></a></li>
                        <li class="navigation__item"><a href="login.php">Log Out</a></li>

                    </ul>
                </div>
            </div>
            <ul class="list">
                <li class="listItem"><a href="public/views/start.php" class="listLink">Home</a></li>
                <li class="listItem"><a href="welcome.php" class="listLink">About Us</a></li>
                <li class="listItem"><a href="recipe.php" class="listLink">Recipe</a></li>
                <li class="listItem"><a href="team.php" class="listLink">Team</a></li>
                <li class="listItem"><a href="contact.php" class="listLink">Contact</a></li>
            </ul>
            <section class="iconContainer">
                <a href="https://www.facebook.com/" target="_blank" class="iconLink"><img src="public/img/nav icon/fb.svg"
                        alt="facebook icon" class="icon"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="public/img/nav icon/ig.svg"
                        alt="instagram icon" class="icon"></a>
                <li class="navigation__item"><a href="login.php" class="logOutLink">Log Out</a></li>
        </nav>
        <section class="contactSection">
            <a href="mailto:mail.nawrocki@o2.pl" class="linkContant"><img src="public/img/email.svg" alt="mail"
                    class="mail">
                <p class="contact">mail.nawrocki@o2.pl</p>
            </a>
            <a href="tel:+1111111111" class="linkContant"><img src="public/img/phone.svg" alt="phone" class="phone">
                <p>
                    +48 111111111
                </p>
            </a>
        </section>

    </main>
</body>

</html>
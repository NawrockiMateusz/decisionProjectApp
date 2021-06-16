<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/team.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/normalize.css">

    <link rel="stylesheet" href="../css/hamburgerMenu.css">
    <script src="../js/script.js" defer></script>
</head>

<body>
<nav class="nav">
    <a href="start.php"><img src="../img/logo.svg" alt="logo" class="nav__img"></a>
    <div class="hamburgerContainer">
        <button class="hamburger">
                <span class="hamburger__box">
                    <span class="hamburger__inner"></span>
                </span>
        </button>
        <div class="navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="start.php">HOME</a></li>
                <li class="navigation__item"><a href="welcome.php">ABOUT US</a></li>
                <li class="navigation__item"><a href="recipe.php">RECIPE</a></li>
                <li class="navigation__item"><a href="team.php">TEAM</a></li>
                <li class=" navigation__item"><a href="contact.php">CONTACT</a></li>
                <li class="navigation__item"><a href="https://www.facebook.com/" target="_blank"
                                                class="iconLink"><img src="../img/nav icon/fb.svg" alt="facebook icon"
                                                                      class="icon"></a>
                </li>
                <li class="navigation__item"><a href="https://www.instagram.com/" target="_blank"><img
                                src="../img/nav icon/ig.svg" alt="instagram icon" class="icon"></a></li>
                <li class="navigation__item"><a href="login.php">Log Out</a></li>

            </ul>
        </div>
    </div>
    <ul class="list">
        <li class="listItem"><a href="start.php" class="listLink">Home</a></li>
        <li class="listItem"><a href="welcome.php" class="listLink">About Us</a></li>
        <li class="listItem"><a href="recipe.php" class="listLink">Recipe</a></li>
        <li class="listItem"><a href="team.php" class="listLink">Team</a></li>
        <li class="listItem"><a href="contact.php" class="listLink">Contact</a></li>
    </ul>
    <section class="iconContainer">
        <a href="https://www.facebook.com/" target="_blank" class="iconLink"><img src="../img/nav icon/fb.svg"
                                                                                  alt="facebook icon" class="icon"></a>
        <a href="https://www.instagram.com/" target="_blank"><img src="../img/nav icon/ig.svg" alt="instagram icon"
                                                                  class="icon"></a>
        <li class="navigation__item"><a href="login.php" class="logOutLink">Log Out</a></li>
    </section>
</nav>
<section class="section__team">
    <h2 class="section__teamHeader">Our Team</h2>

    <div class="images__container">
        <div class="button__container">
            <button class="button__imageNext rotate"><img src="../img/iconmonstr-arrow-24.svg" alt="arrow next"
                                                          class="nextButton"></button>
        </div>
        <div class="image__container image__containerForMobile">
            <img src="../img/person1.jpg" alt="John" class="imageTeam">
            <p>Name Surname</p>
            <p>Dietetyk</p>
        </div>
        <div class="image__container">
            <img src="../img/person1.jpg" alt="John" class="imageTeam">
            <p>Name Surname</p>
            <p>Dietetyk</p>
        </div>
        <div class="image__container">
            <img src="../img/person1.jpg" alt="John" class="imageTeam">
            <p>Name Surname</p>
            <p>Dietetyk</p>
        </div>
        <div class="image__container">
            <img src="../img/person1.jpg" alt="John" class="imageTeam">
            <p>Name Surname</p>
            <p>Dietetyk</p>
        </div>
        <div class="image__container">
            <img src="../img/person1.jpg" alt="John" class="imageTeam">
            <p>Name Surname</p>
            <p>Dietetyk</p>
        </div>
        <div class="button__container">
            <button class="button__imageNext"><img src="../img/iconmonstr-arrow-24.svg" alt="arrow next"
                                                   class="nextButton"></button>
        </div>
    </div>
</section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/recipe.css">
    <link rel="stylesheet" href="public/css/navigation.css">
    <link rel="stylesheet" href="public/css/hamburgerMenu.css">
    <link rel="stylesheet" href="public/css/addRecipe.css">
    <script src="public/js/script.js" defer></script>
    <script src="public/js/recipe.js" defer></script>
</head>

<body>
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
                    <li class="navigation__item"><a href="start.php">HOME</a></li>
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
            <li class="listItem"><a href="start.php" class="listLink">Home</a></li>
            <li class="listItem"><a href="welcome.php" class="listLink">About Us</a></li>
            <li class="listItem"><a href="recipe.php" class="listLink">Recipe</a></li>
            <li class="listItem"><a href="team.php" class="listLink">Team</a></li>
            <li class="listItem"><a href="contact.php" class="listLink">Contact</a></li>
        </ul>
        <section class="iconContainer">
            <a href="https://www.facebook.com/" target="_blank" class="iconLink"><img src="public/img/nav icon/fb.svg"
                    alt="facebook icon" class="icon"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="public/img/nav icon/ig.svg" alt="instagram icon"
                    class="icon"></a>
            <li class="navigation__item"><a href="login.php" class="logOutLink">Log Out</a></li>
        </section>
    </nav>
    <section class="section">
        <div class="section__filter">
            <h2 class="section__headerFilter">- Recipes -</h2>
            <form class="section__serach">
                <input type="text" name="search" placeholder="Search..." class="section__searchBar">
            </form>

            <fieldset class="section__filter--without">
                <h3 class="section__headerFieldset">Without:</h3>
                <ul class="section__list--without">
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without meat" class="section__listItem--without">meat

                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without sugar" class="section__listItem--without">sugar
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without lactose" class="section__listItem--without">lactose
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without salt" class="section__listItem--without">salt
                        </label>
                    </li>
                </ul>
            </fieldset>

            <fieldset class="section__filter--upTo">
                <h3 class="section__headerFieldset">Up to:</h3>
                <ul class="section__list--upTo">
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="badach"
                                class="section__listItem--upTo">100 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">250 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">300 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">350 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">400 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">450 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">500 kcal
                        </label>
                    </li>
                </ul>
                <div class="section__buttonsContainer">
                    <button class="section__button">Filter</button>
                    <button class="section__button">Add recipe</button>
                </div>
            </fieldset>

        </div>


        <section class="buttonsSection buttonMobileSection">
            <button class="recipeButton recipeButton--Filter">Filter</button>
            <button class="recipeButton">Add recipe</button>
        </section>
        <div class="section__filterMobile">
            <h2 class="section__headerFilter">- Recipes -</h2>
            <form class="section__serach">
                <input type="text" name="search" placeholder="Search..." class="section__searchBar">
            </form>

            <fieldset class="section__filter--without">
                <h3 class="section__headerFieldset">Without:</h3>
                <ul class="section__list--without">
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without meat" class="section__listItem--without">meat

                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without sugar" class="section__listItem--without">sugar
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without lactose" class="section__listItem--without">lactose
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="checkbox" name="Without salt" class="section__listItem--without">salt
                        </label>
                    </li>
                </ul>
            </fieldset>

            <fieldset class="section__filter--upTo">
                <h3 class="section__headerFieldset">Up to:</h3>
                <ul class="section__list--upTo">
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="badach"
                                class="section__listItem--upTo">100 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">250 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">300 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">350 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">400 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">450 kcal
                        </label>
                    </li>
                    <li class="section__listItem">
                        <label class="section__label">
                            <input type="radio" name="favouriteSinger" value="timberlake"
                                class="section__listItem--upTo">500 kcal
                        </label>
                    </li>
                </ul>
            </fieldset>
            <div class="section__buttonsContainer">
                <button class="section__button js-filter">Filter</button>
            </div>
        </div>
        <div class="addRecipe">
            <form action="addRecipe" method="POST" enctype="multipart/form-data">
                <?php if(isset($messages)) {
                    foreach ($messages as $message){
                        echo $message;
                    }

                }
                ?>
                <p>
                    <label>
                        <input type="text" name="nameRecipe" placeholder="Name" required class="inputName">
                    </label>
                </p>
                <p>
                    <label>
                        <textarea name="descriptionName" id="" cols="30" rows="10" required
                            placeholder="How to prepare:" class="inputDescription"></textarea>
                    </label>
                </p>
                <p>
                    <label>
                        <input type="file" name="photoRecipe" required value="Add photo" class="addPhoto">
                    </label>
                </p>
                <p>
                    <button class="section__button" type="submit">Confirm</button>
                </p>

            </form>
        </div>

    </section>
</body>

</html>
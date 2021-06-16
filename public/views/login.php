<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decision - login</title>
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/login.css">
<!--    <script src="public/js/fromLoginPage.js" defer></script>-->
</head>

<body>
    <main class="main">
        <div class="main__div">
            <section class="section">
                <div class="section__logoImg">
                    <img src="public/img/logo.svg" alt="logo" class="section__image">
                </div>
                <div class="section__login">
                    <p class="section__text">It's your <strong>decision</strong> to change yourself.</p>
                    <div class="section__loginForm">
                        <form action="login" class="section__form" method="POST">
                            <div class="message">
                                <?php if(isset($messages)) {
                                    foreach ($messages as $message){
                                        echo $message;
                                    }

                                }
                                ?>
                            </div>
                            <label>
                                <input type="email" class="section__input" placeholder="Email" name="email">
                            </label>
                            <label>
                                <input type="password" class="section__input" placeholder="Password" name="password">
                            </label>
                            <div class="section__buttons">
                                <button class="section__button" type="submit">Log in</button>
                                <button class="section__button js-signUp">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
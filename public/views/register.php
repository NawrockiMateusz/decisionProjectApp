<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/register.css">

    <script type="text/javascript" src="./public/js/register.js" defer></script>

</head>

<body>
    <main class="main">
        <div class="main__div">
            <section class="section">
                <div class="section__logoImg">
                    <img src="public/img/logo.svg" alt="logo" class="section__image">
                </div>
                <div class="section__login">
                    <div class="section__loginForm">
                        <form action="register" class="section__form" method="POST">
                            <?php
                            if(isset($messages)){
                                foreach($messages as $message) {
                                    echo $message;
                                }
                            }
                            ?>
                            <label>
                                <input type="text" class="section__input" placeholder="User name" name="username">
                            </label>
                            <label>
                                <input type="email" class="section__input" placeholder="Email" name="email">
                            </label>
                            <label>
                                <input type="password" class="section__input" placeholder="Password" name="password">
                            </label>
                            <label>
                                <input type="password" class="section__input" placeholder="Confirm password" name="confirmedPassword">
                            </label>
                            <div class="section__buttons">
                                <button class="section__button" onclick="register()" ">Sign up</button>
                            </div>

                    </div>
                    </form>
                    <a href="login"><button class="section__button">Back to login</button></a>
                </div>
        </div>
        </section>
        </div>
    </main>
</body>

</html>
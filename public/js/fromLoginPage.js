const signUpButton = document.querySelector(".js-signUp");
const logInPassedButton = document.querySelector(".js-logIn-passed");

signUpButton.addEventListener("click", (event) => {
    event.preventDefault();
    location.replace("register.php");
})

logInPassedButton.addEventListener("click", (event) => {
    event.preventDefault();
    location.replace("start.php");
})


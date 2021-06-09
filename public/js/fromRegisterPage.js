
const signUpButton = document.querySelector(".js-logIn");

signUpButton.addEventListener("click", (event) => {
    event.preventDefault();
    location.replace("login.html");
})
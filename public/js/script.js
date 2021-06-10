const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');
const icon = document.querySelector(".js-options");
const logOut = document.querySelector(".logOutInvisible");


const handleClick = () => {
    hamburger.classList.toggle('hamburger--active');
    nav.classList.toggle('navigation--active');
}
hamburger.addEventListener('click', handleClick);

const makeDecision = document.querySelector(".js-makeDecision");

makeDecision.addEventListener("click", (event) => {
    event.preventDefault();
    location.replace("welcome.html");
})

console.log(logOut);
console.log(icon);

icon.addEventListener("click", () => {
    logOut.classList.toggle("logOutVisible");
})


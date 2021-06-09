const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');


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


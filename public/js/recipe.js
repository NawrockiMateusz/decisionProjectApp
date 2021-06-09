const buttonFilter = document.querySelector(".recipeButton--Filter");
const sectionRoll = document.querySelector(".section__filterMobile");
const buttonInFilter = document.querySelector(".js-filter");


buttonFilter.addEventListener("click", () => {
    sectionRoll.classList.toggle("visibleSection");
})

buttonInFilter.addEventListener("click", () => {
    sectionRoll.classList.toggle("visibleSection");
})
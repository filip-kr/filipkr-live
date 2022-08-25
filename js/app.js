$(document).foundation()

const cookieContainer = document.querySelector(".cookie-container");
const cookieBtn = document.querySelector(".cookieBtn");

cookieBtn.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true")
})

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed"))
        cookieContainer.classList.add("active");
}, 2000)
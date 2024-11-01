// JavaScript imports
import './jquery.min.js';
import './jquery.scrollex.min.js';
import './jquery.scrolly.min.js';
import './browser.min.js';
import './breakpoints.min.js';
import './util.js';
import './main.js';

const modal = document.getElementById("modal");
const modalImg = document.getElementById("modalImage");
const images = document.querySelectorAll(".gallery img");
const closeBtn = document.querySelector(".close");

images.forEach(img => {
    img.addEventListener("click", () => {
        modal.style.display = "block";
        modalImg.src = img.src;
    });
});

closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});

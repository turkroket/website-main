const slider = document.querySelector('.slider');
const slideContainer = document.querySelector('.slide-container');
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const slideWidth = slides[0].clientWidth + 16;
let slidePosition = 0;

slideContainer.style.transform = `translateX(-${slidePosition}px)`;

function slideLeft() {
  if (slidePosition > 0) {
    slidePosition -= slideWidth * 3;
    slideContainer.style.transform = `translateX(-${slidePosition}px)`;
  }
}

function slideRight() {
  if (slidePosition < (slideWidth * (slides.length - 3))) {
    slidePosition += slideWidth * 3;
    slideContainer.style.transform = `translateX(-${slidePosition}px)`;
  }
}

prevBtn.addEventListener('click', slideLeft);
nextBtn.addEventListener('click', slideRight);
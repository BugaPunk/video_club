const carousel = document.getElementById('parallaxCarousel');
const slides = carousel.querySelectorAll('.parallax-slide');
const indicators = carousel.querySelectorAll('button');
const slideTitle = document.getElementById('slideTitle');
let currentSlide = 0;

const titles = [
    "Título de la Diapositiva 1",
    "Título de la Diapositiva 2",
    "Título de la Diapositiva 3",
    "Título de la Diapositiva 4"
];

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? '1' : '0';
        slide.style.transform = `translateX(${(i - index) * 10}%)`;
    });
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('bg-white', i === index);
        indicator.classList.toggle('bg-gray-400', i !== index);
    });
    slideTitle.textContent = titles[index];
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

setInterval(nextSlide, 5000);
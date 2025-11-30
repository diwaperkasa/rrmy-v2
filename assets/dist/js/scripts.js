import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Flickity from 'flickity';

let lastScroll = 0;
const navbar = document.getElementById("main-nav");

window.addEventListener("scroll", () => {
    const current = window.scrollY;
    // Shadow activation
    if (current > navbar.offsetHeight) {
        navbar.classList.add("sticky-active");
    } else {
        navbar.classList.remove("sticky-active");
    }
    // Scroll direction detection
    if (current > lastScroll && current > navbar.offsetHeight) {
        navbar.classList.add("sticky-hide"); // hide on down
    } else {
        navbar.classList.remove("sticky-hide"); // show on up
    }

    lastScroll = current;
});


const subsribeHover = document.querySelectorAll('.subsribe-hover');
const subsribePopup = document.querySelector('.subsribe-popup');
const subsribePopupContainer = document.querySelector('.subsribe-popup-container');

subsribeHover.forEach(element => {
    element.addEventListener('mouseenter', () => {
        if (subsribePopup.classList.contains('d-none')) {
            subsribePopup.classList.remove('d-none');
        }
    })
});

subsribePopupContainer.addEventListener('mouseleave', () => {
    if (!subsribePopup.classList.contains('d-none')) {
        subsribePopup.classList.add('d-none');
    }
})

const searchBtn = document.querySelectorAll('.search-btn');
const searchPopup = document.querySelector('.search-popup');
const searchPopupContainer = document.querySelector('.search-popup-container');

searchBtn.forEach(element => {
    element.addEventListener('click', () => {
        if (searchPopup.classList.contains('d-none')) {
            searchPopup.classList.remove('d-none');
        } else {
            searchPopup.classList.add('d-none');
        }
    })
});

searchPopupContainer.addEventListener('mouseleave', () => {
    if (!searchPopup.classList.contains('d-none')) {
        searchPopup.classList.add('d-none');
    }
})

const imageGalleries = document.querySelectorAll('.gallery');

imageGalleries.forEach((gallery) => {
    const flkty = new Flickity(gallery, {
        freeScroll: false,
        wrapAround: true,
        pageDots: false,
        autoPlay: true,
        cellAlign: 'center'
    });
})

const carouselGallery = document.querySelector('.carousel-gallery');

if (carouselGallery) {
    const flkty = new Flickity(carouselGallery, {
        freeScroll: false,
        wrapAround: true,
        pageDots: false,
        autoPlay: false,
        prevNextButtons: false,
        cellAlign: 'center'
    });

    const carouselNav = document.querySelectorAll('.carousel-nav');

    carouselNav.forEach((element) => {
        element.addEventListener('click', () => {
            const id = element.dataset.id;
            flkty.selectCell('#carousel-slide-' + id);
        })
    })

    flkty.on('change', function () {
        const currentSlide = flkty.selectedElement;
        const id = currentSlide.dataset.id;

        carouselNav.forEach((element) => {
            element.classList.remove('active');
        });

        const element = document.querySelector('#carousel-nav-' + id)

        if (element) {
            element.classList.add('active');
        }
    });
}

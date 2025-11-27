import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Flickity from 'flickity';

const navbarContainer = document.getElementById('containerNav');
const navbar = document.getElementById('mainNavbar');
const hiddenMenu = document.querySelectorAll('.hidden-menu');

const getAbsolutePosition = (element) => {
    const rect = element.getBoundingClientRect();
    
    return {
        top: rect.top,
        left: rect.left,
        bottom: rect.bottom,
        right: rect.right,
    };
}

const navbarAnimation = () => {
    const desktopNavMenuPosition = getAbsolutePosition(navbar);
    
    if (desktopNavMenuPosition.top > 0) {
        hiddenMenu.forEach(element => {
            if (!element.classList.contains('d-none')) {
                element.classList.add('d-none');
            }
        });
    
        if (navbarContainer.classList.contains('border-bottom')) {
            navbarContainer.classList.remove(...['border-bottom', 'border-black', 'border-2', 'sticky']);
        }
    } else {
        hiddenMenu.forEach(element => {
            if (element.classList.contains('d-none')) {
                element.classList.remove('d-none');
            }
        });
    
        if (!navbarContainer.classList.contains('border-bottom')) {
            navbarContainer.classList.add(...['border-bottom', 'border-black', 'border-2', 'sticky']);
        }
    }
}

// navbarAnimation();

let isTransitioning = false;

// Detect when transition starts
navbar.addEventListener("transitionstart", () => {
    isTransitioning = true;
});

// Detect when transition ends
navbar.addEventListener("transitionend", () => {
    isTransitioning = false;
});

/**
window.addEventListener('scroll', () => {
    if (isTransitioning) {
        return;
    }

    navbarAnimation();
});
*/

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

    flkty.on('change', function() {
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

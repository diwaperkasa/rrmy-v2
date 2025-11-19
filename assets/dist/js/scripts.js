import 'bootstrap/dist/js/bootstrap.bundle.min.js';

function getAbsolutePosition(element) {
    const rect = element.getBoundingClientRect();
    
    return {
        top: rect.top,
        left: rect.left,
        bottom: rect.bottom,
        right: rect.right,
    };
}

const desktopMenuContainer = document.getElementById('mainNavbar');
const hiddenMenu = document.querySelectorAll('.hidden-menu');

window.addEventListener('scroll', () => {
    const desktopNavMenuPosition = getAbsolutePosition(desktopMenuContainer);

    if (desktopNavMenuPosition.top > 0) {
        hiddenMenu.forEach(element => {
            if (!element.classList.contains('d-none')) {
                element.classList.add('d-none');
            }
        });
    } else {
        hiddenMenu.forEach(element => {
            if (element.classList.contains('d-none')) {
                element.classList.remove('d-none');
            }
        });
    }
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
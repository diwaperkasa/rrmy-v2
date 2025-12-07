import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'sharer.js/sharer.min.js';
import Flickity from 'flickity';

(async () => {
    let lastScroll = 0;
    const navbar = document.getElementById("main-nav");
    const headerTop = document.querySelector(".header-top");
    
    window.addEventListener("scroll", () => {
        const current = window.scrollY;
        const offsetHeight = navbar.offsetHeight + headerTop.offsetHeight;
        // Shadow activation
        if (current > offsetHeight) {
            navbar.classList.add("sticky-active");
        } else {
            navbar.classList.remove("sticky-active");
        }
        // Scroll direction detection
        if (current > lastScroll && current > offsetHeight) {
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
            cellAlign: 'center'
        });

        const carouselNavigationGallery = document.querySelector('.carousel-navigation-gallery');

        const flktyNavGallery = new Flickity(carouselNavigationGallery, {
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
                flktyNavGallery.selectCell('#carousel-nav-' + id);
            })
        })
    
        flkty.on('change', function () {
            const currentSlide = flkty.selectedElement;
            const id = currentSlide.dataset.id;
    
            flktyNavGallery.selectCell('#carousel-nav-' + id);
        });
    }
    
    const moreCategoryArticle = document.querySelector('.more-category-article');
    
    if (moreCategoryArticle) {
        let page = 2;
        const length = 10;
        const term_id = moreCategoryArticle.dataset.term_id;

        moreCategoryArticle.addEventListener("click", async function() {
            const content = moreCategoryArticle.innerHTML;
            moreCategoryArticle.disabled = true;
            moreCategoryArticle.innerHTML = '<div class="loader"></div>';
    
            try {
                const res = await fetch(`/wp-admin/admin-ajax.php?${new URLSearchParams({
                    action: 'more_category_article',
                    page: page,
                    length: length,
                    term_id: term_id,
                })}`, {
                    headers: {
                        "Content-type": "application/json"
                    }
                }).then(async (response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
        
                    return await response.json()
                });

                const articleContainer = document.querySelector('#category-container')

                res.data.forEach((row) => {
                    articleContainer.insertAdjacentHTML('beforeend', `<div class="col-md-6 pb-3 pb-md-4">${row}</div>`)
                });

                page++;
            } catch (error) {} finally {
                moreCategoryArticle.innerHTML = content
                moreCategoryArticle.disabled = false;
            }
        });
    }

    const moreArticle = document.querySelector('.more-article-btn');

    if (moreArticle) {
        let page = 2;
        const length = 10;

        moreArticle.addEventListener("click", async function() {
            const content = moreArticle.innerHTML;
            moreArticle.disabled = true;
            moreArticle.innerHTML = '<div class="loader"></div>';
    
            try {
                const res = await fetch(`/wp-admin/admin-ajax.php?${new URLSearchParams({
                    action: 'more_article',
                    page: page,
                    length: length,
                })}`, {
                    headers: {
                        "Content-type": "application/json"
                    }
                }).then(async (response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
        
                    return await response.json()
                });

                const articleContainer = document.querySelector('#latest-container');

                res.data.forEach((row) => {
                    articleContainer.insertAdjacentHTML('beforeend', `<div class="col-lg-4 col-md-6 pb-3 pb-md-4">${row}</div>`)
                });

                page++;
            } catch (error) {} finally {
                moreArticle.innerHTML = content
                moreArticle.disabled = false;
            }
        });
    }
})()

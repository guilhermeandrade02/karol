// AOS Animation 
AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: false, // Permite que a animação ocorra múltiplas vezes
    mirror: true, // Faz a animação ocorrer tanto no scroll down quanto no scroll up
    offset: 120, // Define quando a animação deve ser acionada
    anchorPlacement: 'top-center' // Define o ponto de referência para a animação
});


// Menu Mobile
document.addEventListener('DOMContentLoaded', function () {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    mobileToggle.addEventListener('click', function () {
        this.classList.toggle('active');
        mainNav.classList.toggle('active');
    });

    // Submenu Mobile
    const menuParents = document.querySelectorAll('.menu-item-has-children');

    menuParents.forEach(item => {
        const link = item.querySelector('a');

        link.addEventListener('click', function (e) {
            if (window.innerWidth <= 992) {
                e.preventDefault(); // impede o clique de redirecionar
                item.classList.toggle('active'); // abre/fecha o submenu
            }
        });
    });

    // Header Scroll Effect
    const header = document.querySelector('.header');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Fechar menu ao clicar em um link
    const navLinks = document.querySelectorAll('.main-nav a');


});
// Adicionar evento de clique para abrir/fechar o submenu
document.addEventListener('DOMContentLoaded', function () {
    const menuItem = document.querySelector('.menu-item-has-children');
    const subMenu = document.querySelector('.sub-menu');
    const chevron = document.querySelector('.menu-item-has-children .fa-chevron-down');

    // Alternar submenu ao clicar no item do menu
    menuItem.addEventListener('click', function (e) {
        // Impedir que o clique se propague
        if (e.target.tagName === 'A') {
            e.preventDefault();
        }

        // Alternar a classe 'active' no submenu
        subMenu.classList.toggle('active');

        // Rotacionar a seta
        chevron.classList.toggle('rotated');
    });

    // Fechar o submenu ao clicar fora dele
    document.addEventListener('click', function (e) {
        if (!menuItem.contains(e.target)) {
            subMenu.classList.remove('active');
            chevron.classList.remove('rotated');
        }
    });

    // Prevenir que cliques no submenu fechem o menu
    subMenu.addEventListener('click', function (e) {
        e.stopPropagation();
    });
});

// Filtro de categorias
document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true
    });
    // Filtro de categorias
    const categoryButtons = document.querySelectorAll('.category-btn');
    categoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });
});




var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    slidesPerGroup: 1, // muda só 1 por vez
    loop: true,
    autoplay: {
        delay: 2000, // tempo em ms (3 segundos)
        disableOnInteraction: false // continua mesmo se clicar/arrastar
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        }, // celular
        768: {
            slidesPerView: 2
        }, // tablet
        1024: {
            slidesPerView: 3
        }, // desktop
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true
    });

    // Initialize Swiper
    var swiper = new Swiper('.beauty-carousel', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        }
    });
});

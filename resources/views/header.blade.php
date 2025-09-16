<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC Beauty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <h2>KC Beauty </h2>
                </a>
            </div>

            @include('nav')

            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    
    <style>
        .beauty-carousel {
            width: 100%;
            height: 700px;
            position: relative;
            margin: 40px 0;
            overflow: hidden;
        }

        .beauty-carousel .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            background-position: top center; /* Alterado para iniciar do topo */
            background-size: cover;
            position: relative;
        }

        .beauty-carousel .slide-content {
            position: absolute;
            bottom: 60px;
            left: 50px;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            max-width: 500px;
            z-index: 10;
        }

        .beauty-carousel .slide-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .beauty-carousel .slide-description {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .beauty-carousel .btn {
            background-color: #d29f9f;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .beauty-carousel .btn:hover {
            background-color: #bf8b8b;
            transform: translateY(-2px);
        }

        .beauty-carousel .swiper-button-next,
        .beauty-carousel .swiper-button-prev {
            color: white;
            background: rgba(0, 0, 0, 0.3);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .beauty-carousel .swiper-button-next:after,
        .beauty-carousel .swiper-button-prev:after {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .beauty-carousel .swiper-button-next:hover,
        .beauty-carousel .swiper-button-prev:hover {
            background: rgba(0, 0, 0, 0.5);
        }

        .beauty-carousel .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: white;
            opacity: 0.5;
        }

        .beauty-carousel .swiper-pagination-bullet-active {
            opacity: 1;
            background: #d29f9f;
        }

        @media (max-width: 768px) {
            .beauty-carousel {
                height: 400px;
            }

            .beauty-carousel .slide-content {
                left: 30px;
                bottom: 40px;
                max-width: 80%;
            }

            .beauty-carousel .slide-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .beauty-carousel {
                height: 350px;
            }

            .beauty-carousel .slide-content {
                left: 20px;
                bottom: 30px;
            }

            .beauty-carousel .slide-title {
                font-size: 1.7rem;
            }

            .beauty-carousel .slide-description {
                font-size: 1rem;
            }
        }
    </style>

    <div class="beauty-carousel">
        <div class="swiper-wrapper">
            <!-- Slide 1 - Com background-position top center -->
            <div class="swiper-slide" style="background-image: url('{{ asset('images/banner/banner1.png') }}'); background-position: top center;">
                <div class="slide-content" data-aos="fade-right">
                    <h1 class="slide-title">Harmonização facial e corporal personalizadas</h1>
                    <a href="#contact" class="btn">Agende sua Avaliação</a>
                </div>
            </div>

            <!-- Slide 2 - Com background-position top center -->
            <div class="swiper-slide" style="background-image: url('{{ asset('images/banner/banner2.png') }}'); background-position: top center;">
                <div class="slide-content" data-aos="fade-right">
                    <h1 class="slide-title">Lifting facial sem agulhas e sem cortes</h1>
                    <p class="slide-description">Ultraformer, tecnologia de ponta e mais moderna, para rejuvenescimento
                        facial e estímulo de
                        colágeno, tratamento de flacidez muscular e tissular da pele.</p>
                    <a href="#contact" class="btn">Conheça o Procedimento</a>
                </div>
            </div>
        </div>

        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
    </script>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC Beauty</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar -->
    {{-- <div class="top-bar">
        <div class="container">
            <div class="contact-info">
                <span><i class="fas fa-phone-alt"></i> (11) 9999-9999</span>
                <span><i class="fas fa-map-marker-alt"></i> Av. Paulista, 1000 - São Paulo</span>
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div> --}}

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="/">
                    {{-- <img src="https://via.placeholder.com/180x50?text=Clínica+da+Carol" alt="KC Beauty"> --}}
                    <h2>KC Beauty </h2>
                </a>
            </div>

            <nav class="main-nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li class="menu-item-has-children">
                        <a href="#services">Procedimentos <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="#">Harmonização Facial</a></li><br>
                            <li><a href="#">Preenchimento Labial</a></li>
                            <li><a href="#">Botox</a></li>
                            <li><a href="#">Fios de Sustentação</a></li>
                            <li><a href="#">Ultraformer</a></li>
                        </ul>
                    </li>
                    <li><a href="#results">Resultados</a></li>
                    <li><a href="#testimonials">Depoimentos</a></li>
                    <li><a href="#catalog">Catálogo</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>

            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Hero Carousel -->
    <div class="hero-carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-slide active"
                style="background-image: url('https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
                <div class="hero-content">
                    <h1>Harmonização Facial com Excelência</h1>
                    <p>Procedimentos personalizados para realçar sua beleza natural com segurança e resultados
                        impressionantes.</p>
                    <a href="#contact" class="btn">Agende sua Avaliação</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-slide"
                style="background-image: url('https://images.unsplash.com/photo-1599351431403-64b3608dcf2b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
                <div class="hero-content">
                    <h1>Preenchimento Labial Natural</h1>
                    <p>Resultados volumosos e naturais com técnicas avançadas de preenchimento labial.</p>
                    <a href="#contact" class="btn">Conheça o Procedimento</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-slide"
                style="background-image: url('https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
                <div class="hero-content">
                    <h1>Promoção Especial de Verão</h1>
                    <p>20% de desconto em todos os procedimentos até o final do mês.</p>
                    <a href="#contact" class="btn">Saiba Mais</a>
                </div>
            </div>
        </div>

        <!-- Controles do Carrossel -->
        <button class="carousel-control prev"><i class="fas fa-chevron-left"></i></button>
        <button class="carousel-control next"><i class="fas fa-chevron-right"></i></button>

        <!-- Indicadores -->
        <div class="carousel-indicators">
            <span class="indicator active"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
        </div>
    </div>

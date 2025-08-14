<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KC Beauty | Estética Avançada</title>

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Reset e Estilos Globais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* FUNDO IDÊNTICO AO 7TH BEAUTY LAB */
        body {
            font-family: 'Montserrat', sans-serif;
            color: #555;
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            background: #fff;
            position: relative;
        }

        body::before,
        body::after {
            content: '';
            position: fixed;
            top: 0;
            width: calc(50% - 600px);
            height: 100vh;
            background-color: #f8f3ef;
            z-index: -1;
        }

        body::before {
            left: 0;
        }

        body::after {
            right: 0;
        }

        @media (max-width: 1200px) {
            body::before,
            body::after {
                width: 20px;
            }
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
            color: #333;
        }

        a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Top Bar */
        .top-bar {
            background-color: #f8f3ef;
            padding: 10px 0;
            font-size: 14px;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contact-info span {
            margin-right: 20px;
            color: #777;
        }

        .contact-info i {
            margin-right: 5px;
            color: #d4af9a;
        }

        .social-links a {
            color: #777;
            margin-left: 15px;
            font-size: 16px;
        }

        .social-links a:hover {
            color: #d4af9a;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0px;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .header.scrolled {
            top: 0;
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 15px;
        }

        .logo img {
            height: 50px;
            transition: all 0.3s ease;
        }

        .main-nav ul {
            display: flex;
            list-style: none;
        }

        .main-nav>ul>li {
            position: relative;
            margin: 0 15px;
        }

        .main-nav>ul>li>a {
            color: #333;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 0;
            position: relative;
        }

        .main-nav>ul>li>a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #d4af9a;
            transition: width 0.3s ease;
        }

        .main-nav>ul>li>a:hover:after,
        .main-nav>ul>li.current-menu-item>a:after {
            width: 100%;
        }

        /* Submenu */
        .sub-menu {
            position: absolute;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }

        .menu-item-has-children:hover .sub-menu {
            opacity: 1;
            visibility: visible;
        }

        .sub-menu li {
            border-bottom: 1px solid #f5f5f5;
        }

        .sub-menu li a {
            display: block;
            padding: 12px 20px;
            color: #555;
            font-size: 14px;
            text-transform: none;
            letter-spacing: 0;
        }

        .sub-menu li a:hover {
            background: #f9f6f3;
            color: #d4af9a;
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Estilos do Carrossel */
        .hero-carousel {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 700px;
            overflow: hidden;
        }

        .carousel-inner {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .carousel-slide {
            position: absolute;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .carousel-slide.active {
            opacity: 1;
        }

        .carousel-slide:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
            max-width: 600px;
            padding: 0 5%;
        }

        .hero-content h1 {
            font-size: 60px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .btn {
            display: inline-block;
            padding: 14px 35px;
            background: #d4af9a;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #c19a84;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Controles do Carrossel */
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
        }

        .carousel-control:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .carousel-control.prev {
            left: 30px;
        }

        .carousel-control.next {
            right: 30px;
        }

        /* Indicadores */
        .carousel-indicators {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .indicator.active {
            background: white;
            transform: scale(1.2);
        }

        /* Seções */
        .section-padding {
            padding: 100px 0;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .bg-light {
            background: #f9f6f3 !important;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .section-header p {
            color: #777;
            font-size: 18px;
        }

        /* Sobre */
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-image {
            flex: 1;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .about-features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .feature {
            text-align: center;
            padding: 30px 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature i {
            font-size: 40px;
            color: #d4af9a;
            margin-bottom: 20px;
        }

        .feature h4 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        /* Procedimentos */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
        }

        .service-card {
            border-radius: 10px;
            overflow: hidden;
            margin-right: 10px;
            perspective: 1000px;
        }

        .service-inner {
            position: relative;
            width: 100%;
            height: 300px;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            cursor: pointer;
            border-radius: 10px;
        }

        .service-card:hover .service-inner {
            transform: rotateY(180deg);
        }

        .service-front,
        .service-back {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            backface-visibility: hidden;
            top: 0;
            left: 0;
            overflow: hidden;
            box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
        }

        .service-front {
            /* imagem está aqui */
        }

        .service-front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
            border-radius: 10px;
        }

        .service-back {
            background-color: #f8f8f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            font-size: 0.8rem;
            transform: rotateY(180deg);
        }

        /* Resultados */
        .results-gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .result-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            height: 350px;
        }

        .result-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .result-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .result-item:hover .result-overlay {
            opacity: 1;
        }

        .result-overlay i {
            color: #fff;
            font-size: 40px;
        }

        /* Depoimentos */
        .testimonials-slider {
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonial {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .client-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .client-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-text {
            font-size: 18px;
            font-style: italic;
            margin-bottom: 20px;
            color: #555;
        }

        .client-name {
            font-weight: 600;
            color: #333;
        }

        .client-location {
            color: #d4af9a;
            font-size: 14px;
        }

        /* Contato */
        .contact-content {
            display: flex;
            gap: 50px;
        }

        .contact-form {
            flex: 1;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #eee;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
        }

        .form-group textarea {
            height: 150px;
        }

        .contact-info {
            flex: 1;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .info-icon {
            font-size: 20px;
            color: #d4af9a;
            margin-right: 15px;
            margin-top: 5px;
        }

        .info-text h4 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Footer */
        .footer {
            background: #333;
            color: #fff;
            padding: 70px 0 0;
        }

        .footer-columns {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        .footer-col h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: #d4af9a;
        }

        .footer-col p {
            color: #bbb;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #bbb;
            font-size: 14px;
        }

        .footer-col ul li a:hover {
            color: #d4af9a;
        }

        .contact-info li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #bbb;
            font-size: 14px;
        }

        .contact-info i {
            margin-right: 10px;
            color: #d4af9a;
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        .footer-social {
            margin-top: 20px;
        }

        .footer-social a {
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50%;
            margin-right: 8px;
            transition: all 0.3s ease;
        }

        .footer-social a:hover {
            background: #d4af9a;
            color: #fff;
        }

        .footer-bottom {
            background: #222;
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            color: #999;
        }

        /* Responsivo */
        @media (max-width: 992px) {
            .header .container {
                padding: 15px;
            }

            .main-nav {
                position: fixed;
                top: 0;
                left: -100%;
                width: 280px;
                height: 100vh;
                background: #fff;
                padding: 70px 30px 30px;
                overflow-y: auto;
                transition: all 0.5s ease;
                z-index: 999;
            }

            .main-nav.active {
                left: 0;
                box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
            }

            .main-nav ul {
                flex-direction: column;
            }

            .main-nav>ul>li {
                margin: 0 0 15px;
            }

            .main-nav>ul>li>a {
                padding: 8px 0;
            }

            .sub-menu {
                position: static;
                width: 100%;
                box-shadow: none;
                opacity: 1;
                visibility: visible;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }

            .menu-item-has-children .sub-menu {
                padding-left: 15px;
            }

            .menu-item-has-children.active .sub-menu {
                max-height: 500px;
                margin-top: 10px;
            }

            .mobile-menu-toggle {
                display: block;
                z-index: 1001;
            }

            .hero-content h1 {
                font-size: 42px;
            }

            .about-content {
                flex-direction: column;
            }

            .about-features {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .results-gallery {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-columns {
                grid-template-columns: repeat(2, 1fr);
            }

            .contact-content {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .top-bar .container {
                flex-direction: column;
            }

            .contact-info {
                margin-bottom: 10px;
            }

            .hero-carousel {
                min-height: 600px;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .results-gallery {
                grid-template-columns: 1fr;
            }

            .footer-columns {
                grid-template-columns: 1fr;
            }
        }

        /* Efeito de hover em cards (inspirado) */
        .tratamento-card {
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .tratamento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Botão gradiente (exemplo genérico) */
        .botao-7th {
            background: linear-gradient(90deg, #FF6B6B, #FF8E8E);
            border: none;
            transition: opacity 0.3s;
        }

        .botao-7th:hover {
            opacity: 0.9;
        }

        .signature {
            font-style: italic;
            margin-top: 2rem;
        }
    </style>
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

    <!-- Sobre -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="section-header text-left">
                <h2>Sobre a Clínica</h2>
                <p>Conheça nossa história</p>
            </div>

            <div class="about-content">
                <div class="about-text text-left">
                    <div class="intro-text mb-5">
                        <p class="lead">Prazer, me chamo Karol Cristina Ribas de Andrade Ávila</p>

                        <p>
                            Biomédica esteta CRBM-2268 formada pelas Faculdades Pequeno Príncipe,
                            pós-graduada em biomedicina estética e com 7 anos de experiência em
                            estética facial e corporal.
                        </p><br>
                        <p>
                            A clínica <strong>KC Beauty</strong> surgiu do sonho de proporcionar os melhores
                            tratamentos, técnicas e experiências de embelezamento na área de estética,
                            com um diferencial exclusivo: <em>amor, carinho e autocuidado</em>.
                        </p><br>
                        <p>
                            Busco constantemente me especializar nos melhores cursos e congressos pelo
                            Brasil e, em breve, pelo mundo. Realçar a beleza dos meus pacientes vai
                            muito além de um procedimento estético - aqui renovamos autoestimas e
                            transformamos vidas.
                        </p><br>
                        <p>
                            Prezamos por um ambiente acolhedor e aconchegante, onde cada paciente é
                            tratado de maneira única e personalizada.
                        </p>
                        <p class="signature">
                            Espero sua visita em breve! Aqui você é nossa estrela e iremos cuidar de você!<br>
                            <strong>Com carinho, Karol.</strong>
                        </p>
                    </div>

                    <div class="about-features">
                        <!-- Missão -->
                        <div class="feature text-left">
                            <div class="feature-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Missão</h4>
                                <p>Promover autoestima, bem-estar e confiança por meio de tratamentos estéticos
                                    avançados, com atendimento humanizado, acolhedor e ético.</p>
                            </div>
                        </div>

                        <!-- Valores -->
                        <div class="feature text-left">
                            <div class="feature-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Valores</h4>
                                <div style="text-align: left;">
                                    <strong>Beleza com Verdade:</strong> Valorizamos a beleza real de cada pessoa<br>
                                    <strong>Cuidado que Acolhe:</strong> Espaço de escuta e conexão<br>
                                    <strong>Autoestima como Propósito:</strong> Despertar sorrisos sinceros<br>
                                    <strong>Excelência com Humanidade:</strong> Conhecimento, técnica e
                                    sensibilidade<br>
                                    <strong>Ética e Respeito:</strong> Clareza e transparência em todas as ações
                                </div>
                            </div>
                        </div>

                        <!-- Visão -->
                        <div class="feature text-left">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Visão</h4>
                                <p>Ser referência em estética avançada, transformando vidas através do cuidado com
                                    beleza,
                                    autoestima e bem-estar de forma humanizada e inovadora.</p>
                            </div>
                        </div>
                    </div><br><br>
                    <div>
                        <div class="section-header text-left">
                            <h2>Porque escolher a clínica KC beauty </h2>
                        </div>

                        <div>
                            <p>Nossa clínica oferece tratamentos individualizados, com o que há de mais moderno na
                                estética avançada.</p><br>
                            <p>As melhores tecnologias e linhas de produtos estéticos do mercado, trazendo
                                segurança e eficácia.</p><br>
                            <p>Resultados naturais que valorizam os traços de cada paciente, com naturalidade e
                                harmonia.</p><br>
                            <p>Contamos com uma equipe especializada, profissionais com mais de 6 anos de
                                experiêcia clínica, especialistas na área da beleza facial e corporal</p><br>
                            <p>Utilizamos equipamentos de pontas e com tecnologias avançadas.
                                Temos uma clínica moderna, ambiente confortável e um café que você só encontra
                                aqui.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Procedimentos -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Nossos Procedimentos</h2>
                <p>Conheça nossos tratamentos especializados</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-inner">
                        <div class="service-front service-image">
                            <img src="https://7thbeautylab.com.br/wp-content/uploads/2024/07/flacidez.jpg"
                                alt="Harmonização Facial">
                        </div>
                        <div class="service-back">
                            <p>Ultraformer e Bioestimulador de Colágeno: são técnicas estéticas que têm
                                como objetivo estimular a produção natural de colágeno da pele,
                                promovendo rejuvenescimento, firmeza e melhora da flacidez.</p>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-inner">
                        <div class="service-front service-image">
                            <img src="https://7thbeautylab.com.br/wp-content/uploads/2024/07/LABIOS.png"
                                alt="Preenchimento Labial">
                        </div>
                        <div class="service-back">
                            <p>Preenchimento facial: procedimento para restaurar volumes, harmonizar o
                                rosto e suavizar sinais do envelhecimento. </p>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-inner">
                        <div class="service-front service-image">
                            <img src="https://7thbeautylab.com.br/wp-content/uploads/2024/07/olheiras.jpg"
                                alt="Botox">
                        </div>
                        <div class="service-back">
                            <p>Lumière, Skinbooste e microagulhamento: melhora a luminosidade, viço,
                                textura e tom da pele, manchas como melasma e pigmentações, reduzindo
                                linhas finas, poros dilatados e cicatrizes de acne. </p>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-inner">
                        <div class="service-front service-image">
                            <img src="https://7thbeautylab.com.br/wp-content/uploads/2024/07/RUGAS.jpg"
                                alt="Tratamento de Rugas">
                        </div>
                        <div class="service-back">
                            <p>gordura localizada: Procedimentos para eliminar gordura localizada de forma
                                não invasiva, reduzindo medidas em áreas como abdômen, flancos, culote,
                                braços, costas etc.</p>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-inner">
                        <div class="service-front service-image">
                            <img src="https://7thbeautylab.com.br/wp-content/uploads/2024/07/PROTOCOLO.jpg"
                                alt="Protocolo Estético">
                        </div>
                        <div class="service-back">
                            <p>Os procedimentos para glúteos ajudam a estimular a
                                produção de colágeno, melhorar a firmeza, textura e elasticidade da pele,
                                reduzir a flacidez, prevenir a queda do bumbum, ativar e tonificar o músculo
                                glúteo, além de levantar, projetar e melhorar o formato, corrigindo depressões
                                ou assimetrias de forma natural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resultados -->
    <section id="results" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Resultados Reais</h2>
                <p>Veja a transformação de nossas clientes</p>
            </div>

            <div class="results-gallery">
                <div class="result-item">
                    <img src="https://via.placeholder.com/400x500?text=Antes/Depois+1" alt="Resultado 1">
                    <div class="result-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <div class="result-item">
                    <img src="https://via.placeholder.com/400x500?text=Antes/Depois+2" alt="Resultado 2">
                    <div class="result-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <div class="result-item">
                    <img src="https://via.placeholder.com/400x500?text=Antes/Depois+3" alt="Resultado 3">
                    <div class="result-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section id="testimonials" class="section-padding bg-light">
        <div class="container">
            <div class="section-header">
                <h2>Depoimentos</h2>
                <p>O que nossas clientes dizem</p>
            </div>

            <div class="testimonials-slider">
                <div class="testimonial">
                    <div class="client-photo">
                        <img src="https://via.placeholder.com/150?text=Cliente+1" alt="Cliente 1">
                    </div>
                    <p class="testimonial-text">"Fiz harmonização facial na KC Beauty e amei o resultado! Ficou
                        super natural, exatamente como eu queria. A Carol é extremamente profissional e atenciosa."</p>
                    <h4 class="client-name">Ana Silva</h4>
                    <p class="client-location">São Paulo - SP</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catálogo -->
    <section id="catalog" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Catálogo de Produtos</h2>
                <p>Conheça nossos produtos especiais</p>
            </div>

            <div class="catalog-content">
                <!-- Conteúdo do catálogo será adicionado aqui -->
                <p>Em breve disponibilizaremos nosso catálogo completo de produtos.</p>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Agende sua Avaliação</h2>
                <p>Entre em contato conosco</p>
            </div>

            <div class="contact-content">
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Seu nome" required>
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Seu e-mail" required>
                        </div>

                        <div class="form-group">
                            <input type="tel" placeholder="Seu telefone" required>
                        </div>

                        <div class="form-group">
                            <textarea placeholder="Sua mensagem" required></textarea>
                        </div>

                        <button type="submit" class="btn">Enviar Mensagem</button>
                    </form>
                </div>

                <div class="contact-info">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-text">
                            <h4>Endereço</h4>
                            <p>R. Voluntários da Pátria, 547 - Centro, Curitiba - PR</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-text">
                            <h4>Telefone</h4>
                            <p>(11) 9999-9999</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-text">
                            <h4>E-mail</h4>
                            <p>contato@kcbeauty.com.br</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-text">
                            <h4>Horário de Funcionamento</h4>
                            <p>Segunda a Sexta: 9h às 18h<br>Sábado: 9h às 13h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-col">
                    <img src="https://via.placeholder.com/160x50?text=Clínica+da+Carol" alt="KC Beauty"
                        width="160">
                    <p>Especializada em estética avançada e harmonização facial, proporcionando tratamentos
                        personalizados com técnicas modernas e resultados naturais.</p>
                </div>

                <div class="footer-col">
                    <h3>Procedimentos</h3>
                    <ul>
                        <li><a href="#">Harmonização Facial</a></li>
                        <li><a href="#">Preenchimento Labial</a></li>
                        <li><a href="#">Botox</a></li>
                        <li><a href="#">Fios de Sustentação</a></li>
                        <li><a href="#">Ultraformer</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Contato</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> R. Voluntários da Pátria, 547 - Centro, Curitiba - PR</li>
                        <li><i class="fas fa-phone-alt"></i> (11) 9999-9999</li>
                        <li><i class="fas fa-envelope"></i> contato@kcbeauty.com.br</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Horário de Funcionamento</h3>
                    <p>Segunda a Sexta: 09h às 18h<br>
                        Sábado: 09h às 13h<br>
                        Domingo: Fechado</p>

                    <div class="footer-social">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2025 KC Beauty. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Script do Carrossel
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.indicator');
            const prevBtn = document.querySelector('.carousel-control.prev');
            const nextBtn = document.querySelector('.carousel-control.next');
            let currentIndex = 0;
            let interval;

            // Função para mudar de slide
            function goToSlide(index) {
                slides.forEach(slide => slide.classList.remove('active'));
                indicators.forEach(indicator => indicator.classList.remove('active'));

                currentIndex = (index + slides.length) % slides.length;
                slides[currentIndex].classList.add('active');
                indicators[currentIndex].classList.add('active');
            }

            // Função para avançar para o próximo slide
            function nextSlide() {
                goToSlide(currentIndex + 1);
            }

            // Event listeners para os controles
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));

            // Event listeners para os indicadores
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => goToSlide(index));
            });

            // Autoplay
            function startAutoplay() {
                interval = setInterval(nextSlide, 5000);
            }

            function stopAutoplay() {
                clearInterval(interval);
            }

            startAutoplay();

            // Pausar autoplay quando o mouse estiver sobre o carrossel
            const carousel = document.querySelector('.hero-carousel');
            carousel.addEventListener('mouseenter', stopAutoplay);
            carousel.addEventListener('mouseleave', startAutoplay);
        });

        // Menu Mobile
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.querySelector('.mobile-menu-toggle');
            const mainNav = document.querySelector('.main-nav');

            mobileToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                mainNav.classList.toggle('active');
            });

            // Submenu Mobile
            const menuParents = document.querySelectorAll('.menu-item-has-children');

            menuParents.forEach(item => {
                const link = item.querySelector('a');

                link.addEventListener('click', function(e) {
                    if (window.innerWidth <= 992) {
                        e.preventDefault();
                        item.classList.toggle('active');
                    }
                });
            });

            // Header Scroll Effect
            const header = document.querySelector('.header');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Fechar menu ao clicar em um link
            const navLinks = document.querySelectorAll('.main-nav a');

            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 992) {
                        mobileToggle.classList.remove('active');
                        mainNav.classList.remove('active');

                        // Fechar submenus
                        menuParents.forEach(item => {
                            item.classList.remove('active');
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
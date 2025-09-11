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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
       
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

          
          @include('nav')
         

            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>


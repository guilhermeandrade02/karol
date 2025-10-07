@include('header')

<!-- SEO e Performance -->
<meta name="description" content="Clínica Dra. Karol Cristina - Estética facial e corporal em Curitiba. Agende sua avaliação.">
<link rel="canonical" href="{{ url()->current() }}">
<link rel="preload" as="image" href="{{ asset('images/banner/banner1.png') }}">

<!-- Banner principal -->
<div class="beauty-carousel"><br><br><br>
  <div class="swiper-wrapper">
    @foreach (['banner1.png', 'banner2.png', 'glute2.png'] as $banner)
      <div class="swiper-slide">
        <img src="{{ asset("images/banner/$banner") }}" 
             alt="Banner {{ $loop->iteration }}" 
             class="slide-img" 
             width="1920" height="800"
             loading="lazy" decoding="async">
        <div class="slide-content" data-aos="fade-right"></div>
      </div>
    @endforeach
  </div>
</div>

<!-- SOBRE A CLÍNICA -->
<section id="sobre-clinica" class="watermark-bg" data-aos="fade-up">
  <div class="container">
    <div class="section-header text-left">
      <h2>Sobre a Clínica</h2>
      <p>Conheça nossa história</p>
    </div>
  </div>
</section>

<!-- QUEM É KAROL -->
<section id="quem-e-karol" class="watermark-bg" data-aos="fade-up">
  <div class="container">
    <div class="grid-container" data-aos="fade-up" data-aos-delay="100">
      <div class="grid-item">
        <div class="bio-container">
          <div class="bio-header">
            <h2>QUEM É</h2>
            <h1>Dra. Karol</h1>
          </div>
          <div class="bio-content">
            <p>Prazer, sou <strong>Karol Cristina Ribas de Andrade Ávila</strong>, Biomédica Esteta (CRBM-2268), formada pela <em>Faculdades Pequeno Príncipe</em>, com <strong>7 anos de experiência</strong> em estética facial e corporal.</p>
            <p>Busco constantemente me especializar nos melhores cursos e congressos pelo Brasil e, em breve, pelo mundo. Aqui, renovamos autoestimas e transformamos vidas.</p>
            <p>Acredito que a beleza está nos detalhes e que pequenos ajustes podem fazer uma grande diferença.</p>
          </div>
        </div>
      </div>
      <div class="grid-item">
        <img class="imagem-arredondada-topo" 
             src="{{ asset('images/karol.jpg') }}" 
             alt="Dra. Karol" 
             width="600" height="600"
             loading="lazy" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- PROCEDIMENTOS -->
<section id="procedimentos" class="section-padding" data-aos="fade-up" data-aos-delay="100">
  <div class="container">
    <div class="section-header">
      <h2>Nossos Procedimentos</h2>
      <p>Conheça nossos tratamentos especializados</p>
    </div>

    <div class="services-grid">
      @foreach ([
        ['img' => 'estimulo-colágeno.jpg', 'titulo' => 'ULTRAFORMER', 'texto' => 'Ultraformer e bioestimuladores de colágeno para flacidez e firmeza da pele.'],
        ['img' => 'harmonização-glutea.jpg', 'titulo' => 'HARMONIZAÇÃO GLÚTEA', 'texto' => 'Protocolos avançados para celulite, flacidez e aumento do volume glúteo.'],
        ['img' => 'preenchimentos.jpg', 'titulo' => 'LÁBIOS', 'texto' => 'Técnica exclusiva para contorno labial natural e harmônico.'],
        ['img' => 'toxina-botulinica.jpg', 'titulo' => 'TOXINA BOTULÍNICA', 'texto' => 'Melhora de rugas, linhas de expressão e hiperidrose.'],
        ['img' => 'preenchimento-facial.jpg', 'titulo' => 'PREENCHIMENTOS', 'texto' => 'Simetria facial e volumização com ácido hialurônico.']
      ] as $proc)
        <div class="service-card">
          <div class="service-inner">
            <div class="service-front service-image">
              <img src="{{ asset("images/tratamentos/{$proc['img']}") }}" 
                   alt="{{ $proc['titulo'] }}" 
                   width="400" height="400"
                   loading="lazy" decoding="async">
              <div class="service-titles">
                <div class="service-title">{{ $proc['titulo'] }}</div>
              </div>
            </div>
            <div class="service-back">
              <p>{{ $proc['texto'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- RESULTADOS -->
<section id="resultados" class="section-padding" data-aos="fade-up" data-aos-delay="200">
  <div class="container text-center">
    <div class="section-header mb-4">
      <h2>Resultados Reais</h2>
      <p>Veja a transformação de nossas clientes</p>
    </div>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @for ($i = 1; $i <= 12; $i++)
          <div class="swiper-slide result-item">
            <img src="{{ asset("images/procedimentos/proce{$i}.jpg") }}" 
                 alt="Resultado {{ $i }}" 
                 class="w-100"
                 width="400" height="400"
                 loading="lazy" decoding="async">
          </div>
        @endfor
      </div>
      <div class="swiper-button-next" style="color:black"></div>
      <div class="swiper-button-prev" style="color:black"></div>
    </div>
  </div>
</section>

<!-- CATÁLOGO -->
<section id="catalogo" class="section-padding" data-aos="fade-up">
  <div class="container">
    <div class="section-header">
      <h2>Catálogo de Produtos</h2>
      <p>Conheça nossos produtos especiais</p>
    </div>

    <div class="catalog-content">
      @foreach ([
        ['img' => 'todos.jpg', 'titulo' => 'Linha completa KC Beauty', 'preco' => 'Conferir'],
        ['img' => 'HidratanteLabia.jpg', 'titulo' => 'Hidratante Labial', 'preco' => 'R$ 69,90'],
        ['img' => 'Protetorsolar.jpg', 'titulo' => 'Protetor Solar Fator 60', 'preco' => 'R$ 79,90']
      ] as $p)
        <div class="product-card">
          <img src="{{ asset("images/produtos/{$p['img']}") }}" 
               alt="{{ $p['titulo'] }}" 
               width="300" height="300"
               loading="lazy" decoding="async">
          <h3 class="product-title">{{ $p['titulo'] }}</h3>
          <span class="product-price">{{ $p['preco'] }}</span>
          <a href="https://wa.me/5541999632542?text=Olá, gostaria de comprar um produto." 
             target="_blank" 
             rel="noopener" 
             class="whatsapp-float">
             <button class="btn btn-primary">Comprar</button>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- CONTATO -->
<section id="contato" class="section-padding" data-aos="fade-up">
  <div class="container">
    <div class="section-header">
      <h2>Agende sua Avaliação</h2>
      <p>Entre em contato conosco</p>
    </div>

    <div class="contact-content d-flex flex-wrap gap-4">
      <!-- Formulário -->
      <div class="contact-info flex-1">
        <div class="info-item"><i class="fas fa-phone-alt"></i> (41) 99963-2542</div>
        <div class="info-item"><i class="fas fa-envelope"></i> clinicadrakarolcristina1@outlook.com</div>
        <div class="info-item"><i class="fas fa-clock"></i> Seg-Sex: 10h às 18h | Sáb: 9h às 13h</div>

        @include('components.whatsapp-form')
      </div>

      <!-- Mapa e Instagram com Lazy JS -->
      
      <div class="contact-extra" style="flex:1;min-width:300px;">
        <div id="mapa-placeholder" 
             style="width:100%;height:250px;background:#eee;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#666;">
             Carregando mapa...
        </div>
        <div id="insta-placeholder" 
             style="width:100%;height:400px;margin-top:20px;background:#eee;border-radius:10px;display:flex;align-items:center;justify-content:center;color:#666;">
             Carregando Instagram...
        </div>
      </div>
    </div>
  </div>
</section>

<script defer>
document.addEventListener("DOMContentLoaded", () => {
  AOS.init({ once: true, duration: 800 });

  // Lazy load do mapa e Instagram
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        document.getElementById("mapa-placeholder").innerHTML = `
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.191756133258!2d-49.2732977!3d-25.4289546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce44e0c5b2b8f%3A0x2e4b8b42e38b1c!2sR.%20Volunt%C3%A1rios%20da%20P%C3%A1tria%2C%20547%20-%20Centro%2C%20Curitiba%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1692213690913!5m2!1spt-BR!2sbr"
            width="100%" height="250" style="border:0;border-radius:10px;" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`;
        document.getElementById("insta-placeholder").innerHTML = `
          <iframe src="https://www.instagram.com/drakarolcristina/embed"
            width="100%" height="400" frameborder="0" scrolling="no" 
            allowtransparency="true" loading="lazy"></iframe>`;
        observer.disconnect();
      }
    });
  });
  observer.observe(document.querySelector('#contato'));
});
</script>

<script src="https://unpkg.com/swiper@9/swiper-bundle.min.js" defer></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>

@include('footer')

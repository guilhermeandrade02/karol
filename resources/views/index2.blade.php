@include('header')
<style>
    /* ===== MARCA D'ÁGUA PARA DESKTOP (em toda a seção) ===== */
    .watermark-bg {
        position: relative;
        overflow: hidden;
    }
    
    .watermark-bg::before {
        content: "";
        background-image: url('http://127.0.0.1:8000/images/karol.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 80%;
        opacity: 0.10;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
    }

    /* Garante que o conteúdo fique acima */
    .about-content {
        position: relative;
        z-index: 1;
    }

    /* ===== MARCA D'ÁGUA APENAS PARA MOBILE (no intro-text) ===== */
    @media (max-width: 768px) {
        /* Remove a marca d'água da seção inteira no mobile */
        .watermark-bg::before {
            display: none;
        }

        /* Adiciona marca d'água apenas no intro-text */
        .mobile-watermark {
            position: relative;
            overflow: hidden;
        }

        .mobile-watermark::before {
            content: "";
            background-image: url('http://127.0.0.1:8000/images/karol.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            opacity: 0.10;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        /* Garante que o texto fique acima */
        .mobile-watermark > * {
            position: relative;
            z-index: 1;
        }
    }
</style>
   


    <!-- Sobre -->
  <section id="about" class="section-padding watermark-bg" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-left">
                <h2>Sobre a Clínica</h2>
                <p>Conheça nossa história</p>
            </div>

            <div class="about-content">
                <div class="about-text text-left">
                   <div class="intro-text mb-5 mobile-watermark">
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
    <section id="services" class="section-padding" data-aos="fade-up" data-aos-delay="100">
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

    <section id="results" class="section-padding" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h2>Resultados Reais</h2>
                <p>Veja a transformação de nossas clientes</p>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce1.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce2.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce3.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce4.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce5.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce6.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce7.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce8.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce9.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce10.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce11.jpg') }}"
                            class="w-100" alt=""></div>
                    <div class="swiper-slide result-item"><img src="{{ asset('images/procedimentos/proce12.jpg') }}"
                            class="w-100" alt=""></div>
                </div>

                <!-- Botões -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>



    <!-- Depoimentos -->
    <section id="testimonials" class="section-padding" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="section-header">
                <h2>Depoimentos</h2>
                <p>O que nossas clientes dizem</p>
            </div>

            <div class="testimonials-slider">
                <div class="testimonial">
                  
                    <p class="testimonial-text">"Fiz harmonização facial na KC Beauty e amei o resultado! Ficou
                        super natural, exatamente como eu queria. A Carol é extremamente profissional e atenciosa."</p>
                    <h4 class="client-name">Ana Silva</h4>
                    <p class="client-location">São Paulo - SP</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catálogo -->
    <section id="catalog" class="section-padding"  data-aos="fade-up" data-aos-delay="200">
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
    <section id="contact" class="section-padding" data-aos="fade-up">
        <div class="container">
            <div class="section-header">
                <h2>Agende sua Avaliação</h2>
                <p>Entre em contato conosco</p>
            </div>

            <div class="contact-content">
                {{-- <div class="contact-form">
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
                </div> --}}

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
                            <p>(41) 99963-2542</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-text">
                            <h4>E-mail</h4>
                            <p>clinicadrakarolcristina1@outlook.com </p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-text">
                            <h4>Horário de Funcionamento</h4>
                            <p>Segunda a Sexta: 10h às 18h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
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
    </script>

  @include('footer')
@include('header')

<style>
    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        /* Divide em 2 colunas iguais */
        gap: 20px;
        /* Espaço entre as colunas */
        align-items: center;
        /* Alinha os itens verticalmente ao centro */
    }

    .grid-item img {
        max-width: 100%;
        height: auto;
        display: block;
    }

    .grid-item p {
        margin: 0;
        padding: 10px;
    }

    .imagem-arredondada-topo {
        border-radius: 320px 320px 0 0;
        /* top-left, top-right, bottom-right, bottom-left */
        width: 65%;
        max-width: 400px;
        /* ajuste conforme necessário */
        display: block;
    }

    .bio-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px;
        font-family: 'Helvetica Neue', Arial, sans-serif;
        color: #333;
        line-height: 1.6;
    }

    .bio-header {
        margin-bottom: 30px;
        text-align: center;
    }

    .bio-header h2 {
        font-size: 1.2rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #666;
        margin-bottom: 10px;
    }

    .bio-header h1 {
        font-size: 2.5rem;
        color: #222;
        margin: 0;
        font-weight: 300;
    }

    .bio-content {
        font-size: 1.1rem;
    }

    .bio-content p {
        margin-bottom: 20px;
    }

    .intro {
        font-style: italic;
        color: #555;
    }

    .highlight {
        background-color: #f8f8f8;
        border-left: 4px solid #d4af37;
        padding: 15px;
        font-size: 1.2rem;
    }

    /* Ajustes para mobile */
    @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: 1fr;
            /* Uma coluna em mobile */
        }

        .imagem-arredondada-topo {
            width: 80%;
            margin: 0 auto 30px auto;
            /* Centraliza a imagem */
            border-radius: 20px 20px 0 0;
            /* Reduz o arredondamento */
        }

        .bio-container {
            padding: 20px;
        }

        .bio-header h1 {
            font-size: 2rem;
        }

        .section-header {
            text-align: center !important;
        }
    }

    strong {
        color: #222;
        font-weight: 600;
    }
</style>
<!-- Sobre -->
<section id="about" class="section-padding watermark-bg" data-aos="fade-up">
    <div class="container">
        <div class="section-header text-left">
            <h2>Sobre a Clínica</h2>
            <p>Conheça nossa história</p>
        </div>

        <div class="grid-container" data-aos="fade-up" data-aos-delay="100">
            <div class="grid-item">
                <div class="bio-container">
                    <div class="bio-header">
                        <h2>QUEM É</h2>
                        <h1>Dra. Karol</h1>
                    </div>
                    <div class="bio-content">
                        <p>Deixe-me apresentar. Prazer, me chamo <strong>Karol Cristina Ribas de Andrade
                                Ávila</strong>,
                            Biomédica esteta CRBM-2268 formada pela <em>Faculdades Pequeno Príncipe</em>,
                            pós-graduada em biomedicina estética e com <strong>7 anos de experiência</strong> em
                            estética facial e corporal.</p>
                        <p>
                            Busco constantemente me especializar nos melhores cursos e congressos pelo
                            Brasil e, em breve, pelo mundo. Realçar a beleza dos meus pacientes vai
                            muito além de um procedimento estético - aqui renovamos autoestimas e
                            transformamos vidas.
                        </p>
                        <p>Acredito que a beleza reside nos detalhes e que pequenos ajustes podem fazer uma grande
                            diferença na qualidade de vida do paciente.
                            Comprometo-me completamente em oferecer um atendimento de excelência, com muita dedicação e
                            cuidado!</p>
                    </div>
                </div>
            </div>
            <div class="grid-item ">
                <img class="imagem-arredondada-topo" src="{{ asset('images/karol.jpg') }}" alt="Descrição da imagem">
            </div>
        </div>


        <br>


        <div class="grid-container" data-aos="fade-up" data-aos-delay="100">
            <div class="grid-item ">
                <img class="imagem-arredondada-topo" src="{{ asset('images/clicica.jpg') }}" alt="Descrição da imagem">
            </div>
            <div class="grid-item">
                <div class="bio-container">
                    <div class="bio-header">

                        <h1>Conheça nossa clínica</h1>
                    </div>
                    <div class="bio-content">
                        <p> A clínica <strong>KC Beauty</strong> surgiu do sonho de proporcionar os melhores
                            tratamentos, técnicas e experiências de embelezamento na área de estética,
                            com um diferencial exclusivo: <em>amor, carinho e autocuidado</em>.</p>
                        <p>
                            Prezamos por um ambiente acolhedor e aconchegante, onde cada paciente é
                            tratado de maneira única e personalizada.
                        </p>
                        <p class="signature">
                            Espero sua visita em breve! Aqui você é nossa estrela e iremos cuidar de você!<br>
                            <strong>Com carinho, Karol.</strong>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br><br><br><br>
        <div class="about-content" data-aos="fade-up" data-aos-delay="100">
            <div class="about-text text-left">


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


                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="section-header text-left">
                        <h2>Porque escolher a clínica KC beauty </h2>
                    </div>

                    <div class="benefits-container">
                        <div class="benefit-item" data-aos="fade-up" data-aos-delay="150">
                            <div class="benefit-icon">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <h3 class="benefit-title">Tratamentos Individualizados</h3>
                            <p class="benefit-description">Oferecemos tratamentos personalizados com o que há de mais
                                moderno em estética avançada, desenvolvidos especialmente para suas necessidades.</p>
                        </div>

                        <div class="benefit-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="benefit-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h3 class="benefit-title">Tecnologia e Produtos de Ponta</h3>
                            <p class="benefit-description">Utilizamos as melhores tecnologias e linhas de produtos
                                estéticos do mercado, garantindo máxima segurança e eficácia em todos os procedimentos.
                            </p>
                        </div>

                        <div class="benefit-item" data-aos="fade-up" data-aos-delay="250">
                            <div class="benefit-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3 class="benefit-title">Resultados Naturais</h3>
                            <p class="benefit-description">Buscamos resultados que valorizam os traços únicos de cada
                                paciente, mantendo a naturalidade e harmonia facial e corporal.</p>
                        </div>

                        <div class="benefit-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="benefit-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="benefit-title">Equipe Especializada</h3>
                            <p class="benefit-description">Contamos com profissionais experientes, com mais de 6 anos de
                                experiência clínica, especialistas em beleza facial e corporal.</p>
                        </div>

                        <div class="benefit-item" data-aos="fade-up" data-aos-delay="350">
                            <div class="benefit-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h3 class="benefit-title">Equipamentos Modernos</h3>
                            <p class="benefit-description">Utilizamos equipamentos de última geração com tecnologia
                                avançada para oferecer os melhores resultados em todos os tratamentos.</p>
                        </div>

                        <div class="benefit-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="benefit-icon">
                                <i class="fas fa-couch"></i>
                            </div>
                            <h3 class="benefit-title">Ambiente Diferenciado</h3>
                            <p class="benefit-description">Temos uma clínica moderna com ambiente acolhedor e
                                confortável, além de um café exclusivo para proporcionar uma experiência única.</p>
                        </div>
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
                        <img src="{{ asset('images/tratamentos/estimulo-colágeno.jpg') }}" alt="Tratamento de Rugas">

                        <div class="service-titles">
                            <div class="service-title">ULTRAFORMER</div>
                            <div class="service-subtitle">&nbsp</div>
                        </div>
                    </div>
                    <div class="service-back">
                        <p>Utilizamos o Ultraformer e bioestimuladores de colágeno para produção de colágeno e melhora
                            da flacidez da pele.
                            Região da face, papada ( flacidez e gordura) , pescoço e colo.</p>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-inner">
                    <div class="service-front service-image">
                        <img src="{{ asset('images/tratamentos/harmonização-glutea.jpg') }}"
                            alt="Harmonização Facial">

                        <div class="service-titles">
                            <div class="service-title">HARMONIZAÇÃO</div>
                            <div class="service-subtitle">GLÚTEA</div>
                        </div>
                    </div>
                    <div class="service-back">
                        <p> Harmonização glútea e protocolos para gordura localizada e emagrecimento corporal.
                            Protocolos avançados para celulite, flacidez, e aumento do volume do glúteo.</p>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-inner">
                    <div class="service-front service-image">
                        <img src="{{ asset('images/tratamentos/preenchimento-facial.jpg') }}"
                            alt="Preenchimento Labial">
                        <div class="service-titles">
                            <div class="service-title">LÁBIOS</div>
                            <div class="service-subtitle">&nbsp</div>
                        </div>

                    </div>
                    <div class="service-back">
                        <p>A clínica KC beauty, utiliza uma técnica exclusiva para melhorar o contorno labial e
                            volumizar de forma natural e respeitando a estrutura labial de cada paciente. </p>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-inner">
                    <div class="service-front service-image">
                        <img src="{{ asset('images/tratamentos/toxina-botulinica.jpg') }}" alt="Botox">

                        <div class="service-titles">
                            <div class="service-title">TOXINA</div>
                            <div class="service-subtitle">BOTULÍNICA</div>
                        </div>
                    </div>
                    <div class="service-back">
                        <p>Utilizamos as melhores marcas de toxina botulínica do mercado, promovendo melhora das rugas e
                            linhas de expressão da face.
                            Realizamos toxina botulínica para hiperidrose ( suor excessivo das axilas).</p>
                    </div>
                </div>
            </div>
            <div class="service-card">
                <div class="service-inner">
                    <div class="service-front service-image">
                        <img src="{{ asset('images/tratamentos/preenchimentos.jpg') }}" alt="Tratamento de Rugas">

                        <div class="service-titles">
                            <div class="service-title">PREENCHIMENTOS</div>
                            <div class="service-subtitle">&nbsp</div>
                        </div>
                    </div>
                    <div class="service-back">
                        <p>
                            Utilizamos ácido hialurônico das melhores marcas do mercado, para promover simetria facial e
                            volumização em regiões específicas da face que estruturam e promovem sustentação.
                        </p>
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

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide testimonial-result-item">
                    <div class="testimonial">
                        <p class="testimonial-text">"Foi excelente. Dra Karol é altamente profissional e utiliza
                            produtos de primeira qualidade, garantindo ótimos resultados. Estou muito contente, pois
                            rejuvenesci uns dez anos depois que realizei os procedimentos com a Dra Karol."
                        </p><br>
                        <h4 class="client-name">Ismael Salgueiro Meira</h4>
                        <p class="client-location"><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star"
                                style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i></p>
                    </div>
                </div>
                <div class="swiper-slide testimonial-result-item">
                    <div class="testimonial">
                        <p class="testimonial-text">"Procurei várias profissionais antes de decidir com quem faria meu
                            procedimento. Levei em consideração as avaliações da Dra aqui, olhei o trabalho dela no
                            instagram e me apaixonei. Mas a forma como ela me recebeu tirando minhas dúvidas e me
                            deixando tranquila ainda por whatsapp, me fez decidir que seria ela. Marcamos de um dia para
                            o outro e fui fazer o preenchimento labial que foi muito tranquilo, não senti dor e depois
                            ela sempre perguntava como eu estava, não me deixou sem suporte e deu tudo certo! Recomendo
                            de olhos fechados e estou ansiosa para voltar fazer o meu próximo procedimento!!"
                        </p><br>
                        <h4 class="client-name">Thayane Camargo</h4>
                        <p class="client-location"><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star"
                                style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i></p>

                    </div>
                </div>
                <div class="swiper-slide testimonial-result-item">
                    <div class="testimonial">
                        <p class="testimonial-text">"Super recomendo. A melhor clínica de Curitiba. Produtos
                            excelentes. Atendimento impecável. Amplo conhecimento da Dra Karol. Cuidadosa e carinhosa
                            com cada paciente. Se quer um resultado perfeito essa é a melhor escolha de profissional."
                        </p><br>
                        <h4 class="client-name">Gisele Barioni</h4>
                        <p class="client-location"><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star"
                                style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i></p>

                    </div>
                </div>
                <div class="swiper-slide testimonial-result-item">
                    <div class="testimonial">
                        <p class="testimonial-text">"A Dra Karol é maravilhosa ! Nos orienta sobre as melhores opções
                            de tratamento , possui as tecnologias mais avançadas e além disso faz o monitoramento e
                            acompanhamento do resultado ! Além disso é uma querida ! Nota 1000 🥰"
                        </p><br>
                        <h4 class="client-name">Silvia Quadros de Oliveira</h4>
                        <p class="client-location"><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star"
                                style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i></p>

                    </div>
                </div>
                <div class="swiper-slide testimonial-result-item">
                    <div class="testimonial">
                        <p class="testimonial-text">"Simplesmente!!!! maravilhosa minha experiência a Dra Karol supera
                            qualquer expectativa,explica cada procedimento e tem uma calma e amor pelo seu trabalho
                            ❤️❤️❤️ que não encontramos em qualquer lugar ☺️"
                        </p><br>
                        <h4 class="client-name">Gisabele Scholze</h4>
                        <p class="client-location"><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star"
                                style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i></p>

                    </div>
                </div>
                <div class="swiper-slide testimonial-result-item">
                    <div class="testimonial">
                        <p class="testimonial-text">"Encontrei a clínica por um acaso pesquisando no Instagram e
                            marquei uma avaliação, a Karol foi perfeita me mostrando resultados e explicando como seria
                            o procedimento. Ela tem todo um cuidado em acompanhar a evolução que estou tendo e por tudo
                            isso estou indo para um segundo procedimento com ela. Sem contar toda a atenção e
                            disponibilidade que a Raissa tem em atender a gente."
                        </p><br>
                        <h4 class="client-name">
                            Clau Dinha</h4>
                        <p class="client-location mt-2"><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star"
                                style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i></p>

                    </div>
                </div>
                <div class="swiper-slide testimonial-result-item">
                    <div class="testimonial">
                        <p class="testimonial-text">"Dra. Karol é uma profissional excepcional! Com um olhar cuidadoso
                            e os melhores procedimentos do mercado, ela oferece um atendimento individualizado,
                            orientando com precisão o tratamento mais adequado para cada pessoa. Estou amando os
                            resultados harmoniosos dos meus procedimentos e recomendo muito a consulta com ela. Além da
                            experiência e competência técnica, seu atendimento é atencioso e personalizado, garantindo
                            uma experiência segura e satisfatória!"
                        </p><br>
                        <h4 class="client-name">
                            Raquel Vásquez</h4>
                        <p class="client-location"><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i><i class="fa-solid fa-star"
                                style="color:yellow"></i><i class="fa-solid fa-star" style="color:yellow"></i><i
                                class="fa-solid fa-star" style="color:yellow"></i></p>

                    </div>
                </div>
            </div>

            <!-- Botões -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</section>


<!-- Catálogo -->

<section id="catalog" class="section-padding" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="section-header">
            <h2>Catálogo de Produtos</h2>
            <p>Conheça nossos produtos especiais</p>
        </div>

        <div class="catalog-content">
            <div class="product-card">
                <img src="{{ asset('images/produtos/todos.jpg') }}" alt="Produto 1">
                <h3 class="product-title">Linha completa KC beauty</h3>
                <p>Descrição rápida do produto.</p>
                <span class="product-price">Conferir</span>
                <div>
                    <a href="https://wa.me/5541999632542?text=Olá, gostaria de comprar um produto." target="_blank"
                        class="whatsapp-float" aria-label="QUERO COMPRAR UM PRODUTO"> <button
                            class="btn btn-primary">Comprar</button></A>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/produtos/HidratanteLabia.jpg') }}" alt="Produto 2">
                <h3 class="product-title">Hidratante Labial</h3>
                <p>Outro produto incrível.</p>
                <span class="product-price">R$ 69,90</span>
                <div>
                    <a href="https://wa.me/5541999632542?text=Olá, gostaria de comprar um produto." target="_blank"
                        class="whatsapp-float" aria-label="QUERO COMPRAR UM PRODUTO"> <button
                            class="btn btn-primary">Comprar</button></A>
                </div>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/produtos/Protetorsolar.jpg') }}" alt="Produto 3">
                <h3 class="product-title">Protetor solar fator 60</h3>
                <p>Mais um produto especial.</p>
                <span class="product-price">R$ 79,90</span>
                <div>
                    <a href="https://wa.me/5541999632542?text=Olá, gostaria de comprar um produto." target="_blank"
                        class="whatsapp-float" aria-label="QUERO COMPRAR UM PRODUTO"> <button
                            class="btn btn-primary">Comprar</button></A>
                </div>
            </div>
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
                        <p>Sábado: 09h às 13h</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

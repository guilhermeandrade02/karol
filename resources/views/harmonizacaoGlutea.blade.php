@include('header-procedimentos')


<br><br>
<br><br>

<section class="section-padding" data-aos="fade-up">
    <div class="container">
        <div class="section-header text-left">
            <h2>
                HARMONIZAÇÃO GLÚTEA
            </h2>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <div class="procedure-image">
                    <img src="{{ asset('images/paginas/harmonizacaoGlutea.jpg') }}"
                        alt="Fios de Sustentação" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <p class="lead">
                    A Harmonização Glútea é um protocolo exclusivo que vai muito além de apenas aumentar ou modelar o
                    bumbum.
                </p>
                <p>
                    O nosso protocolo atua na qualidade da pele, melhora de celulite, aumento de volume e firmeza
                    muscular, proporcionando resultados naturais, duradouros e personalizados para o seu corpo.
                </p>
                <ul class="benefits-list mt-4">
                    <li><b>Melhora a textura e a firmeza da pele Diminui celulite</b></li>
                    <li><b>Estimula o colágeno e combate a flacidez</b></li>
                    <li><b>Realça o contorno dos glúteos </b></li>                  
                    <li><b>Deixa o seu bumbum mais redondinho, bonito e saudável</b></li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Técnicas Utilizadas</h3>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fios de PDO</h5>
                        <p class="card-text">Fios reabsorvíveis que estimulam o colágeno e proporcionam sustentação
                            imediata.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fios de Sustentação</h5>
                        <p class="card-text">Com espículas que garantem maior fixação e efeito lifting mais pronunciado.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fios de Screw</h5>
                        <p class="card-text">Com formato espiralado que oferece maior volume e preenchimento facial</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3 class="mb-4">Agende sua Avaliação</h3>
                <p class="mb-4">Entre em contato conosco para marcar uma consulta e descobrir como a harmonização
                    facial pode realçar sua beleza natural.</p>
                <a href="#" class="btn btn-primary">Entrar em Contato</a>
            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true
        });
    });
</script>
@include('footer')


  
@include('header-procedimentos')


<br><br>
<br><br>

    <section class="section-padding" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-left">
                <h2>Toxina Botulínica (Botox)</h2>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="procedure-image">
                        <img src="{{ asset('images/paginas/botox.jpg') }}" alt="Harmonização Facial" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead">
                   A toxina botulínica, conhecida como Botox, é um tratamento minimamente invasivo que suaviza rugas e linhas de expressão através do relaxamento muscular, proporcionando um aspecto rejuvenescido e natural.
                    </p>
                    <p>
                       Utilizada há décadas com segurança em procedimentos estéticos, a toxina botulínica é aplicada de forma precisa por nossos especialistas para tratar rugas dinâmicas, prevenir o envelhecimento precoce e realçar sua beleza natural.
                    </p>
                    <ul class="benefits-list mt-4">
                        <li><b>Suaviza rugas e linhas de expressão</b></li>
                        <li><b>Previne a formação de novas rugas</b></li>
                        <li><b>Procedimento rápido e pouco invasivo</b></li>
                        <li><b>Resultados naturais e harmoniosos</b></li>
                        <li><b>Efeito prolongado (4 a 6 meses)</b></li>
                        <li><b>Também utilizado para tratar enxaqueca e hiperidrose</b></li>
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
                            <h5 class="card-title">Preenchimento Facial</h5>
                            <p class="card-text">Utilizamos ácido hialurônico para restaurar volumes, contornar e definir estruturas faciais.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Toxina Botulínica</h5>
                            <p class="card-text">Aplicação estratégica para suavizar rugas e linhas de expressão, proporcionando aspecto rejuvenescido.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Bioestimuladores de Colágeno</h5>
                            <p class="card-text">Estimulam a produção natural de colágeno, garantindo resultados duradouros e naturais.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h3 class="mb-4">Agende sua Avaliação</h3>
                    <p class="mb-4">Entre em contato conosco para marcar uma consulta e descobrir como a harmonização facial pode realçar sua beleza natural.</p>
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

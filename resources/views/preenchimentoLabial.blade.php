
  
@include('header-procedimentos')


<br><br>
<br><br>

    <section class="section-padding" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-left">
                <h2>Preenchimento Labial</h2>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="procedure-image">
                           <img src="{{ asset('images/paginas/preenchimentoLabial.jpg') }}" alt="Labial" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead">
                        O preenchimento labial é um procedimento estético que visa aumentar o volume, definir o formato e melhorar a simetria dos lábios, utilizando ácido hialurônico de alta qualidade para resultados naturais e harmoniosos.
                    </p>
                    <p>
                   Nossos especialistas realizam uma avaliação personalizada para entender suas expectativas e criar um plano de tratamento que valorize sua beleza natural, garantindo lábios mais volumosos, definidos e com contorno perfeito.
                    </p>
                    <ul class="benefits-list mt-4">
                        <li><b>Aumento do volume labial de forma natural</b></li>
                        <li><b>Definição do contorno e formato dos lábios</b></li>
                        <li><b>Correção de assimetrias</b></li>
                        <li><b>Hidratação e preenchimento de rugas periorais</b></li>
                        <li><b>Resultados imediatos e recuperação rápida</b></li>
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

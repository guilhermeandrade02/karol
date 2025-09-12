@include('header-procedimentos')


<br><br>
<br><br>

<section class="section-padding" data-aos="fade-up">
    <div class="container">
        <div class="section-header text-left">
            <h2>Ultraformer</h2>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                   <div class="procedure-image">
                        <img src="{{ asset('images/paginas/ultraformer.jpg') }}" alt="Ultraformer" class="img-fluid">
                    </div>
            </div>
            <div class="col-lg-6">
                <p class="lead">
                    O Ultraformer é um tratamento não invasivo que utiliza ultrassom microfocado para estimular a
                    produção de colágeno, promovendo o lifting facial e corporal sem necessidade de cirurgia ou tempo de
                    recuperação.
                </p>
                <p>
                    Esta tecnologia avançada atua nas camadas profundas da pele, aquecendo o tecido de forma precisa
                    para contrair as fibras existentes e estimular a neocolagênese, resultando em uma pele mais firme,
                    tonificada e rejuvenescida.
                </p>
                <ul class="benefits-list mt-4">
                    <li><b>Lifting facial não invasivo</b></li>
                    <li><b>Estímulo à produção de colágeno</b></li>
                    <li><b>Redução de flacidez facial e corporal</b></li>
                    <li><b>Tratamento personalizado para diferentes áreas</b></li>
                    <li><b>Sem tempo de recuperação</b></li>
                    <li><b>Resultados progressivos e naturais</b></li>
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
                        <p class="card-text">Utilizamos ácido hialurônico para restaurar volumes, contornar e definir
                            estruturas faciais.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Toxina Botulínica</h5>
                        <p class="card-text">Aplicação estratégica para suavizar rugas e linhas de expressão,
                            proporcionando aspecto rejuvenescido.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Bioestimuladores de Colágeno</h5>
                        <p class="card-text">Estimulam a produção natural de colágeno, garantindo resultados duradouros
                            e naturais.</p>
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


  
@include('header-procedimentos')


<br><br>
<br><br>

    <section class="section-padding" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-left">
                <h2>Harmonização Facial</h2>
            </div>
            
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <div class="procedure-image">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxOCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iIzhhNmZhMyI+SGFybW9uaXphw6fDo28gRmFjaWFsPC90ZXh0Pjwvc3ZnPg==" alt="Harmonização Facial" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead">
                        A harmonização facial é um conjunto de procedimentos estéticos que visa equilibrar as proporções do rosto, 
                        realçando a beleza natural e promovendo um aspecto mais jovem e rejuvenescido.
                    </p>
                    <p>
                        Através da aplicação de preenchedores, toxina botulínica e outras técnicas modernas, nossos especialistas 
                        trabalham para criar simetria e proporção, respeitando as características únicas de cada paciente.
                    </p>
                    <ul class="benefits-list mt-4">
                        <li>Suaviza rugas e linhas de expressão</li>
                        <li>Define o formato do rosto</li>
                        <li>Proporciona equilíbrio entre as features faciais</li>
                        <li>Resultados naturais e harmoniosos</li>
                        <li>Procedimento minimamente invasivo</li>
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

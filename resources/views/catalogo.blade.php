  @include('header-procedimentos')


    <style>
        :root {
            --primary-color: #d39c6e;
            --secondary-color: #f0dcc9;
            --accent-color: #b17a44;
            --text-color: #333;
            --light-bg: #fcf9f5;
        }
        
     
        
        .section-padding {
            padding: 60px 0;
        }
        
        .product-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            background-color: white;
            height: 100%;
            overflow: hidden;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .product-image {
            height: 250px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light-bg);
        }
        
        .product-image img {
            max-height: 100%;
            width: auto;
            object-fit: cover;
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-title {
            font-family: 'Playfair Display', serif;
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .product-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
            height: 60px;
            overflow: hidden;
        }
        
        .product-price {
            font-weight: 700;
            color: var(--accent-color);
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            width: 100%;
        }
        
        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        .category-filter {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .category-btn {
            background-color: white;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .category-btn:hover, .category-btn.active {
            background-color: var(--primary-color);
            color: white;
        }
        
        .search-box {
            margin-bottom: 30px;
            position: relative;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .search-box input {
            width: 100%;
            padding: 12px 20px;
            border-radius: 30px;
            border: 1px solid #ddd;
            padding-left: 45px;
        }
        
        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        
        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--accent-color);
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .product-rating {
            color: #ffc107;
            margin-bottom: 10px;
        }
 
    </style>



    <br><br><br>

    <section class="section-padding">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Catálogo de Produtos</h2>
                <p>Descubra os melhores produtos para cuidar da sua beleza</p>
            </div>
            
            <div class="row mb-5">
              
                <div class="col-md-12">
                    <div class="category-filter" data-aos="fade-left">
                        <button class="category-btn active">Todos</button>
                        <button class="category-btn">Skincare</button>
                        <button class="category-btn">Maquiagem</button>
                        <button class="category-btn">Cabelos</button>
                        <button class="category-btn">Corpo</button>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Produto 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Novo</span>
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+U2VydW0gQW50aS1BZ2luZzwvdGV4dD48L3N2Zz4=" alt="Sérum Anti-Idade">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Sérum Anti-Idade</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="product-description">Sérum facial com ácido hialurônico para redução de rugas e linhas de expressão.</p>
                            <p class="product-price">R$ 149,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+UHJvdGV0b3IgU29sYXIgRlBTIDUwPC90ZXh0Pjwvc3ZnPg==" alt="Protetor Solar">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Protetor Solar FPS 50</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="product-description">Protetor solar facial com textura leve e toque seco para proteção diária.</p>
                            <p class="product-price">R$ 89,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Oferta</span>
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+SGlkcmF0YW50ZSBGYWNpYWw8L3RleHQ+PC9zdmc+" alt="Hidratante Facial">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Hidratante Facial</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="product-description">Creme hidratante com vitamina C para pele radiante e hidratada.</p>
                            <p class="product-price">R$ 79,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+U2hhbXBvbyBBbnRpLUZyaXRhPC90ZXh0Pjwvc3ZnPg==" alt="Shampoo Antiqueda">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Shampoo Antiqueda</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="product-description">Shampoo fortalecedor com biotina para reduzir a queda capilar.</p>
                            <p class="product-price">R$ 59,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+TcOhc2NhcmEgRGUgU2Vqb3M8L3RleHQ+PC9zdmc+" alt="Máscara de Sobrancelha">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Máscara de Sobrancelha</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="product-description">Máscara para modelar e fixar sobrancelhas com efeito natural.</p>
                            <p class="product-price">R$ 39,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Mais Vendido</span>
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSI gaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+Q3JpbWEgQ29ycG9yYWw8L3RleHQ+PC9zdmc+" alt="Hidratante Corporal">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Hidratante Corporal</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="product-description">Hidratante corporal com manteiga de karité para pele macia e nutrida.</p>
                            <p class="product-price">R$ 69,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+TcOhc2NhcmEgRGUgQ2lsaW9zPC90ZXh0Pjwvc3ZnPg==" alt="Máscara de Cílios">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Máscara de Cílios</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="product-description">Máscara para cílios com efeito alongador e volumizador à prova d'água.</p>
                            <p class="product-price">R$ 49,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Produto 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="product-badge">Lançamento</span>
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZjVmNWY1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSIgZmlsbD0iI2QzOWM2ZSI+RXNmG29saW8gRGUgQ29yY8OtdGVyPC90ZXh0Pjwvc3ZnPg==" alt="Esfoliante Corporal">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">Esfoliante Corporal</h3>
                            <div class="product-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="product-description">Esfoliante com partículas de açúcar e óleo de amêndoas para pele renovada.</p>
                            <p class="product-price">R$ 54,90</p>
                            <button class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
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
            
            // Filtro de categorias
            const categoryButtons = document.querySelectorAll('.category-btn');
            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
  @include('footer')

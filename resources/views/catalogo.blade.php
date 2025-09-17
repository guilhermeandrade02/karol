  @include('header')
  <br><br><br>
  <section class="section-padding">
      <div class="container">
          <div class="section-header" data-aos="fade-up">
              <h2>Catálogo de Produtos</h2>
              <p>Descubra os melhores produtos para cuidar da sua beleza</p>
          </div>
          {{-- <div class="row mb-5">
              <div class="col-md-12">
                  <div class="category-filter" data-aos="fade-left">
                      <button class="category-btn active">Todos</button>
                      <button class="category-btn">Skincare</button>
                      <button class="category-btn">Maquiagem</button>
                      <button class="category-btn">Cabelos</button>
                      <button class="category-btn">Corpo</button>
                  </div>
              </div>
          </div> --}}
          <div class="row">
              <!-- Produto 3 -->
              <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="product-card">
                      <div class="product-image">
                          <span class="product-badge">Oferta</span>
                          <img src="{{ asset('images/produtos/todos.jpg') }}" alt="Hidratante Facial">
                      </div>
                      <div class="product-info">
                          <h3 class="product-title">Linha completa KC beauty</h3>
                          <div class="product-rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                          <p class="product-description"> Nossa linha de produtos skincare exclusiva, foi formulada para
                              tratar todos os tipos de pele, promovendo desde de hidratação, clareamento, proteção
                              contra raios UV e UVA e hidratação labial.
                          </p>
                          <p class="product-price">Conferir</p>
                          <a href="https://wa.me/5541999632542?text=Olá, gostaria de comprar um produto."
                              target="_blank" class="whatsapp-float" aria-label="QUERO COMPRAR UM PRODUTO"> <button
                                  class="btn btn-primary">Comprar</button></A>
                      </div>
                  </div>
              </div>
              <!-- Produto 1 -->
              <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="product-card">
                      <div class="product-image">
                          <span class="product-badge">Novo</span>
                          <img src="{{ asset('images/produtos/HidratanteLabia.jpg') }}" alt="Sérum Anti-Idade">
                      </div>
                      <div class="product-info">
                          <h3 class="product-title">Hidratante Labial</h3>
                          <div class="product-rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                          <p class="product-description">Nosso hidratante com fórmula exclusiva, com ácido hialurônico,
                              promove hidratação, evitando ressecamento dos lábios, e promovendo um brilho incrível para
                              o seu dia a dia.
                          </p>
                          <p class="product-price">R$ 69,90</p>
                          <a href="https://wa.me/5541999632542?text=Olá, gostaria de comprar um produto."
                              target="_blank" class="whatsapp-float" aria-label="QUERO COMPRAR UM PRODUTO"> <button
                                  class="btn btn-primary">Comprar</button></A>
                      </div>
                  </div>
              </div>
              <!-- Produto 2 -->
              <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="product-card">
                      <div class="product-image">
                          <span class="product-badge">Novo</span>
                          <img src="{{ asset('images/produtos/Protetorsolar.jpg') }}" alt="Protetor Solar">
                      </div>
                      <div class="product-info">
                          <h3 class="product-title">Protetor solar fator 60 </h3>
                          <div class="product-rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                          </div>
                          <p class="product-description">Protetor solar com textura leve, formulados para cada tipo de
                              pele : pele mista, oleosa e seca. Disponível em forma líquida, bastão e em pó.</p>
                          <p class="product-price">R$ 79,90</p>
                          <a href="https://wa.me/5541999632542?text=Olá, gostaria de comprar um produto."
                              target="_blank" class="whatsapp-float" aria-label="QUERO COMPRAR UM PRODUTO"> <button
                                  class="btn btn-primary">Comprar</button></A>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  @include('footer')

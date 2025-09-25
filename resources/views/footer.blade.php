  <!-- Footer -->
  <footer class="footer">
      <!-- WhatsApp flutuante -->
      <a href="https://wa.me/5541999632542?text=Gostaria de agendar uma avaliação. Vim pelo site da KC Clinic"
          target="_blank" class="whatsapp-float" aria-label="CLIQUE AQUI E AGENDE SUA AVALIAÇÃO"
          style="display: flex; align-items: center; gap: 10px; background-color: #25D366; color: white; padding: 10px 15px; border-radius: 8px; text-decoration: none; font-weight: bold; width: fit-content; box-shadow: 0 4px 6px rgba(0,0,0,0.1);
          position: fixed; 
          bottom: 20px; 
          right: 20px; 
          z-index: 9999;">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp"
              style="width: 30px; height: 30px;">
          <span>CLIQUE AQUI E AGENDE SUA AVALIAÇÃO</span>
      </a>
      <div class="container">
          <div class="footer-columns">
              <div class="footer-col">
                 <img src="{{ asset('images/logo/logo2.png') }}" alt="KC Beauty" width="300"> 
                 
                  <p>Clínica de estética facial e corporal avançada, proporcionamos os melhores tratamentos e técnicas,
                      com tratamento individualizado que valorize o seus traços e sua beleza.</p>
              </div>
              <div class="footer-col">
                  <h3>Procedimentos</h3>
                  <ul>
                      <li><a href="{{ Route('harmonizacaoFacial') }}">Harmonização Facial</a></li>
                      <li><a href="{{ Route('preenchimentoLabial') }}">Preenchimento Labial</a></li>
                      <li><a href="{{ Route('botox') }}">Botox</a></li>
                      <li><a href="{{ Route('harmonizacaoGlutea') }}">Harmonização Glútea</a></li>
                      <li><a href="{{ Route('ultraformer') }}">Ultraformer</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h3>Contato</h3>
                  <ul class="contact-info">
                      <li><i class="fas fa-map-marker-alt"></i> R. Voluntários da Pátria, 547 - Centro, Curitiba - PR
                      </li>
                      <li><i class="fas fa-phone-alt"></i> (41) 99963-2542</li>
                      <li><i class="fas fa-envelope"></i> clinicadrakarolcristina1@outlook.com</li>
                      <li> <a href="https://www.instagram.com/drakarolcristina"><i
                                  class="fa fa-instagram"></i>@drakarolcristina</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h3>Horário de Funcionamento</h3>
                  <p>Segunda a Sexta: 10h às 18h</p>
                  <p>Sábado: 09h às 13h</p>
                  <div class="footer-social">
                      <a href="https://www.instagram.com/drakarolcristina"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-whatsapp"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <p>&copy; 2025 KC Beauty. Todos os direitos reservados.</p>
          </div>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Animation JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  </body>

  </html>

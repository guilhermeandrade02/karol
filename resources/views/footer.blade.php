  <!-- Footer -->
  <!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: false, // Permite que a animação ocorra múltiplas vezes
        mirror: true, // Faz a animação ocorrer tanto no scroll down quanto no scroll up
        offset: 120, // Define quando a animação deve ser acionada
        anchorPlacement: 'top-center' // Define o ponto de referência para a animação
    });
</script>

  <footer class="footer">
    <!-- WhatsApp flutuante -->
<a href="https://wa.me/5541999632542?text=Olá%2C%20gostaria%20de agendar uma avaliação." 
   target="_blank" class="whatsapp-float" aria-label="CLIQUE AQUI E AGENDE SUA AVALIAÇÃO"
   style="display: flex; align-items: center; gap: 10px; background-color: #25D366; color: white; padding: 10px 15px; border-radius: 8px; text-decoration: none; font-weight: bold; width: fit-content; box-shadow: 0 4px 6px rgba(0,0,0,0.1);
          position: fixed; 
          bottom: 20px; 
          right: 20px; 
          z-index: 9999;">
    
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" 
         alt="WhatsApp" 
         style="width: 30px; height: 30px;">
    
    <span>CLIQUE AQUI E AGENDE SUA AVALIAÇÃO</span>
</a>

      <div class="container">
          <div class="footer-columns">
              <div class="footer-col">
                  <img src="https://via.placeholder.com/160x50?text=Clínica+da+Carol" alt="KC Beauty" width="160">
                  <p>Clínica de estética facial e corporal avançada, proporcionamos os melhores tratamentos e técnicas, com tratamento individualizado que valorize o seus traços e sua beleza.</p>
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
                    <li> <a href="https://www.instagram.com/drakarolcristina"><i class="fa fa-instagram"></i>@drakarolcristina</a></li>
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
  
<script>
    
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
                    e.preventDefault(); // impede o clique de redirecionar
                    item.classList.toggle('active'); // abre/fecha o submenu
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


    });
    // Adicionar evento de clique para abrir/fechar o submenu
    document.addEventListener('DOMContentLoaded', function() {
        const menuItem = document.querySelector('.menu-item-has-children');
        const subMenu = document.querySelector('.sub-menu');
        const chevron = document.querySelector('.menu-item-has-children .fa-chevron-down');

        // Alternar submenu ao clicar no item do menu
        menuItem.addEventListener('click', function(e) {
            // Impedir que o clique se propague
            if (e.target.tagName === 'A') {
                e.preventDefault();
            }

            // Alternar a classe 'active' no submenu
            subMenu.classList.toggle('active');

            // Rotacionar a seta
            chevron.classList.toggle('rotated');
        });

        // Fechar o submenu ao clicar fora dele
        document.addEventListener('click', function(e) {
            if (!menuItem.contains(e.target)) {
                subMenu.classList.remove('active');
                chevron.classList.remove('rotated');
            }
        });

        // Prevenir que cliques no submenu fechem o menu
        subMenu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
</script>
  </body>

  </html>

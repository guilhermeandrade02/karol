  <div class="contact-form">
                    <form id="whatsappForm">
                        <div class="form-group">
                            <input type="text" id="nome" placeholder="Seu nome completo" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="number" id="idade" placeholder="Idade" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" id="telefone" placeholder="Seu telefone" required
                                    maxlength="15">

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="tipo" placeholder="Corporal ou facial" required>
                        </div>
                        <div class="form-group">
                            <textarea id="queixa" placeholder="Qual sua queixa hoje" required></textarea>
                        </div>
                        <button type="submit" class="btn">Enviar Mensagem</button>
                    </form>
                </div>

                <script>
                    document.getElementById("whatsappForm").addEventListener("submit", function(e) {
                        e.preventDefault();

                        let nome = document.getElementById("nome").value;
                        let idade = document.getElementById("idade").value;
                        let telefone = document.getElementById("telefone").value;
                        let tipo = document.getElementById("tipo").value;
                        let queixa = document.getElementById("queixa").value;

                        let mensagem = `Olá! Meu nome é *${nome}*.
Idade: ${idade}
Telefone: ${telefone}
Tratamento: ${tipo}
Queixa: ${queixa}`;

                        let numero = "5541999632542"; // <-- coloque o número do WhatsApp aqui com DDI + DDD
                        let url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

                        window.open(url, "_blank");
                    });
                    document.getElementById("telefone").addEventListener("input", function(e) {
                        let value = e.target.value.replace(/\D/g, ""); // remove tudo que não é número

                        // aplica máscara (xx) xxxxx-xxxx
                        if (value.length > 11) value = value.substring(0, 11); // máximo 11 dígitos (celular)
                        if (value.length > 6) {
                            e.target.value = `(${value.substring(0,2)}) ${value.substring(2,7)}-${value.substring(7)}`;
                        } else if (value.length > 2) {
                            e.target.value = `(${value.substring(0,2)}) ${value.substring(2)}`;
                        } else {
                            e.target.value = value;
                        }
                    });
                </script>
<div class="row panel-footer fundo-rodape">
    <!-- area de localização -->
    <div class="col-sm-6 col-md-4">
        <div class="panel-footer" style="background: none;">
            <img src="images/logo-cowa.svg" alt="logo_pequeno">
            <br>
            <br>
            <i><strong> A melhor pizzaria da Zona Leste</strong></i>
            <address>
                <i>Avenida Paulista, 807 - São Paulo - São Paulo - SP - CEP 01310-930</i>
                <br>
                <span class="glyphicon glyphicon-phone-alt"></span>
                &nbsp;(11) 4002-9200
                <br>
                <span class="glyphicon glyphicon-envelope"></span>
                &nbsp;
                <a href="mailto:contato@cowabunga.com.br?subject=Contato do Site&cc=freiresdasilvabrunoeduardo@gmail.com">
                    contato@cowabunga.com.br
                </a>
            </address>
            <div class="embed-responsive embed-responsive-4by3">
                <!-- local para iframe -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0526715751753!2d-46.65071160000001!3d-23.5665517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8ee7e7daf%3A0x6713fe046df40b95!2sAv.%20Paulista%2C%20807%20-%20Jardim%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001419-002!5e0!3m2!1spt-BR!2sbr!4v1724070432437!5m2!1spt-BR!2sbr" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <!-- fim iframe -->
            </div>
        </div>
    </div>
    <!-- final area de localização -->
    <div class="col-sm-6 col-md-4">
        <div class="panel-footer">
            <h4>Links</h4>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="index.php#home" class="text-success">
                        <span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Home</span>
                    </a>
                </li>
                <li>
                    <a href="index.php#destaques" class="text-success">
                        <span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp;Destaques</span>
                    </a>
                </li>
                <li>
                    <a href="index.php#produtos" class="text-success">
                        <span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Produtos</span>
                    </a>
                </li>
                <li>
                    <a href="index.php#contato" class="text-success">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Contato</span>
                    </a>
                </li>
                <li>
                    <a href="admin/index.php" class="text-success">
                        <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Admin</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- area de contatos -->
    <div class="col-sm-6 col-md-4">
        <div class="panel-footer" style="background: none;">
            <h4>Contato</h4>
            <form action="rodape_contato_envia.php" name="form_contato" id="form_contato" method="post">
                <p>
                    <span class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <input type="text" name="nome_contato" placeholder="digite seu nome"
                            aria-describedby="basic-addon1" class="form-control" required>
                    </span>
                </p>
                <p>
                    <span class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="text" name="email_contato" placeholder="digite seu email"
                            aria-describedby="basic-addon2" class="form-control" required>
                    </span>
                </p>
                <p>
                    <span class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                            <span class="glyphicon glyphicon-tags"></span>
                        </span>
                        <input type="text" name="assunto_contato" placeholder="digite o Assunto do email"
                            aria-describedby="basic-addon2" class="form-control" required>
                    </span>
                </p>
                <p>
                    <span class="input-group">
                        <span class="input-group-addon" id="basic-addon3">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </span>
                        <textarea name="comentario_contato" cols="30" rows="5" placeholder="digite seu comentário"
                            aria-describedby="basic-addon3" class="form-control" required>
                            </textarea>
                    </span>
                </p>
                <p>
                    <button class="btn btn-success btn-block " aria-label="enviar" role="button" onclick="return confirmarEnvio();" >
                        Enviar
                        <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    </button>
                </p>
            </form>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="panel-footer" style="background: none;">
            <h6 class="text-success text-center">
                Desenvolvido por NewTech&trade; 2024
                <br>
                <br>
                <a href="https://github.com/NewTechEmp/projeto-desktop" target="_blank">Newtech</a>
            </h6>
        </div>
    </div>
</div>
<script type="text/javascript">
function confirmarEnvio() {
    // Exibe a caixa de confirmação
    var resposta = confirm("Você está enviando uma mensagem ao nosso suporte, OK?");
    
    // Se o usuário clicar em "OK", retorna true e a navegação prossegue
    // Se o usuário clicar em "Cancelar", retorna false e a navegação é interrompida
    return resposta;
}
</script>
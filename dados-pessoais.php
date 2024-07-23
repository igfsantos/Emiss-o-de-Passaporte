    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Agendamento de Passaporte</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <style>
            /* Reset CSS */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            /* Body styling */
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f2f2f2;
                line-height: 1.6;
            }
            
            /* Header styling */
            .navbar-light .navbar-nav .nav-link {
                color: #0033a0;
            }
            
            .navbar {
                background-color: white;
                padding: 20px 30px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            
            .navbar-brand {
                display: flex;
                align-items: center;
            }
            
            .navbar-brand img {
                width: 200px;
                margin-right: 15px;
            }
            
            .nav-link {
                font-family: sans-serif;
                color: #0033a0;
                font-size: 20px;
                margin: 0 20px;
                font-weight: 500;
            }
            
            .nav-link:hover {
                color: #0033a0;
            }
            
            .dropdown-menu a {
                color: #0033a0;
                font-size: 18px;
            }
            
            .dropdown-menu a:hover {
                background-color: #f4f4f4;
            }
            
            /* Steps styling */
            .steps {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
                padding: 0 20px;
            }
            
            .steps div {
                flex: 1;
                text-align: center;
                padding: 15px 10px;
                background-color: #e9ecef;
                border: 1px solid #ced4da;
                border-radius: 4px;
                margin: 0 5px;
                font-weight: bold;
                font-size: 1.1em;
                transition: background-color 0.3s, color 0.3s;
            }
            
            .steps .active {
                background-color: #0d244f;
                color: white;
            }
            
            .steps .completed {
                background-color: #28a745;
                color: white;
            }
            
            .steps div:hover {
                background-color: #007bff;
                color: white;
            }
            
            /* Container styling */
            .container {
                padding: 20px;
            }
            
            /* Form styling */
            form {
                display: flex;
                flex-direction: column;
                border: 1px solid #dcc580;
                border-radius: 6px;
                padding: 20px;
                background: white;
                margin: 20px 0; /* Margin top and bottom for spacing */
            }
            
            form label {
                margin: 5px 0 2px; /* Reduced margins */
                font-weight: bold;
                color: #333;
                font-size: 0.9em; /* Smaller font size */
            }
            
            form input, form select, form button {
                margin: 5px 0; /* Reduced margins */
                padding: 8px 10px;
                font-size: 0.9em; /* Smaller font size */
                border: 1px solid #ccc;
                border-radius: 4px;
                transition: all 0.3s ease;
            }
            
            form input:focus, form select:focus {
                border-color: #007bff;
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
                outline: none;
            }
            
            form button {
                background-color: #28a745;
                color: white;
                border: none;
                cursor: pointer;
                padding: 10px;
                font-size: 1em; /* Smaller font size */
                border-radius: 4px;
                transition: background-color 0.3s ease;
            }
            
            form button:hover {
                background-color: #218838;
            }
            
            /* Radio button styling */
            .radio-group {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            
            .radio-group input[type="radio"] {
                display: none;
            }
            
            .radio-group label {
                position: relative;
                padding-left: 30px;
                cursor: pointer;
                user-select: none;
                font-size: 0.9em;
                color: #333;
            }
            
            .radio-group label:before {
                content: "";
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 20px;
                height: 20px;
                border: 2px solid #ccc;
                border-radius: 50%;
                background: #fff;
                transition: border-color 0.3s, background 0.3s;
            }
            
            .radio-group input[type="radio"]:checked + label:before {
                border-color: #007bff;
                background: #007bff;
            }
            
            .radio-group label:after {
                content: "";
                position: absolute;
                left: 6px;
                top: 50%;
                transform: translateY(-50%) scale(0);
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #fff;
                transition: transform 0.3s;
            }
            
            .radio-group input[type="radio"]:checked + label:after {
                transform: translateY(-50%) scale(1);
            }
            
            /* Footer styling */
            .footer {
                background-color: #1e3a5f;
                color: white;
                text-align: center;
                padding: 20px 0;
                position: relative;
                bottom: 0;
                width: 100%;
            }
            
            .footer p {
                margin: 0;
            }
            
            /* Loading styling */
            .loading-message {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                font-size: 1.2em;
                color: #555;
            }
            
            .loading-message svg {
                margin-top: 10px;
            }
            
            /* Hidden class */
            .hidden {
                display: none;
            }
            
            /* Responsive design */
            @media (max-width: 768px) {
                .container {
                    padding: 10px;
                }
                
                .steps div {
                    padding: 10px;
                }
                
                form button {
                    font-size: 1em;
                    padding: 10px;
                }
                
                form input, form select, form button {
                    padding: 8px;
                    font-size: 0.9em;
                }
            }
            
            @media (max-width: 480px) {
                .steps {
                    flex-direction: column;
                }
                
                .steps div {
                    margin-bottom: 10px;
                }
            }
            .hidden {
                display: none;
            }
        </style>    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11169322934"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-11169322934');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#data_nascimento").inputmask("99/99/9999");
        });
        $(document).ready(function() {
            $("#data_emissao").inputmask("99/99/9999");
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-5">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="passaport.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="dados-pessoais.php">Emissão de Passaporte</a>
                            <a class="dropdown-item" href="dados-pessoais.php">Renovação de Passaporte</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fale Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html><div class="container">
    <div class="steps">
        <div class="step active">Dados Pessoais</div>
        <div class="step">Documentos</div>
        <div class="step">Dados Complementares</div>
        <div class="step">Pagamento</div>
    </div>
    <form action="documentos.php" method="get">
        <label for="nome_completo">Nome Completo <p class="required">*</p></label>
        <input type="text" id="nome_completo" name="nome_completo" value="" required>

        <label for="nome_mae">Nome Completo da Mãe (opcional)</label>
        <input type="text" id="nome_mae" name="nome_mae" value="">

        <label for="nome_pai">Nome Completo do Pai (opcional)</label>
        <input type="text" id="nome_pai" name="nome_pai" value="">

        <label for="data_nascimento">Data de Nascimento <p class="required">*</p> </label>
        <input type="text" id="data_nascimento" name="data_nascimento" value="" placeholder="00/00/0000" required>

        <label for="cor">Raça ou Cor</label>
        <select id="cor" name="cor" required>
            <option value="Amarela">Amarela</option>
            <option value="Branca">Branca</option>
            <option value="Indígena">Indígena</option>
            <option value="Parda">Parda</option>
            <option value="Preta" selected>Preta</option>
        </select>

        <label for="estado_civil">Estado Civil <p class="required">*</p></label>
        <select id="estado_civil" name="estado_civil" required>
            <option value="Solteiro(a)">Solteiro(a)</option>
            <option value="Casado(a)">Casado(a)</option>
            <option value="Viúvo(a)">Viúvo(a)</option>
            <option value="Separado Judicialmente">Separado Judicialmente</option>
            <option value="Divorciado(a)">Divorciado(a)</option>
        </select>

        <label for="nacionalidade">Nacionalidade <p class="required">*</p></label>
        <input type="text" id="nacionalidade" name="nacionalidade" value="Brasil" required>

        <label for="uf_nascimento">UF de Nascimento <p class="required">*</p></label>
        <select id="uf_nascimento" name="uf_nascimento" required>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AM">Amazonas</option>
            <option value="AP">Amapá</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO" selected>GO</option>
            <option value="MA">Maranhão</option>
            <option value="MG">Minas Gerais</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MT">Mato Grosso</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="PR">Paraná</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="SC">Santa Catarina</option>
            <option value="SE">Sergipe</option>
            <option value="SP">São Paulo</option>
            <option value="TO">Tocantins</option>
        </select>

        <label for="cidade_nascimento">Município de Nascimento <p class="required">*</p> </label>
        <input type="text" id="cidade_nascimento" name="cidade_nascimento" value="" required>

        <label for="nome_alterado">O seu nome já foi alterado em virtude de estado civil?</label>
        <div class="radio-group">
            <input type="radio" id="nome_alterado_sim" name="nome_alterado" value="">
            <label for="nome_alterado_sim">Sim</label>
            <input type="radio" id="nome_alterado_nao" name="nome_alterado" value="" checked>
            <label for="nome_alterado_nao">Não</label>
        </div>

        <button type="submit" name="sbmit">Próximo</button>
    </form>
</div>
<footer class="footer mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <img width="200px" src="agendar-light.png" alt="Logo">
        </div>
        <div class="line"></div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <p><strong>Contato:</strong></p>
                <p>Email: contato@seupassaporteagora.com/</p>
                <p>Telefone: (11) 1234-5677</p>
            </div>
            <div class="col-md-6 mt-3 ">
                <p><strong>SAC:</strong></p>
                <p>Horário de Atendimento: Seg - Sex: 08h às 17h30</p>
            </div>
        </div>
    </div>
    <div class="footer-text-container">
        <p class="footer-text">© 2024 - Agendamento Passaporte Online. Todos os Direitos Reservados.</p>
    </div>
    
</footer>
</body>
</html>


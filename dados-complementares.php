
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Agendamento de Passaporte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=e7sp0-ZivkHg86oAoACVcxjee-FaOYksPyBAEsLoJtj480TVyBn6d0qmNnclGFEy3aB0EzmY7j-CDr3imm_ZKpWwgdDaaeI9UkLtElhwe9m3kn_YVXKBDvY-tW_Nwxhh8tqH1jgiWlBCPS3L0jxQm89PrA14EDckUKEhegie-GNN4l717u8G1Um1umOrnU2S0jauRVVpwfjleBckrLkkz0qFiJERIeml9iPKmGHurcDE0EoY20bCegBeLDa5V462wzdrYWE2UoIz-zEY5OEV0OpcJfRKMtfg9r-trIkwX5mxPxyeKCWxwkaZCjNvUXUrcMVFpI1ouqD51DZFbnNs-oYZ3vLEzBLe4vxZhKfzabRca0a0Ntl3Deyl5hR6ZqemF8YxiP0K82hI9kOkQ0bv_kN8IumoA7Fl5Zww4FHQ4JzdCHY3ca_j2oUB-bAonzRLfxZLwhfWjAqm7jVHjT9-dhr8UUzYNVebArm2rGpWDbFSndVhzJrj7wh8yFFhaXsKE9YOODaLnwTgZOG1c0vdYRte0FFvooh843f6TKjJ_g7sE73vmlI9EVBZBJCDSxMr" charset="UTF-8"></script><style>

    .container {
            box-shadow: none;
        }

        .navbar {
            height: 180px;
            padding: 0 30px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="number"] {
            touch-action: manipulation;
        }
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
    border-radius: 6px;
    padding: 20px;
    background: #fbfbfb;
    margin: 20px 0; /* Margin top and bottom for spacing */
}

form label {
    margin: 14px 0 0px; /* Reduced margins */
    font-weight: bold;
    color: #333;
    font-size: 0.9em; /* Smaller font size */
    display: flex;
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

.required {
    color: red;
    margin-left: 10px;
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
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <div class="step completed">Dados Pessoais</div>
        <div class="step completed">Documentos</div>
        <div class="step active">Dados Complementares</div>
        <div class="step">Pagamento</div>
    </div>
    <form action="pagamento.php" method="get">
        <label for="profissao">Profissão <p class="required">*</p> </label>
        <input type="text" id="profissao" name="profissao" value="" required>

        <label for="email">E-mail <p class="required">*</p> </label>
        <input type="email" id="email" name="email" value="" required>

        <label for="celular">Celular <p class="required">*</p> </label>
        <input type="text" id="celular" name="celular" value="" required>

        <label for="cep">CEP <p class="required">*</p> </label>
        <input type="text" id="cep" name="cep" value="" required>

        <label for="uf">UF / Estado <p class="required">*</p> </label>
        <select id="uf" name="uf" required>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AM" selected>Amazonas</option>
            <option value="AP">Amapá</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
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

        <label for="cidade">Cidade <p class="required">*</p> </label>
        <input type="text" id="cidade" name="cidade" value="Cidade" required>

        <label for="bairro">Bairro <p class="required">*</p> </label>
        <input type="text" id="bairro" name="bairro" value="Bairro" required>

        <label for="rua">Rua / Logradouro <p class="required">*</p> </label>
        <input type="text" id="rua" name="rua" value="" required>

        <label for="numero">Número <p class="required">*</p> </label>
        <input type="text" id="numero" name="numero" value="Número" required>

        <label for="complemento">Complemento (opcional) <p>.</p> </label>
        <input type="text" id="complemento" name="" value="Complemento" required>

        <button type="submit">Próximo</button>
        <a href="documentos.php" class="btn btn-secondary">Voltar</a>
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

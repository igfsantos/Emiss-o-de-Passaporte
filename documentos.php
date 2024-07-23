
<!DOCTYPE html>
<html lang="pt-BR">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Agendamento de Passaporte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=cUbZTXWlHUhdF-LUIXIaHI6UMOCAGaoLoUvZPAhID_Q6tEQbwt8mf8p-116zHiKG3xPaPyhOeotOL4Vo8ELQtpS81CLgzCjM9nd_K3O5wYEWaFzbxAuuTgdEdzmMsEC97absW_hgWZ-mFMNgPFHfnZ-DzZibbig2GYRGR0Oe03f5gZ5lzhdSP4KV7mv1FAh_RSrkcWI635C9tglD51bb3fpd2R-eCUTm88OcfMGYYYTIBvw-FzEjGLnXBuHXwE_fQEZjOCiNwmFSdeq98yvy0HQGhoxKzXWfE6Te3XtHpgHt8pB14l8-CN2lenRvdPmTwwnQbldHDkuHxMjqUuwSPLU5U6NoX2OxamnC9qKbtW1N6EucWb3g0h24_zKegXtB" charset="UTF-8"></script><style>
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
        <div class="step active">Documentos</div>
        <div class="step">Dados Complementares</div>
        <div class="step">Pagamento</div>
    </div>
    <form action="dados-complementares.php" method="get">
        <label for="cpf">CPF <p class="required">*</p> </label>
        <input type="text" id="cpf" name="cpf" value="" required>

        <label for="documento_identidade">Número do Documento de Identidade <p class="required">*</p> </label>
        <input type="text" id="documento_identidade" name="documento_identidade" value="" required>

        <label for="data_emissao">Data de Emissão <p class="required">*</p> </label>
        <input placeholder="00/00/0000" type="text" id="data_emissao" name="data_emissao" value="" required>

        <label for="orgao_emissor">Órgão Emissor do Documento <p class="required">*</p> </label>
        <input type="text" id="orgao_emissor" name="orgao_emissor" value="" required>

        <label for="estado_emissao">Estado que você emitiu o Documento <p class="required">*</p> </label>
        <select id="estado_emissao" name="estado_emissao" required>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia" selected>Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Paraná">Paraná</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="Sergipe">Sergipe</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Tocantins">Tocantins</option>
        </select>

        <label for="menor_idade">O solicitante do passaporte é menor de 18 anos? <p class="required">*</p> </label>
        <div class="radio-group">
            <input type="radio" id="menor_idade_sim" name="menor_idade" value="sim" required>
            <label for="menor_idade_sim">Sim</label>
            <input type="radio" id="menor_idade_nao" name="menor_idade" value="nao" required checked>
            <label for="menor_idade_nao">Não</label>
        </div>

        <div id="menor_idade_fields" style="display: none;">
            <div class="form-group">
                <label for="cpf_responsavel">CPF do Responsável <p class="required">*</p> </label>
                <input type="text" id="cpf_responsavel" name="cpf_responsavel" value="000.000.000-00">
            </div>

            <div class="form-group">
                <label for="autorizacao_viagem">Autorização de Viagem para Menor <p class="required">*</p> </label>
                <div class="radio-group">
                    <input type="radio" id="autorizacao_viagem_restrita" name="autorizacao_viagem" value="Restrita" required checked>
                    <label for="autorizacao_viagem_restrita">O titular, enquanto menor, está autorizado pelos genitores, pelo prazo deste documento, a viajar apenas com um dos pais, indistintamente. (Autorização restrita - autorização de viagem impressa no passaporte)</label>
                    <input type="radio" id="autorizacao_viagem_ampla" name="autorizacao_viagem" value="Ampla" required>
                    <label for="autorizacao_viagem_ampla">O titular, enquanto menor, está autorizado pelos genitores, pelo prazo deste documento, a viajar desacompanhado ou apenas com um dos pais, indistintamente. (Autorização ampla - autorização de viagem impressa no passaporte)</label>
                    <input type="radio" id="autorizacao_viagem_necessaria" name="autorizacao_viagem" value="Necessária" required>
                    <label for="autorizacao_viagem_necessaria">O titular, enquanto menor, dependerá de autorização, na forma da lei, para viajar desacompanhado ou apenas com um dos pais, indistintamente. (Necessária apresentação de autorização de viagem ao embarcar)</label>
                </div>
            </div>
        </div>

        <label for="passaporte_anterior">Possui passaporte anterior? <p class="required">*</p> </label>
        <div class="radio-group">
            <input type="radio" id="passaporte_anterior_sim" name="passaporte_anterior" value="sim" required>
            <label for="passaporte_anterior_sim">Sim</label>
            <input type="radio" id="passaporte_anterior_nao" name="passaporte_anterior" value="nao" required checked>
            <label for="passaporte_anterior_nao">Não</label>
        </div>

        <div id="passaporte_anterior_fields" class="form-group" style="display: none;">
            <label for="situacao_passaporte">Situação do Passaporte anterior <p class="required">*</p> </label>
            <div class="radio-group">
                <input type="radio" id="situacao_passaporte_valido" name="situacao_passaporte" value="Válido" required checked>
                <label for="situacao_passaporte_valido">Passaporte anterior válido</label>
                <input type="radio" id="situacao_passaporte_extraviado" name="situacao_passaporte" value="Extraviado" required>
                <label for="situacao_passaporte_extraviado">Extraviado</label>
                <input type="radio" id="situacao_passaporte_retido_pf" name="situacao_passaporte" value="Retido_PF" required>
                <label for="situacao_passaporte_retido_pf">Está retido pela Polícia Federal</label>
                <input type="radio" id="situacao_passaporte_retido_rme" name="situacao_passaporte" value="Retido_RME" required>
                <label for="situacao_passaporte_retido_rme">Está retido pelo RME</label>
                <input type="radio" id="situacao_passaporte_roubado" name="situacao_passaporte" value="Roubado" required>
                <label for="situacao_passaporte_roubado">Roubado ou furtado</label>
                <input type="radio" id="situacao_passaporte_vencido" name="situacao_passaporte" value="Vencido" required>
                <label for="situacao_passaporte_vencido">Passaporte anterior vencido</label>
            </div>
        </div>

        <!-- Hidden inputs with default values to ensure form submission even when fields are hidden -->
        <input type="hidden" name="cpf_responsavel" value="000.000.000-00">
        <input type="hidden" name="autorizacao_viagem" value="Restrita">
        <input type="hidden" name="situacao_passaporte" value="Válido">

        <button type="submit" name="submit">Próximo</button>
        <a href="dados-pessoais.php" class="btn btn-secondary">Voltar</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menorIdadeRadios = document.getElementsByName('menor_idade');
        const menorIdadeFields = document.getElementById('menor_idade_fields');
        const passaporteAnteriorRadios = document.getElementsByName('passaporte_anterior');
        const passaporteAnteriorFields = document.getElementById('passaporte_anterior_fields');

        function toggleMenorIdadeFields() {
            if (document.getElementById('menor_idade_sim').checked) {
                menorIdadeFields.style.display = 'block';
            } else {
                menorIdadeFields.style.display = 'none';
                // Set default value for hidden fields
                document.getElementById('cpf_responsavel').value = '000.000.000-00';
                document.getElementById('autorizacao_viagem_restrita').checked = true;
            }
        }

        function togglePassaporteAnteriorFields() {
            if (document.getElementById('passaporte_anterior_sim').checked) {
                passaporteAnteriorFields.style.display = 'block';
            } else {
                passaporteAnteriorFields.style.display = 'none';
                // Set default value for hidden fields
                document.getElementById('situacao_passaporte_valido').checked = true;
            }
        }

        // Add event listeners to radio buttons
        for (const radio of menorIdadeRadios) {
            radio.addEventListener('change', toggleMenorIdadeFields);
        }

        for (const radio of passaporteAnteriorRadios) {
            radio.addEventListener('change', togglePassaporteAnteriorFields);
        }

        // Initialize the form state
        toggleMenorIdadeFields();
        togglePassaporteAnteriorFields();
    });
</script>

<style>
    
    .radio-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    .radio-group input {
        margin-bottom: 5px;
    }

    .radio-group label {
        margin-bottom: 10px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .mt-2 {
        margin-top: 20px;
    }
</style>


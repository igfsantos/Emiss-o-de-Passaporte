
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11169322934"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'AW-11169322934');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Passaporte</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

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

        .header-section {
            background-color: #1e3a5f;
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
        }

        .header-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .header-subtitle {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .btn-group .btn {
            background-color: #f0a500;
            color: white;
            margin: 10px;
            border-radius: 5px;
            padding: 15px 30px;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .btn-group .btn-secondary {
            background-color: #0056b3;
        }

        .btn i {
            margin-right: 10px;
        }

        .process {
            padding: 40px 0;
            background-color: white;
        }

        .process p {
            font-size: 0.9rem;
            text-align: center;
            font-weight: 500;
            color: #8b8b8b;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .process-step {
            text-align: center;
            margin-bottom: 20px;
        }

        .process-step i {
            font-size: 36px;
            color: #d6b85c;
            margin-bottom: 10px;
        }

        .process-step h3 {
            font-size: 0.8rem;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
            text-align: center;
        }

        .faq {
            background-color: #f4f4f4;
            padding: 40px 0;
            text-align: center;
        }

        .faq .card {
            border: 2px solid #d6b85c;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .faq .card-header {
            background-color: white;
            color: black;
            border-bottom: 2px solid #d6b85c;
        }

        .faq .btn-link {
            color: black;
            font-weight: bold;
        }

        .faq .btn-link:hover {
            text-decoration: none;
        }

        .faq .card-body {
            font-size: 16px;
            color: #333;
            text-align: left;
        }

        .footer {
            background-color: #1e3a5f;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer img {
            width: 150px;
            margin-bottom: 10px;
        }

        .footer .line {
            width: 80%;
            height: 2px;
            background-color: white;
            margin: 10px auto;
        }

        .footer .row {
            text-align: left;
            margin-top: 20px;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer .col-md-4 p {
            margin-bottom: 10px;
        }

        .footer-text-container {
            background-color: white;
            color: black;
            padding: 10px 0;
            text-align: center;
        }

        .footer-text-container p {
            margin: 0;
        }

        .leia-container {
            background-color: #002855;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .leia-container p {
            margin: 0;
            font-size: 16px;
        }

        .main-header {
            background-color: #1e3a5f;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .main-header .logo img {
            height: 80px;
        }

        .main-header .title {
            font-size: 36px;
            font-weight: bold;
            margin-top: 20px;
        }

        .main-header .subtitle {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .cta-buttons .btn {
            background-color: #d6b85c;
            color: white;
            font-size: 18px;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-weight: 600;
        }

        .cta-buttons .btn:hover {
            background-color: #d48b00;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: row;
                justify-content: space-between;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .cta-buttons .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        /* Custom Styles */
        .header-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .header-subtitle {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        .main-header .logo {
            margin-bottom: 20px;
        }

        .lines {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .accordion-button::after {
            background-image: none !important;
        }

        .accordion-button:focus {
            box-shadow: none !important;
        }

        .accordion-button:not(.collapsed) {
            color: #0033a0;
            background-color: #e7f1ff;
        }

        .accordion-button {
            color: #0033a0;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="passaport.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="dados-pessoais.php">Emissão de
                                Passaporte</a>
                            <a class="dropdown-item" href="dados-pessoais.php">Renovação de
                                Passaporte</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fale Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header-section">
        <div class="container header-content">
            <h1 class="header-title">Emissão de Passaporte</h1>
            <p class="header-subtitle">Escolha qual documento deseja solicitar:</p>
            <div class="cta-buttons d-flex flex-column">
                <a href="dados-pessoais.php" class="btn"><i class="fas fa-file-alt"></i> Emissão
                    de Passaporte</a>
                <a href="dados-pessoais.php" class="btn"><i class="fas fa-sync-alt"></i>
                    Renovação de Passaporte</a>
            </div>
        </div>
    </header>

    <section class="process">
        <div class="container text-center">
            <h2 class="section-title mb-5">Como funciona o processo?</h2>
            <div class="row">
                <div class="col-md-3 process-step">
                    <i class="fas fa-file-alt"></i>
                    <h3>Preencha o formulário</h3>
                    <p>Clique no botão inicial para ter acesso ao formulário. Preencha os dados até o fim para chegar na
                        tela de pagamento.</p>
                </div>
                <div class="col-md-3 process-step">
                    <i class="fas fa-shopping-cart"></i>
                    <h3>Realize o pagamento</h3>
                    <p>Realize o pagamento da taxa. Após compensado o pagamento, irá receber um e-mail de confirmação.
                    </p>
                </div>
                <div class="col-md-3 process-step">
                    <i class="fas fa-envelope"></i>
                    <h3>Contato e execução</h3>
                    <p>Um dos nossos consultores irá entrar em contato por e-mail para seguir com os próximos passos do
                        agendamento.</p>
                </div>
                <div class="col-md-3 process-step">
                    <i class="fas fa-globe"></i>
                    <h3>Acompanhamento</h3>
                    <p>Todo o processo é encaminhado por e-mail, são enviadas instruções detalhadas. Nossa consultoria
                        só acaba quando seu passaporte for emitido.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container text-center">
            <h2 class="section-title">Dúvidas Frequentes</h2>
            <div class="accordion" id="faqAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Quais são os documentos necessários para solicitar um passaporte?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#faqAccordion">
                        <div class="card-body">
                            Você precisará de um documento de identificação com foto, CPF, comprovante de regularidade
                            com o serviço militar (para homens de 19 a 45 anos), e comprovante de regularidade
                            eleitoral. Em caso de perda ou roubo do passaporte anterior, um boletim de ocorrência será
                            necessário.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quanto tempo leva para o passaporte ficar pronto?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                        <div class="card-body">
                            O tempo necessário para a emissão de um passaporte no Brasil pode variar significativamente
                            dependendo de vários fatores, incluindo a localidade específica onde a solicitação é feita.
                            Em média, após o atendimento presencial e a entrega da documentação necessária, o passaporte
                            geralmente fica pronto em cerca de 6 dias úteis. No entanto, esse prazo é uma estimativa e
                            pode ser influenciado por fatores como o volume de pedidos na região, a eficiência dos
                            serviços postais (caso o passaporte seja entregue pelo correio) e questões administrativas
                            específicas de cada estado.

                            Nossa assessoria desempenha um papel crucial em garantir que o processo de emissão do seu
                            passaporte seja o mais rápido e tranquilo possível. Com nosso conhecimento aprofundado dos
                            procedimentos e prazos em diferentes estados, podemos oferecer orientações precisas e
                            assistência na preparação de toda a documentação necessária. Além disso, nossa experiência
                            nos permite identificar e resolver proativamente quaisquer questões que possam causar
                            atrasos, assegurando que você receba seu passaporte no menor tempo possível.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Preciso da autorização do outro genitor para tirar passaporte para meu filho menor?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                        <div class="card-body">
                            Sim, a autorização de ambos os pais é necessária para a emissão de passaporte para menores
                            de idade.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                A empresa desse site é responsável pela emissão do passaporte?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                        <div class="card-body">
                            Não! A AWF, é uma empresa privada, agência de turismo, devidamente registrada sob o CNPJ
                            nº.48.183.810/0001-57, devidamente certificada pelo Ministério do Turismo – Cadastur,
                            conforme certificação disponível no rodapé do site e, que, entre outros serviços, realiza o
                            serviço de assessorar seus clientes com a emissão e renovação de passaportes brasileiro.

                            Dessa forma, nosso serviço consiste em realizar a organização e conferência da documentação,
                            a quitação de taxas, bem como o agendamento para emissão do passaporte. Acompanhamos todas
                            as etapas necessárias para a emissão em tempo ágil para nossos clientes.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Essas atividade é legal?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                        <div class="card-body">
                            Sim! A Atividade de Agência de Turismo é devidamente regulamentada pela Lei 12.974/2014.

                            Art. 3º É privativo das Agências de Turismo o exercício das seguintes atividades:

                            II – assessoramento, planejamento e organização de atividades associadas à execução de
                            viagens turísticas ou excursões; IV – organização de programas, serviços, roteiros e
                            itinerários de viagens, individuais ou em grupo, e intermediação remunerada na sua execução
                            e comercialização; e

                            Art. 4º As Agências de Turismo poderão exercer, ainda, e sem caráter privativo, as seguintes
                            atividades:

                            I – obtenção e legalização de documentos para viajantes; V – intermediação remunerada na
                            reserva e contratação de hospedagem e na locação de veículos;

                            Art. 8º Constituem prerrogativas das Agências de Turismo registradas na forma desta Lei:

                            II – o recebimento de remuneração pelo exercício de suas atividades; e
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="leia-container">
        <div class="container">
            <p>ESTE NÃO É UM SITE GOVERNAMENTAL</p>
            <p>O serviço prestado através do site www.agendamentoservicos.online é um serviço privado e opcional.</p>
            <p>Todos os serviços e alterações no passaporte podem ser feitos, gratuitamente sem o acompanhamento
                profissional deste site, através da plataforma governamental www.gov.br.</p>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <img src="agendar-light.png" alt="Logo">
            </div>
            <div class="line"></div>
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Endereço:</strong></p>
                    <p>Rua Exemplo, 123, Bairro, Cidade, Estado</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Contato:</strong></p>
                    <p>Email: contato@agendamentoservicos.online</p>
                    <p>Telefone: (11) 1234-5678</p>
                </div>
                <div class="col-md-4">
                    <p><strong>SAC:</strong></p>
                    <p>Horário de Atendimento: Seg - Sex: 08h às 17h30</p>
                    <p>CNPJ: 00.000.000/0001-00</p>
                </div>
            </div>
        </div>
        <div class="footer-text-container">
            <p class="footer-text">© 2024 - Agendamento Passaporte Online. Todos os Direitos Reservados.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Script de acessibilidade - Libras e Braille -->
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script src="https://gov.br/braille.js"></script>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>

</html>
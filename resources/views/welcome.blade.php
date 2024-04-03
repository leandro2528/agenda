<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - AGENDAR - O MELHOR SISTEMA DE GESTÃO PARA PROFISSIONAIS DA SAÚDE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    .bar-int {
        display: flex;
        justify-content: center;
        margin: 6px 0px
    }
    .bar-preta {
        width:30px;
        background-color: #000;
        height: 2px;
        margin-right: 6px;
    }
    .bar-azul {
        width:60px;
        background-color: blue;
        height: 2px;
       
    }
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="row py-3" style="border-bottom: 1px solid #eee;">
            
            <div class="col-12 d-flex align-items-center justify-content-between">
                <div class="logo">
                    <img style="width: 200px;" src="{{ asset('images/logo-inicial.webp') }}" alt="">
                </div>
                <div class="menu">
                    <nav class="navbar navbar-expand">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav" style="font-weight: 500; font-size: 14px;">

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Como Funciona</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Funcionalidades</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Planos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Ajuda</a>
                                    </li>

                                    <li class="nav-item">
                                        @if (Route::has('login'))
                                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                                @auth
                                                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                                @else
                                                    <a href="{{ route('login') }}" class="btn btn-dark btn-sm mx-3  py-2 px-4" style="font-weight: 600;">Entrar</a>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}" class="btn btn-primary btn-sm py-2 px-4" style="font-weight: 600;">Teste Grátis</a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row my-5">
                <div class="col-6">
                        <h2>Sistema de Gestão para</h2>
                    <h1 style="font-weight: bold;">PROFISSIONAIS DA SAÚDE</h1>
                    <h5 class="text-primary">O mais fácil e intuitivo otimizando o seu dia a dia!</h5>
                    <ul style="color: #000; font-weight: 400;">
                        <li>Prontuário eletrônicos <span style="font-weight: 800;">(Com prescrição)</span></li>
                        <li>Agendamento de consulta</li>
                        <li>Lembretes autoáticos por SMS e WhatsApp</li>
                        <li>Gestão financeira</li>
                        <li>Aplicativo exclusivo(Android e IOS)</li>
                        <li>Seu site e Blog integrados</li>
                    </ul>
                    <h2 class="text-primary" style="font-weight: bold;">E muito mais!</h2>
                    <div class="botoes-acesso">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-dark btn-sm mx-3  py-2 px-4" style="font-weight: 600;">Entrar</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm py-2 px-4" style="font-weight: 600;">Teste Grátis</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </div>
                </div>
                <div class="col-6">
                    <img class="w-100" src="{{ asset('images/imagem-pg-inicial.webp') }}" alt="">
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mt-5">ENTENDA COMO FUNCIONA</h2>
                    <div class="bar-int">
                        <div class="bar-preta"></div>
                        <div class="bar-azul"></div>
                    </div>
                    <div class="text-center mb-5">O Agendart é um sistema de gestão completo, simples e fácil de usar! Veja como funciona:</div>
                    <div class="card-box d-flex justify-content-between">
                        <div class="card p-5 w-100  text-center border-0">
                            <img class="mb-3" src="{{ asset('images/img-03.webp') }}" alt="">
                            <h2 class="text-primary" style="font-weight: bold;">OTIMIZE SUA ROTINA</h2>
                            <P>
                                Tudo em um só lugar: centralize o gerenciamento 
                                do seu consultório, com <span style="font-weight: 700;">Agenda Inteligente,
                                Prontuário Eletrônico, Teleatendimento, 
                                Gestão financeira</span> e muito mais.
                            </P>
                        </div>
                        <div class="card p-5 w-100  text-center border-0">
                            <img class="mb-3" src="{{ asset('images/img-02.webp') }}" alt="">
                            <h2 class="text-primary" style="font-weight: bold;">AUMENTE SUA RECEITA</h2>
                            <P>
                                Consiga mais clientes criando facilmente o seu próprio 
                                <span style="font-weight: 700;">site profissional</span> onde seus pacientes podem 
                                encontrar seus serviços. Tenha seu 
                                perfil divulgado no Buscador Agendart e 
                                seja encontrado por quem precisa do seu atendimento.
                            </P>
                        </div>
                        <div class="card p-5 w-100  text-center border-0">
                            <img class="mb-3" src="{{ asset('images/img-01.webp') }}" alt="">
                            <h2 class="text-primary" style="font-weight: bold;">FIDELIZE SEUS PACIENTES</h2>
                            <P>
                                Já pensou manter uma comunicação fácil com seus pacientes? 
                                Envie <span style="font-weight: 700;">lembretes de consultas, confirmação de presença, 
                                agradecimentos</span> e muito mais pelo Agendart! Assim, 
                                você reduz as faltas e fideliza quem você atende.
                            </P>
                        </div>
                    </div>
                    <div class="btn-plano d-flex justify-content-center">
                        <a class="btn btn-primary" href="">Conheça nosso plaanos</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5" style="background-image: url('{{ asset('images/img-fundo.webp') }}');">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mt-5">PRINCIPAIS FUNCIONALIDADES</h2>
                    <div class="bar-int">
                        <div class="bar-preta"></div>
                        <div class="bar-azul"></div>
                    </div>
                    
                </div>
            </div>
            <div class="row p-5">
                <div class="col-3">coluna esquerda</div>
                <div class="col-9">
                    <div class="card-box d-flex justify-content-between">
                        <div class="card w-100 p-3 text-center">
                            <div class="text-primary mb-2" style="font-size: 12px; font-weight: 800;">AGENDAMENTO INTELIGENTE</div>
                                <p style="font-size: 14px;">Use o nosso sistema de agendamento inteligente (evite faltas com a nossa AI) 
                                    e registre seus pacientes no nosso Prontuário Eletrônico. 
                                    Chega de armazenar informações no papel, digitalize sua clínica.
                                </p>
                        </div>
                        <div class="card w-100 p-3 mx-3 text-center">
                            <div class="text-primary mb-2" style="font-size: 12px; font-weight: 800;">ATENDIMENTO POR TELECONSULTA</div>
                                <p style="font-size: 14px;">Realize de forma simples e segura os atendimentos online a seus pacientes, 
                                    sem precisar baixar mais uma ferramenta. E não tem custo adicional: 
                                    a ferramenta está incluída na sua assinatura.
                                </p>
                        </div>
                        <div class="card w-100 p-3 text-center">
                            <div class="text-primary mb-2" style="font-size: 12px; font-weight: 800;">TENHA SEU SITE E BLOG PESSOAL</div>
                                <p style="font-size: 14px;">O Agendart possibilita criar um Site e Blog personalizado do seu 
                                    consultório ou clínica e permite que os seus pacientes 
                                    realizem o auto agendamento de forma online, prática e rápida.
                                </p>
                        </div>
                    </div>

                    <div class="card-box d-flex justify-content-between mt-3">
                        <div class="card w-100 p-3 text-center">
                            <div class="text-primary mb-2" style="font-size: 12px; font-weight: 800;">COMUNICAÇÃO AUTOMATIZADA</div>
                                <p style="font-size: 14px;">Mantenha o contato com seus pacientes de forma rápida e automatizada, 
                                    sempre lembrando-os de suas consultas agendadas e dos retornos 
                                    futuros, sem gastar tempo com isso.
                                </p>
                        </div>
                        <div class="card w-100 p-3 mx-3 text-center">
                            <div class="text-primary mb-2" style="font-size: 12px; font-weight: 800;">PRONTUÁRIO</div>
                                <p style="font-size: 14px;">Consolidamos com o sistema de agendamento online um prontuário eletrônico 
                                para acompanhamento de cada paciente. Mantenha salvo todo o histórico 
                                dos seus atendimentos sem precisar de papéis.
                                </p>
                        </div>
                        <div class="card w-100 p-3 text-center">
                            <div class="text-primary mb-2" style="font-size: 12px; font-weight: 800;">GESTÃO FINANCEIRA</div>
                                <p style="font-size: 14px;">Tenha controle das suas finanças com o Agendart. Emita recibos, 
                                controle recebimentos, gerencie pagamentos e acompanhe o resultado financeiro 
                                do seu consultório, tudo na palma da sua mão
                                </p>
                        </div>
                    </div>

                    <div class="btn-plano d-flex justify-content-center mt-5">
                        <a class="btn btn-primary" href="">Mais funcionalidades</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row my-5">
                <div class="col-8">
                    <div id="carouselExample" class="carousel slide p-5">
                        <div class="text-center fs-3 title-slider" style="font-weight: 800;">RECADO DE QUEM USA</div>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center p-4">
                               <p>“O Agendart me ajuda muito todos os dias! Ele simplificou muito o 
                                gerenciamento das minhas consultas, agendamentos e histórico de 
                                pacientes. A interface super simples de usar tornaram meu 
                                trabalho mais eficiente. Achava que sempre teria 
                                dificuldades com sistemas, mas com o 
                                Agendart fica fácil. Recomendo a 
                                todos os profissionais de saúde!”</p>
                                <h4 class="text-primary">Dra. Silvia L.</h4>
                            </div>
                            <div class="carousel-item text-center  p-4">
                               <p>“Eu começo o meu dia já abrindo o Agendart no celular para ver as minhas consultas do dia. 
                                Com o sistema fica muito mais simples de controlar todos os profissionais da clínica, 
                                salas de atendimento, todo o prontuário dos pacientes... enfim, gosto bastante! 
                                A parte de gerenciamento financeiro também me ajuda muito, consigo 
                                controlar os faturamentos e comissões de todos os profissionais da clínica.”</p>
                                <h4 class="text-primary">Dr. Francisco N.</h4>
                            </div>
                            <div class="carousel-item text-center  p-4">
                               <p class="">“O Agendart me ajuda muito todos os dias! Ele simplificou muito o 
                                gerenciamento das minhas consultas, agendamentos e histórico de 
                                pacientes. A interface super simples de usar tornaram meu 
                                trabalho mais eficiente. Achava que sempre teria 
                                dificuldades com sistemas, mas com o 
                                Agendart fica fácil. Recomendo a 
                                todos os profissionais de saúde!”</p>
                                <h4 class="text-primary">Dr. Henrique A.</h4>
                            </div>
                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <a class="" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                                </svg>
                            </a>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                               <a class="" href="">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                               </a>
                            </button>
                        </div>
                    </div>
                <div class="col-4">
                    <div class="card-box">
                        <div class="card p-3 d-flex flex-row justify-content-between align-items-center">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-calendar-week-fill" viewBox="0 0 16 16">
                                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                                </svg>
                            </div>
                            <div class="card-info">
                                <h3 class="text-primary text-end">+ 1.300.00</h3>
                                <span class="fs-5">Consulta realizada</span>
                            </div>
                        </div>
                        <div class="card p-3 d-flex flex-row justify-content-between my-3 align-items-center">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                                </svg>
                            </div>
                            <div class="card-info">
                                <h3 class="text-primary text-end">+ 160.00</h3>
                                <span class="fs-5">Pacientes Cadastrados</span>
                            </div>
                        </div>
                        <div class="card p-3 d-flex flex-row justify-content-between align-items-center">
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                            </div>
                            <div class="card-info">
                                <h3 class="text-primary text-end">+ 6.600</h3>
                                <span class="fs-5">Usuários Cadastrados</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row my-3">
                <div class="col-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <div class="text-center fs-3 title-slider" style="font-weight: 800;">NOSSOS PLANOS</div>
                            <div class="bar-int">
                            <div class="bar-preta"></div>
                            <div class="bar-azul"></div>
                    </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fs-4" style="font-weight: bold;">Planos a partir de</h5>
                            <p class="card-text text-primary fs-3" style="font-weight: bold;">R$ 39,90 / mês</p>
                        </div>
                        <div class="card-footer text-body-secondary">
                            <div class="info-planos p-3 d-flex flex-column align-items-center">
                                <h5 class="text-dark">Escolha o tipo de profissional para ver as opções de plano:</h5>
                                <select class="form-select mt-2" style="width: 500px;" name="" id="">
                                    <option value="">Selecione o tipo de plano</option>
                                    <option value="">Dentista</option>
                                    <option value="">Fisioterapeuta</option>
                                    <option value="">Médico</option>
                                    <option value="">Fonoaudiólogo</option>
                                    <option value="">Nutricionista</option>
                                    <option value="">Piscicanalista</option>
                                    <option value="">Piscólogo</option>
                                    <option value="">Terapeuta</option>
                                    <option value="">Outro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-plano d-flex justify-content-center mt-5">
                        <a class="btn btn-primary" href="">Agendar Demostração</a>
                </div>
            </div>
        </div>

        <div class="container my-5" style="background-image: url('{{ asset('images/img-fundo.webp') }}');">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mt-5">DÚVIDAS FREQUENTES</h2>
                    <div class="bar-int">
                        <div class="bar-preta"></div>
                        <div class="bar-azul"></div>
                    </div>
                    
                </div>
            </div>
            <div class="row p-5">
                <div class="col-6"> <!--  COLUNA A ESQUERDA VAZIA  --> </div>
                <div class="col-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button style="font-weight: bold; font-size: 16px;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Por que o AGENDART é diferente dos outros sistemas de mercado?
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Somos um sistema completo, sem ser complexo. O AGENDART foi desenvolvido pensando no dia a dia do
                                profissional da saúde e em te ajudar a otimizar melhor o seu tempo.
                                Contamos com todas as funcionalidades necessárias no dia a dia como prontuário, gestão financeira,
                                envio de mensagens e ainda somos o único sistema que utiliza inteligência artificial para reduzir até 70% das faltas dos pacientes.
                                Assim, você atua de forma mais inteligente, nosso sistema trabalha por você e o profissional de saúde 
                                tem mais tempo para se dedicar ao que mais importa: atender os pacientes.
                                Nosso preço também é diferenciado: compare, faça as contas e venha para o futuro!
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button style="font-weight: bold; font-size: 16px;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                            O AGENDART é indicado somente para clínicas ou também para profissionais autônomos?
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Ambos! Nossa plataforma online pode ser utilizada tanto por clínicas de vários 
                                profissionais quanto por profissionais autônomos. O sistema se ajusta conforme o seu perfil e número de acessos.
                                Além disso, contamos com a solução de redução de faltas em API que pode ser integrada a sistemas 
                                já existentes em hospitais e laboratórios. Clique para conhecer melhor nossas soluções enterprise.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button style="font-weight: bold; font-size: 16px;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                            Acho a maioria dos sistemas muito complicado. O AGENDART é difícil de mexer?
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Não! Uma das principais vantagens do nosso sistema é ser simples e fácil de usar.
                                Desenvolvemos nosso sistema pensando nos profissionais de saúde. Conversamos com vários usuários durante o 
                                processo de construção, e a resposta era sempre a mesma: "Os sistemas são complicados. 
                                Eu quero dedicar meu tempo a cuidar das pessoas, não ficar mexendo na agenda". 
                                Por isso, fizemos questão de criar algo simples e completo.
                                Faça um teste e veja como é simples de aprender a mexer no software AGENDART.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button style="font-weight: bold; font-size: 16px;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                            Já tenho um sistema, consigo integrar minha agenda com o AGENDART sem perder dados?
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Sim! Sem problemas nenhum. Conseguimos fazer a transferência de dados (agendas, pacientes e profissionais) 
                                de muitos outros sistemas. Entre em contato com a gente e veja se seu sistema 
                                atual já faz parte do nosso processo de transmissão de dados.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button style="font-weight: bold; font-size: 16px;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseOne">
                            Como funciona o disparo de mensagens para os meus pacientes?
                        </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                O AGENDART facilita o disparo de mensagens para os pacientes orientando por meio da página de 
                                Avisos quais mensagens devem ser enviadas. Com um único clique, é possível disparar uma 
                                série de mensagens com confirmações, aniversariantes e remarcações.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button style="font-weight: bold; font-size: 16px;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseOne">
                            Quais pontos são importantes na hora de escolher um software de gestão para profissionais da saúde ?
                        </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Na hora de escolher um software de gestão para profissionais da saúde, alguns pontos são cruciais.
                                Opte por um sistema intuitivo, o melhor software para clínicas, que seja fácil de usar e ofereça uma plataforma online. 
                                Certifique-se de que inclui ferramentas abrangentes para uma gestão eficaz, 
                                com foco especial na gestão financeira, agenda médica digital e recursos de marketing integrados.
                                Escolher um sistema para clínicas que atenda a esses critérios proporcionará uma experiência mais fluida 
                                e completa para sua prática profissional, seja qual for a sua especialidade na área da saúde.
                                Ao optar pelo AGENDART, você tem acesso à tecnologia de ponta e soluções que vão transformar sua rotina. 
                                E o nosso teste é grátis e não precisa colocar seu cartão de crédito.
                            </div>
                        </div>
                    </div>
                    
                </div>
                    <div class="btn-plano d-flex justify-content-center mt-5">
                        <a class="btn btn-primary" href="">Outras Dúvidas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" style="background-color: rgb(39,35,67); padding: 10px 0px;">
    <footer>
            <div class="container mt-3">
                <div class="row pt-5">
                    <div class="col-6">
                        <div class="card-footer">
                            <h5 class="text-white">INFORMAÇÕES DE CONTATO</h5>
                            <div class="info-contato-footer">
                                
                                <ul style="list-style: none;">
                                    <li>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007bff" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                            </svg>
                                        </span>
                                        <span class="text-white">(85)9 0000-0000</span>
                                    </li>
                                </ul>

                            </div>


                            <div class="info-contato-footer">

                                <ul style="list-style: none;">
                                    <li>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007bff" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                            </svg>
                                        </span>
                                        <span class="text-white">(85)9 0000-0000</span>
                                    </li>
                                </ul>

                            </div>

                            <div class="info-contato-footer">
                                 
                                <ul style="list-style: none;">
                                    <li>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#007bff" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                            </svg>
                                        </span>
                                        <span class="text-white">contato@gmail.com</span>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="info-contato-footer mt-5">
                            <h5 class="text-white">SAIBA MAIS NAS NOSSAS REDES SOCIAS</h5>
                            <div class="card-icons-social d-flex">
                                <div class="icon-instagram" style="padding: 6px; background-color: red; border-radius: 50%;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                    </svg>
                                </div>
                                <div class="icon-youtube bg-danger" style="padding: 6px; background-color: red; border-radius: 50%; margin: 0px 8px;">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                    </svg>
                                </div>
                                <div class="icon-linkedin bg-primary" style="padding: 6px; background-color: red; border-radius: 50%;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="card-baixar-app mt-5">
                            <h5 class="text-white">BAIXE NOSSO APP</h5>
                            <div class="card-image-app d-flex">
                                <div class="img-google-play"><img style="width: 140px;" src="{{ asset('images/googlePlay.webp') }}" alt=""></div>
                                <div class="img-google-play"><img style="width: 140px;" src="{{ asset('images/logoApp.webp') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="text-white">ENTRE EM CONTATO</h5>
                        <form action="">
                            <div class="box-form d-flex justify-content-between">
                                <div class="form-group w-100 mt-3">
                                    <label class="text-white" for="">Nome</label>
                                    <input type="text" class="form-control" name="nome">
                                </div>
                                <div class="form-group w-100 ms-2 mt-3">
                                    <label class="text-white" for="">Telefone</label>
                                    <input type="text" class="form-control" name="telefone">
                                </div>
                            </div>

                            <div class="box-form d-flex justify-content-between">
                                <div class="form-group w-100 mt-3">
                                    <label class="text-white" for="">E-mail</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="box-form d-flex justify-content-between">
                                <div class="form-group w-100 mt-3">
                                    <label class="text-white" for="">Mensagem</label>
                                    <textarea style="border-radius: 8px; padding: 6px;" name="mensagem" id="" cols="71" rows="10" placeholder="Conte como podemos ajudar *"></textarea>
                                </div>
                            </div>

                            <div class="box-form mb-5 d-flex justify-content-between">
                                <div class="form-group w-100 mt-3">
                                    <input type="submit" class="btn btn-primary" value="Enviar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr style="color: #fff; width: 100%;">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div style="font-size: 14px;" class="col-4 text-white">2024 Leandro Carvalho. Todos os Direitos Reservados.</div>
                        <div class="">
                            <a style="font-size: 12px; color: #ccc;" class="ms-3 text-decoration-none" href="">TERMOS E CONDIÇÕES GERAIS DE USO |</a>
                            <a style="font-size: 12px; color: #ccc;" class="ms-3 text-decoration-none" href=""> POLÍTICA DE PRIVACIDADE |</a>
                            <a style="font-size: 12px; color: #ccc;" class="ms-3 text-decoration-none" href=""> LGPD</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

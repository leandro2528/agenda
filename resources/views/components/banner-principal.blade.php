<div class="container">
            <div class="row my-5">
                <div class="col-6 mt-5">
                    <h2>Plataforma de Gerenciamento para</h2>
                    <h1 style="font-weight: bold;">ESPECIALISTAS EM SAÚDE</h1>
                    <h5 class="text-success">Simples e intuitiva para melhorar sua rotina!</h5>
                    <ul style="color: #000; font-weight: 400;">
                        <li>Registros de paciente digitais <span style="font-weight: 800;">(Com opções de
                                prescrição)</span></li>
                        <li>Marcação de consultas simplificada</li>
                        <li>Notificações automáticas via SMS e WhatsApp</li>
                        <li>Controle financeiro integrado</li>
                        <li>Website e Blog integrados</li>
                    </ul>
                    <h2 class="text-success" style="font-weight: bold;">E muitos outros recursos!</h2>
                    <div class="botoes-acesso">
                        @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-dark btn-sm mx-3  py-2 px-4"
                                style="font-weight: 600;">Entrar</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success btn-sm py-2 px-4"
                                style="font-weight: 600;">Teste Grátis</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-6 mt-5">
                    <img class="w-100" src="{{ asset('images/imagem-pg-inicial.webp') }}" alt="">
                </div>
            </div>
        </div>

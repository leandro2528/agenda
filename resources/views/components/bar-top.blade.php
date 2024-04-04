<div class="container-fluid">
        <a href="#topo"></a>
        <div class="row py-3">

            <div class="menu-fixed col-12 d-flex align-items-center justify-content-between"
                style="border-bottom: 1px solid #eee; padding: 10px 0px;">
                <div class="logo">
                    <img style="width: 200px;" src="{{ asset('images/logo-inicial.png') }}" alt="">
                </div>
                <div class="menu">
                    <nav class="navbar navbar-expand">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav" style="font-weight: 500; font-size: 14px;">

                                    <li class="nav-item">
                                        <a class="nav-link" href="#comoFunciona">Como Funciona</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#funcionalidades">Funcionalidades</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#planos">Planos</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#ajuda">Ajuda</a>
                                    </li>

                                    <li class="nav-item">
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
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
<!doctype html>
<html lang="pt-Br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - CliniConnect - O MELHOR SISTEMA DE GESTÃO PARA PROFISSIONAIS DA SAÚDE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .bar-int {
        display: flex;
        justify-content: center;
        margin: 6px 0px
    }

    .bar-preta {
        width: 30px;
        background-color: #000;
        height: 2px;
        margin-right: 6px;
    }

    .bar-azul {
        width: 60px;
        background-color: rgb(25,135,84);
        height: 2px;
    }

    .topo {
        position: fixed;
        right: 20px;
        bottom: 10px;
    }

    .menu-fixed {
        position: fixed;
        z-index: 2;
        top: 0;
        background-color: #fff;
    }
    </style>
</head>

<body>
    <x-bar-top></x-bar-top>
        @yield('content')

    <x-footer></x-footer>
</body>

</html>

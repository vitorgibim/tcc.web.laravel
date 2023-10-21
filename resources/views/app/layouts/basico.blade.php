<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Aluno Online - @yield('titulo')</title>
        <meta charset="utf-8">
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/multiform.css') }}"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.css"> 
    </head>

    <body>
        @include('app.layouts._partials.menu')
        @yield('conteudo')
        <script src="{{ asset('js/menu.js') }}"></script>
        <script src="{{ asset('js/candidato.js') }}"></script>
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>

    </body>
</html>
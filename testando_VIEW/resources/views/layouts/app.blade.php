<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script>
        
            alert('boa tarde!');
        </script>
    </head>
    <body>
        @section('topo')
        <img with="40px" src="https://prefeitura.pbh.gov.br/sites/default/files/estrutura-de-governo/comunicacao/2019/PBH75_7.png">
            Prefeitura de Belo Horizonte
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('rodape')
            Prefeitura de Belo Horizonte
        @show


    </body>
</html>
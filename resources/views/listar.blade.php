<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="cadastrar">Cadastrar</a>
                        </li>

                        <li class=" nav-item">
                            <a class="nav-link  active text-white" aria-current="page" href="/">Consultar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container p-5 ">

            <div class="py-3">
                <h2><b>Listar clientes</b></h2>
                <h3>Sistema utilizado para o agendamento de serviços</h3>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Origem</th>
                        <th>Data de contato</th>
                        <th>Observação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->nome }}</td>
                            <td>{{ $client->telefone }}</td>
                            <td>{{ $client->origem }}</td>
                            <td>{{ $client->datadecontato }}</td>
                            <td>{{ $client->observacao }}</td>

                            <td>
                                <a href="editar/{{ $client->id }}" class="btn btn-primary" role="button">Editar</a>
                                <a href="excluir/{{ $client->id }}" class="btn btn-danger" role="button">Excluir</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</html>
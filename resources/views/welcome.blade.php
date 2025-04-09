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
    <div>
        <div class="container p-5">  
            <nav class="navbar navbar-expand-lg bg-primary rounded">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#">Sistema Web</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="{{ route('welcome') }}">Cadastrar</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/listar.blade.php">Consultar</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link text-white" href="editar.blade.php">Editar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="excluir.blade.php">Excluir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="py-3">
                <h2><b>Cadastrar produtos</b></h2>
                <h3>Sistema utilizado para o agendamento de serviços</h3>
            </div>

            <form action="/cadastrar-produto" method="POST" class="row g-2">
                @csrf

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>

                <div class=" mb-3">
                    <label class="form-label" for="inputGroupSelect01">Origem</label>
                    <select name="origem" class="form-select" aria-label="Default select example">
                        <option selected>Escolha...</option>
                        <option value="telefone">Telefone</option>
                        <option value="whatssap">Whatssap</option>
                        <option value="celular">Celular</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Data de contato</label>
                    <input type="date" name="datadecontato" class="form-control" id="formGroupExampleInput"
                        placeholder="">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea name="observacao" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>

                <button class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</html>
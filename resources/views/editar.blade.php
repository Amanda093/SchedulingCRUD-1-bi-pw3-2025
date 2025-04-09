<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                                <a class="nav-link active text-white" aria-current="page" href="#welcome.blade.php">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#listar.blade.php">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="py-3">
                <h2><b>Consultar produtos</b></h2>
                <h3>Sistema utilizado para o agendamento de serviços</h3>
            </div>

            <form action="/editar-produto/{{ $produto -> id }}" method="POST" class="row g-2">
                @csrf

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" id="formGroupExampleInput" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                    <input type="text" name="telefone" value="{{ $produto->telefone }}" class="form-control" id="formGroupExampleInput2" placeholder="">
                </div>

                <div class=" mb-3">
                    <label class="form-label" for="inputGroupSelect01">Origem</label>
                    <select name="origem" value="{{ $produto->origem }}" class="form-select" aria-label="Default select example">
                        <option selected>Escolha...</option>
                        <option value="telefone">Telefone</option>
                        <option value="whatssap">Whatssap</option>
                        <option value="celular">Celular</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Data de contato</label>
                    <input type="date" name="datadecontato" value="{{ $produto->datadecontato }}" class="form-control" id="formGroupExampleInput"
                        placeholder="">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Observação</label>
                    <textarea name="observacao" value="{{ $produto->observacao }}" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>

                <button class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
</body>
</html>
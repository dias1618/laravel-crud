<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir disciplina</title>
</head>
<body>
    <h1>Atualizar disciplina</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="atualizar" method="POST">
        @csrf

        Nome
        <input type="text" name="nome" id="nome" value="{{ $disciplina->nome }}">
        <button>Salvar</button>
    </form>
    <p><a href="/disciplinas/">Voltar</a></p>
</body>
</html>
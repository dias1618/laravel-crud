<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Disciplinas</title>
</head>
<body>
    <h1>Disciplinas</h1>

    <ul>
        @foreach ($disciplinas as $disciplina)
            <li>{{ $disciplina->nome }}
                <a href="/disciplinas/{{ $disciplina->id }}/carregar">(Atualizar)</a>
                |
                <a href="/disciplinas/{{ $disciplina->id }}/excluir">(Excluir)</a>
            </li>
        @endforeach
    </ul>

    <p><a href="/disciplinas/inserir">Inserir Disciplina</a></p>
    <p><a href="/">Voltar</a></p>
</body>
</html>
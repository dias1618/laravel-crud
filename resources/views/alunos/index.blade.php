<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Alunos</h1>
    <ul>
        @foreach ($alunos as $aluno)
            <li>{{ $aluno->nome }} - ({{$aluno->curso->nome}})
                <a href="/alunos/{{ $aluno->id }}/excluir">(Excluir)</a>
                <a href="/alunos/{{ $aluno->id }}/disciplinas">(Listas Disciplinas)</a>
            </li>
        @endforeach
    </ul>
    <p><a href="/alunos/inserir">Inserir Aluno</a></p>
    <p><a href="/">Voltar</a></p>
</body>
</html>
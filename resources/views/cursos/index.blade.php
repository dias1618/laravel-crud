<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
</head>
<body>
    <h1>Cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->nome }}
                <a href="/cursos/{{ $curso->id }}/carregar">(Atualizar)</a>
                <a href="/cursos/{{ $curso->id }}/excluir">(Excluir)</a>
                <a href="/cursos/{{ $curso->id }}/disciplinas">(Listar Disciplinas)</a>
                <a href="/cursos/{{ $curso->id }}/alunos">(Listar Alunos)</a>
            </li>
        @endforeach
    </ul>
    <p><a href="/cursos/inserir">Inserir Curso</a></p>
    <p><a href="/">Voltar</a></p>
</body>
</html>
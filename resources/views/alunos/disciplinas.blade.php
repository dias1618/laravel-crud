<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar disciplinas</title>
</head>
<body>
    <h2>Disciplinas do aluno {{$aluno->nome}} ({{$aluno->curso->nome}})</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <ul>
        @foreach ($aluno->alunoDisciplinas as $alunoDisciplina)
            <li>{{ $alunoDisciplina->disciplina->nome }} - {{$alunoDisciplina->semestre}} ({{$alunoDisciplina->situacao}})
                <a href="/alunos/{{ $aluno->id }}/disciplinas/{{$alunoDisciplina->disciplina->id}}/excluir">(Excluir)</a>
            </li>
        @endforeach
    </ul>
    <p><a href="/alunos/{{ $aluno->id }}/disciplinas/adicionar">Adicionar disciplina</a></p>
    <p><a href="/alunos/">Voltar</a></p>
</body>
</html>
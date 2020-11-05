<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar disciplinas</title>
</head>
<body>
    <h2>Disciplinas do curso {{$curso->nome}}</h2>

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
        @foreach ($curso->disciplinas as $disciplina)
            <li>{{ $disciplina->nome }}
                <a href="/cursos/{{ $curso->id }}/disciplinas/{{$disciplina->id}}/excluir">(Excluir)</a>
            </li>
        @endforeach
    </ul>
    <p><a href="/cursos/{{ $curso->id }}/disciplinas/adicionar">Adicionar disciplina</a></p>
    <p><a href="/cursos/">Voltar</a></p>
</body>
</html>
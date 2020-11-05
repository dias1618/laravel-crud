<h2>Adicionar disciplina</h2>

<form action="salvarDisciplina" method="POST">
    @csrf

    <input name="idAluno" type="hidden" value="{{$aluno->id}}">

    <p>Nome<br />
    <input type="text" name="nome" id="nome" value="{{$aluno->nome}}" readonly></p>
    <p>Curso<br />
    <input type="text" name="nome" id="nome" value="{{$aluno->curso->nome}}" readonly></p>
    <span>Semestre
    <input type="text" name="semestre" id="semestre"></span>
    <span>Disciplina
    <select class="form-control" name="idDisciplina">
        <option>Selecione...</option>
        @foreach ($disciplinas as $disciplina)
            <option value="{{ $disciplina->id }}"> 
                {{ $disciplina->nome }} 
            </option>
        @endforeach    
    </select></span>
    <span>Situação
    <select class="form-control" name="situacao">
        <option>Selecione...</option>
        @foreach ($situacoes as $key => $value)
            <option value="{{ $key }}"> 
                {{ $value }} 
            </option>
        @endforeach    
    </select></span>
    <p><button>Salvar</button></p>
</form>
<p><a href="/alunos/{{$aluno->id}}/disciplinas">Voltar</a></p>
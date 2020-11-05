<form action="salvarDisciplina" method="POST">
    @csrf

    <input name="idCurso" type="hidden" value="{{$curso->id}}">

    <h2>Adicionar Curso</h2>

    <p>Curso<br />
    <input type="text" name="nome" id="nome" value="{{$curso->nome}}" readonly></p>
    <p>Disciplina<br />
    <select class="form-control" name="idDisciplina">
        <option>Selecione...</option>
        @foreach ($disciplinas as $disciplina)
            <option value="{{ $disciplina->id }}"> 
                {{ $disciplina->nome }} 
            </option>
        @endforeach    
    </select></p>
    <p><button>Salvar</button></p>
</form>

<p><a href="/cursos/{{$curso->id}}/disciplinas">Voltar</a></p>
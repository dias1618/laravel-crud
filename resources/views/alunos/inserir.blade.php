<form action="salvar" method="POST">
    @csrf

    <h2>Adicionar aluno</h2>

    <p>Nome<br />
    <input type="text" name="nome" id="nome"></p>
    
    <p>Curso<br />
    <select class="form-control" name="idCurso">
        <option>Selecione...</option>
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}"> 
                {{ $curso->nome }} 
            </option>
        @endforeach    
    </select></p>
    <button>Salvar</button>
</form>
<p><a href="/alunos/">Voltar</a></p>
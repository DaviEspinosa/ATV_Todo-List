<h1>Criar Nova Tarefa</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="titulo" id="titulo" required><br>

    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" id="descricao" required><br>

    <label for="setor">Setor:</label>
    <input type="text" name="setor" id="setor" required><br>

    <label for="prioridade">Prioridade:</label>
    <select name="prioridade" id="prioridade">
        <option value="baixa">Baixa</option>
        <option value="média">Média</option>
        <option value="alta">Alta</option>
    </select><br>

    <label for="data">Data:</label>
    <input type="date" name="data" id="data" required><br>

    <button type="submit">Salvar</button>
</form>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label for="user_id">Usuário:</label>
    <select name="user_id" id="user_id" required>
        <!-- Aqui você pode listar os usuários disponíveis -->
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select><br>

    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required><br>

    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" required><br>

    <label for="setor">Setor:</label>
    <input type="text" name="setor" required><br>

    <label for="prioridade">Prioridade:</label>
    <select name="prioridade">
        <option value="baixa">Baixa</option>
        <option value="média">Média</option>
        <option value="alta">Alta</option>
    </select><br>

    <label for="data">Data:</label>
    <input type="date" name="data" required><br>

    <label for="status">Status:</label>
    <select name="status">
        <option value="a fazer">A Fazer</option>
        <option value="fazendo">Fazendo</option>
        <option value="pronto">Pronto</option>
    </select><br>

    <button type="submit">Salvar</button>
</form>

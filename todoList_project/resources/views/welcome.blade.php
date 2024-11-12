<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Gerenciador de Tarefas</title>
    <!-- Adicionando o Bootstrap para estilo (opcional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Cabeçalho com links de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Task Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- Link para a página de Tarefas -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.index') }}">Tarefas</a>
                    </li>
                    <!-- Link para a página de Criar Tarefa -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.create') }}">Criar Tarefa</a>
                    </li>
                    <!-- Link para a página de Sobre (por exemplo) -->
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Sobre</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="container mt-4">
        <h1>Bem-vindo ao Gerenciador de Tarefas!</h1>
        <p>Gerencie suas tarefas de maneira simples e eficiente.</p>
    </div>

    <!-- Bootstrap JS (opcional, mas necessário para o menu de navegação funcionar) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

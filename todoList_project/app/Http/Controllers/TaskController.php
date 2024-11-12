<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;  
use App\Models\Task; 
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        // Recupera todas as tarefas do banco de dados e as agrupa por 'status' (a fazer, fazendo, pronto)
        $tasks = Task::all()->groupBy('status');

        // Retorna a view 'tasks.index' e passa as tarefas agrupadas para a view
        return view('tasks.index', compact('tasks'));
    }

    //exibir o formulário de criação
    public function create()
    {
        return view('tasks.create');
    }

    //armazenar
    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'required|exists:users,id', 
            'titulo' => 'required',
            'descricao' => 'required',  
            'setor' => 'required',  
            'prioridade' => 'required|in:baixa,média,alta',  
            'data' => 'required', 
            'status' => 'required|in:a fazer,fazendo,pronto',  
        ]);

        // Criar
        Task::create($request->all());

        // Após a criação, redireciona o usuário de volta para a lista de tarefas
        return redirect()->route('tasks.index');
    }

    //editar
    public function edit(Task $task)
    {
        // Retorna a view 'tasks.edit' e passa a tarefa para ser editada
        return view('tasks.edit', compact('task'));
    }

    //  atualizar
    public function update(Request $request, Task $task)
    {
 
        $request->validate([
            'prioridade' => 'required|in:baixa,média,alta', 
            'status' => 'required|in:pendente,em andamento,concluído',  
        ]);

        // Atualiza a tarefa com os novos valores de prioridade e status
        $task->update($request->only('prioridade', 'status'));

        // Após a atualização, redireciona o usuário de volta para a lista de tarefas
        return redirect()->route('tasks.index');
    }
}

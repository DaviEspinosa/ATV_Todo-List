<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'descricao',
        'setor',
        'prioridade',
        'data',
        'status',
    ];

    /**
     * Relacionamento: Uma tarefa pertence a um usuário.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

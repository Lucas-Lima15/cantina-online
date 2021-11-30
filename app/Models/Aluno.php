<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = [
        'user_id',
        'responsavel_id',
        'matricula',
        'turno',
        'telefone',
        'turma',
        'saldo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;

    protected $table = 'responsaveis';

    protected $fillable = [
        'user_id',
        'telefone',
        'cpf'
    ];

    // Relacionamento com User
    public function user() {
        return $this->belongsTo(User::class);
    }
}

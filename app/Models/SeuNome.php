<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeuNome extends Model
{
    use HasFactory;

    protected $table = 'seu_nome'; // Nome da tabela

    protected $fillable = ['nome', 'idade']; // Colunas que podem ser preenchidas em massa
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vistoria extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'nome', 'cpf','rg', 'telefone', 'endereco', 'cnh', 'selfie', 'placa', 'chassi','renavam', 'uf','marca', 'modelo','km', 'nivel_combustivel', 'foto_placa', 'foto_dianteira', 'foto_traseira', 'foto_hodometro', 'foto_banco'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //lista branca e negra
    protected $fillable = ['name', 'descricao','preco'];//Colunas que podem ser preenchidas
    //protected $guarded = ['admin']; ///Colunas que não podem ser preenchidas

}

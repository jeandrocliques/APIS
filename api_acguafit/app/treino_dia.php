<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class treino_dia extends Model
{
    protected $table='treino_dia';
    protected $filable=[
   	'id',
	'id_aluno',
	'felicidade',
	'treino'
	]
}

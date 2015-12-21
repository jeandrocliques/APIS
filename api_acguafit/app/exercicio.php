<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exercicio extends Model
{
      protected $table='exercicio';
    protected $filable=[
'descricao',
'cod_exercicio',
'fkid_treino'
	]
}

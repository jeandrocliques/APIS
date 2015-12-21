<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serie_exercicio extends Model
{
       protected $table='serie_exercicio';
    protected $filable=[
'peso',
'repeticoes',
'status',
'order',
'fkid_exercicio'
	]
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categoria extends Model

{
    protected $date = ['deleted_at'];
    protected $table = 'categorias';
    protected $primaryKey = 'codigocatecoria';


    //
}

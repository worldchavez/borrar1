<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class compra extends Model
{

    protected $date = ['deleted_at'];

    protected $table = 'compras';
    protected $primaryKey = 'codigocompra';
 

    //
}

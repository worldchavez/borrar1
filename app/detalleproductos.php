<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalleproductos extends Model
{

	use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'detalleproductos';
    protected $primaryKey = 'codigoproducto';
    //
}

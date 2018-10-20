<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sucursales extends Model
{

	use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'sucursales';
    protected $primaryKey = 'codigosucursales';
    //
}

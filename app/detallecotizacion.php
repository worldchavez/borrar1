<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class detallecotizacion extends Model
{

	use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'detallecotizacions';
    protected $primaryKey = 'codigodetallecotizacion';

    //
}

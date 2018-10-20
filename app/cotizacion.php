<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cotizacion extends Model
{

    use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'cotizacion';
    protected $primaryKey = 'codigocotizacion';


    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class salida extends Model
{
    use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'salidas';
    protected $primaryKey = 'codigosalida';

    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalleformadepago extends Model
{
    use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'detalleformadepagos';
    protected $primaryKey = 'codigodetalleformadepago';

    //
}

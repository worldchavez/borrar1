<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalleentrada extends Model
{

    use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'detalleentradas';
    protected $primaryKey = 'codigodetalleentrada';
    //
}

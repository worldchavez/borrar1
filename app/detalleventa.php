<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detalleventa extends Model
{
    use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'detalleventas';
    protected $primaryKey = 'codigodetalleventa';

    //
}

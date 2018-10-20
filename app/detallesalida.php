<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detallesalida extends Model
{
	use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'detallesalidas';
    protected $primaryKey = 'codigodetallesalida';

    //
}

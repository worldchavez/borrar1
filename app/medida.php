<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class medida extends Model
{

	use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'medidas';
    protected $primaryKey = 'codigomedida';
    //
}

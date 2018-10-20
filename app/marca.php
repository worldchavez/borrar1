<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class marca extends Model
{

	    use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'marcas';
    protected $primaryKey = 'codigomarca';
    //
}

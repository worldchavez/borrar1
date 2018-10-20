<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empresa extends Model
{

	use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'empresas';
    protected $primaryKey = 'codigoempresa';
    //
}

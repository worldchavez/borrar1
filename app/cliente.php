<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{

	 use softDeletes;

    protected $date = ['deleted_at'];

    protected $table = 'clientes';
    protected $primaryKey = 'codigoclientes';

    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class caja extends Model
{
use softDeletes;

    protected $date = ['deleted_at'];

    protected $table = 'cajas';
    protected $primaryKey = 'codigocaja';

    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cxp extends Model
{
    

    protected $date = ['deleted_at'];
    protected $table = 'cxps';
    protected $primaryKey = 'codigocxp';
    //
}

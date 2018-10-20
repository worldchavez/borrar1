<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cxc extends Model

{

    protected $date = ['deleted_at'];

    protected $table = 'cxcs';
    protected $primaryKey = 'codigocxc';

    //
}

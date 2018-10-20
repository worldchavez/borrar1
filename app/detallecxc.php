<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class detallecxc extends Model
{

    use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'detallecxcs';
    protected $primaryKey = 'codigodetallecxc';

    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class entrada extends Model
{
	  use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'entrada';
    protected $primaryKey = 'codigoentrada';
    //
}

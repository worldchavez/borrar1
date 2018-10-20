<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class formadepago extends Model
{

	use softDeletes;
    protected $date = ['deleted_at'];
    protected $table = 'formadepagos';
    protected $primaryKey = 'codigoformadepago';
    //
}
